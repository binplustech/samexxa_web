<?php
/**
 * Router for PHP built-in server to handle clean URLs
 * Usage: php -S localhost:8000 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

// Remove leading slash
$uri = ltrim($uri, '/');

// Map clean URLs to PHP files
$routes = [
    ''           => 'index.php',
    'faq'        => 'faq.php',
    'about-us'   => 'about-us.php',
    'contact-us' => 'contact-us.php',
    'terms'      => 'terms.php',
    'privacy-policy' => 'privacy-policy.php',
    'return-refund'  => 'return-refund.php',
    'index1'     => 'index1.php',
    'api/home'   => 'api/home.php',
];

// Handle trailing slash
$uri = rtrim($uri, '/');

if (isset($routes[$uri])) {
    require __DIR__ . '/' . $routes[$uri];
    return true;
}

// Serve static files (CSS, JS, images, etc.)
$staticFile = __DIR__ . '/' . $uri;
if (is_file($staticFile)) {
    return false; // Let PHP's built-in server handle it
}

// 404 - fallback to index.php or show 404
http_response_code(404);
require __DIR__ . '/index.php';
return true;