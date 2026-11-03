/* ==========================================================================
   Samexxa homepage
   Hero slider, category rail and trending products all render from ONE
   endpoint:  /api/home   (hero + categories + products in a single payload).

   Point `window.SAMEXXA_CONFIG.api` at your admin API when it is ready.
   ========================================================================== */
(function () {
  'use strict';

  var config = window.SAMEXXA_CONFIG || {};
  var API_URL = config.api || 'api/home';

  var $ = function (id) { return document.getElementById(id); };

  var el = {
    slider: $('heroSlider'),
    track: $('heroTrack'),
    prev: $('heroPrev'),
    next: $('heroNext'),
    dots: $('heroDots'),
    catRail: $('catRail'),
    catTitle: $('catTitle'),
    catSub: $('catSub'),
    prodGrid: $('prodGrid'),
    prodTitle: $('prodTitle'),
    prodSub: $('prodSub')
  };

  var STAR = 'M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z';

  function esc(value) {
    return String(value == null ? '' : value).replace(/[&<>"']/g, function (ch) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch];
    });
  }

  function setText(node, value) {
    if (node && typeof value === 'string' && value) node.textContent = value;
  }

  function money(value) {
    return '\u20B9' + Number(value).toLocaleString('en-IN');
  }

  function compact(value) {
    var n = Number(value) || 0;
    return n >= 1000 ? (n / 1000).toFixed(1).replace(/\.0$/, '') + 'k' : String(n);
  }

  /* ---------------------------------------------------------------- */
  /* Hero slider                                                       */
  /* ---------------------------------------------------------------- */

  var hero = { index: 0, count: 0, delay: 5000, timer: null, paused: false, bound: false };
  var reducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function slideMarkup(slide, index, total) {
    return '<div class="hs-slide' + (index === 0 ? ' is-active' : '') + '" role="group" aria-roledescription="slide" aria-label="' + (index + 1) + ' of ' + total + '">' +
      '<img src="' + esc(slide.image) + '" alt="' + esc(slide.title || '') + '" width="1000" height="780" loading="' + (index === 0 ? 'eager' : 'lazy') + '" draggable="false">' +
      '<div class="hs-caption">' +
        (slide.eyebrow ? '<span class="hs-eyebrow">' + esc(slide.eyebrow) + '</span>' : '') +
        '<h3 class="hs-title">' + esc(slide.title || '') + '</h3>' +
        (slide.text ? '<p class="hs-text">' + esc(slide.text) + '</p>' : '') +
        (slide.button && slide.button.label
          ? '<a class="hs-btn" href="' + esc(slide.button.link || '#') + '">' + esc(slide.button.label) + ' <span aria-hidden="true">&rarr;</span></a>'
          : '') +
      '</div>' +
    '</div>';
  }

  function goTo(index, animate) {
    if (!hero.count || !el.track) return;
    hero.index = ((index % hero.count) + hero.count) % hero.count;

    if (animate === false) el.track.style.transition = 'none';
    el.track.style.transform = 'translateX(' + (-hero.index * 100) + '%)';
    if (animate === false) {
      void el.track.offsetWidth;
      el.track.style.transition = '';
    }

    Array.prototype.forEach.call(el.track.children, function (slide, i) {
      slide.classList.toggle('is-active', i === hero.index);
      slide.setAttribute('aria-hidden', i === hero.index ? 'false' : 'true');
    });

    if (!el.dots) return;
    Array.prototype.forEach.call(el.dots.children, function (dot, i) {
      dot.classList.toggle('is-active', i === hero.index);
      if (i === hero.index) dot.setAttribute('aria-current', 'true');
      else dot.removeAttribute('aria-current');
    });
  }

  function stopAuto() {
    if (hero.timer) {
      window.clearInterval(hero.timer);
      hero.timer = null;
    }
  }

  function startAuto() {
    stopAuto();
    if (reducedMotion || hero.count < 2) return;
    hero.timer = window.setInterval(function () {
      if (!hero.paused) goTo(hero.index + 1);
    }, hero.delay);
  }

  function buildDots(total) {
    if (!el.dots) return;
    el.dots.innerHTML = '';
    for (var i = 0; i < total; i++) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'hs-dot' + (i === 0 ? ' is-active' : '');
      dot.setAttribute('role', 'tab');
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      if (i === 0) dot.setAttribute('aria-current', 'true');
      el.dots.appendChild(dot);
    }
  }

  function setupHero() {
    if (!el.slider || !el.track || !el.track.children.length) return;
    hero.count = el.track.children.length;
    buildDots(hero.count);
    goTo(0, false);
    bindHero();
    startAuto();
  }

  function bindHero() {
    if (hero.bound) return;
    hero.bound = true;

    if (el.prev) {
      el.prev.addEventListener('click', function () { goTo(hero.index - 1); startAuto(); });
    }
    if (el.next) {
      el.next.addEventListener('click', function () { goTo(hero.index + 1); startAuto(); });
    }

    if (el.dots) {
      el.dots.addEventListener('click', function (e) {
        var dot = e.target.closest ? e.target.closest('.hs-dot') : null;
        if (!dot) return;
        goTo(Array.prototype.indexOf.call(el.dots.children, dot));
        startAuto();
      });
    }

    el.slider.addEventListener('mouseenter', function () { hero.paused = true; });
    el.slider.addEventListener('mouseleave', function () { hero.paused = false; });
    el.slider.addEventListener('focusin', function () { hero.paused = true; });
    el.slider.addEventListener('focusout', function () { hero.paused = false; });

    document.addEventListener('visibilitychange', function () {
      hero.paused = document.hidden;
    });

    el.slider.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft') { e.preventDefault(); goTo(hero.index - 1); startAuto(); }
      if (e.key === 'ArrowRight') { e.preventDefault(); goTo(hero.index + 1); startAuto(); }
    });

    var startX = 0, startY = 0, swiping = false, suppressClick = false;

    el.slider.addEventListener('pointerdown', function (e) {
      if (e.pointerType === 'mouse' && e.button !== 0) return;
      startX = e.clientX;
      startY = e.clientY;
      swiping = false;
    });

    el.slider.addEventListener('pointermove', function (e) {
      var dx = e.clientX - startX;
      var dy = e.clientY - startY;
      if (Math.abs(dx) > 10 && Math.abs(dx) > Math.abs(dy)) swiping = true;
    });

    el.slider.addEventListener('pointerup', function (e) {
      if (!swiping) return;
      var dx = e.clientX - startX;
      var dy = e.clientY - startY;
      swiping = false;
      if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy)) {
        suppressClick = true;
        goTo(hero.index + (dx < 0 ? 1 : -1));
        startAuto();
      }
    });

    el.slider.addEventListener('click', function (e) {
      if (suppressClick) {
        e.preventDefault();
        e.stopPropagation();
        suppressClick = false;
      }
    }, true);
  }

  function buildHero(slides, autoplayMs) {
    if (!el.track || !Array.isArray(slides) || !slides.length) return;
    if (autoplayMs) hero.delay = Number(autoplayMs) || hero.delay;
    el.track.innerHTML = slides.map(function (slide, i) {
      return slideMarkup(slide, i, slides.length);
    }).join('');
    setupHero();
  }

  /* ---------------------------------------------------------------- */
  /* Category rail                                                     */
  /* ---------------------------------------------------------------- */

  var railBound = false;
  var railSync = function () {};

  function initCategoryRail() {
    var wrap = document.querySelector('#categories .cat-rail-wrap');
    var rail = el.catRail;
    if (!wrap || !rail) return;

    railSync = function () {
      var max = rail.scrollWidth - rail.clientWidth;
      wrap.classList.toggle('at-start', rail.scrollLeft <= 2);
      wrap.classList.toggle('at-end', rail.scrollLeft >= max - 2);
    };
    railSync();

    if (railBound) return;
    railBound = true;

    rail.addEventListener('scroll', function () { railSync(); }, { passive: true });
    window.addEventListener('resize', function () { railSync(); });

    var down = false, moved = false, startX = 0, startLeft = 0;

    rail.addEventListener('pointerdown', function (e) {
      if (e.pointerType !== 'mouse' || e.button !== 0) return;
      down = true;
      moved = false;
      startX = e.clientX;
      startLeft = rail.scrollLeft;
    });

    rail.addEventListener('pointermove', function (e) {
      if (!down) return;
      var dx = e.clientX - startX;
      if (Math.abs(dx) > 4) {
        if (!moved) rail.classList.add('is-dragging');
        moved = true;
        rail.scrollLeft = startLeft - dx;
      }
    });

    function endDrag() {
      if (!down) return;
      down = false;
      rail.classList.remove('is-dragging');
    }

    rail.addEventListener('pointerup', endDrag);
    rail.addEventListener('pointercancel', endDrag);
    window.addEventListener('pointerup', endDrag);

    rail.addEventListener('click', function (e) {
      if (moved) {
        e.preventDefault();
        e.stopPropagation();
        moved = false;
      }
    }, true);
  }

  function renderCategories(section) {
    if (!section || !el.catRail) return;
    setText(el.catTitle, section.heading);
    setText(el.catSub, section.subheading);

    var items = Array.isArray(section.items) ? section.items : [];
    if (!items.length) return;

    el.catRail.innerHTML = items.map(function (item) {
      return '<li role="listitem">' +
        '<a class="cat-item" href="' + esc(item.link || '#categories') + '" style="--tone:' + esc(item.tone || '#f2f7f4') + '">' +
          '<span class="cat-ico"><img src="' + esc(item.image) + '" alt="" width="220" height="220" loading="lazy" draggable="false"></span>' +
          '<span class="cat-copy"><strong>' + esc(item.name) + '</strong><small>Explore &rarr;</small></span>' +
        '</a>' +
      '</li>';
    }).join('');

    initCategoryRail();
  }

  /* ---------------------------------------------------------------- */
  /* Trending products                                                 */
  /* ---------------------------------------------------------------- */

  function starsMarkup(rating) {
    var filled = Math.max(0, Math.min(5, Math.round(Number(rating) || 0)));
    var out = '';
    for (var i = 0; i < 5; i++) {
      out += '<svg viewBox="0 0 20 20" fill="currentColor"' + (i >= filled ? ' opacity=".3"' : '') +
        ' aria-hidden="true"><path d="' + STAR + '"/></svg>';
    }
    return out;
  }

  function renderProducts(section) {
    if (!section || !el.prodGrid) return;
    setText(el.prodTitle, section.heading);
    setText(el.prodSub, section.subheading);

    var sectionEl = el.prodGrid.closest ? el.prodGrid.closest('.trending') : null;
    if (sectionEl) sectionEl.classList.toggle('prices-hidden', section.showPrice !== true);

    var items = Array.isArray(section.items) ? section.items : [];
    if (!items.length) return;

    var showPrice = section.showPrice === true;

    el.prodGrid.innerHTML = items.map(function (product) {
      var price = '';
      if (showPrice && product.price != null) {
        price = '<div class="price-row">' +
          '<span class="now">' + money(product.price) + '</span>' +
          (product.oldPrice != null ? '<span class="was">' + money(product.oldPrice) + '</span>' : '') +
        '</div>';
      }

      return '<div class="prod-card">' +
        (product.tag ? '<span class="prod-tag">' + esc(product.tag) + '</span>' : '') +
        '<div class="prod-art" style="background:' + esc(product.background || '#f3f1ec') + '">' +
          '<img src="' + esc(product.image) + '" alt="' + esc(product.name) + '" loading="lazy" draggable="false">' +
        '</div>' +
        '<h4>' + esc(product.name) + '</h4>' +
        '<div class="stars">' + starsMarkup(product.rating) +
          '<span>' + (Number(product.rating) || 0).toFixed(1) + ' (' + compact(product.reviews) + ')</span>' +
        '</div>' +
        price +
      '</div>';
    }).join('');
  }

  /* ---------------------------------------------------------------- */
  /* Boot                                                              */
  /* ---------------------------------------------------------------- */

  function loadContent() {
    if (typeof window.fetch !== 'function') return;

    window.fetch(API_URL, {
      headers: { Accept: 'application/json' },
      cache: 'no-store'
    })
      .then(function (response) {
        if (!response.ok) throw new Error('HTTP ' + response.status);
        return response.json();
      })
      .then(function (data) {
        if (!data || data.ok === false) throw new Error('Invalid payload');
        if (data.hero) buildHero(data.hero.slides || [], data.hero.autoplayMs);
        if (data.categories) renderCategories(data.categories);
        if (data.products) renderProducts(data.products);
      })
      .catch(function (error) {
        if (window.console && console.warn) {
          console.warn('[samexxa] ' + API_URL + ' unavailable (' + error.message + '). Using built-in content.');
        }
      });
  }

  // Render the built-in markup first so the page is never empty.
  setupHero();
  initCategoryRail();
  loadContent();
})();
