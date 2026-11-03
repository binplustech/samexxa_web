<?php
/**
 * Single homepage content endpoint.
 *
 * GET /api/home
 *
 * Returns hero slides, categories and trending products in one payload so the
 * storefront only needs a single request. The data file is maintained by the
 * admin side (CMS / dashboard) — this endpoint is read-only.
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, max-age=0');
header('X-Content-Type-Options: nosniff');

// Allow the storefront to be hosted on another origin while developing.
header('Access-Control-Allow-Origin: *');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, OPTIONS');
    http_response_code(204);
    exit;
}

$file = __DIR__ . '/../data/home.json';

if (!is_file($file) || !is_readable($file)) {
    http_response_code(500);
    echo json_encode([
        'ok'    => false,
        'error' => 'Homepage content is not available.',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

$raw = file_get_contents($file);
$data = json_decode((string) $raw, true);

if (!is_array($data)) {
    http_response_code(500);
    echo json_encode([
        'ok'    => false,
        'error' => 'Homepage content is not valid JSON.',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

echo json_encode(
    ['ok' => true] + $data,
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
);
