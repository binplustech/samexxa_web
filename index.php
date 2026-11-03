<?php include_once('./includes/header.php'); ?>

<style>
/* ==========================================
   SAMEXXA — PREMIUM HOMEPAGE REDESIGN
   CSS ONLY | EXISTING HTML PRESERVED
========================================== */

:root {
  --sx-primary: #b66a35;
  --sx-primary-dark: #914b22;
  --sx-ink: #191919;
  --sx-muted: #737373;
  --sx-bg: #faf9f6;
  --sx-border: #ece9e4;
  --sx-green: #2f6f5e;
  --sx-radius: 20px;
  --sx-shadow: 0 12px 36px rgba(28, 25, 20, .06);
}

#main {
  overflow: hidden;
  color: var(--sx-ink);
  background: #fff;
}

#main *,
#main *::before,
#main *::after {
  box-sizing: border-box;
}

#main .wrap {
  width: min(1320px, calc(100% - 48px));
  margin-inline: auto;
}

#main h1,
#main h2,
#main h3,
#main h4,
#main p {
  overflow-wrap: break-word;
}

#main h2 {
  color: var(--sx-ink);
  font-size: clamp(27px, 3vw, 39px);
  font-weight: 800;
  line-height: 1.2;
  letter-spacing: -1.2px;
}

#main a {
  -webkit-tap-highlight-color: transparent;
}

#main a:focus-visible,
#main button:focus-visible,
#main input:focus-visible {
  outline: 3px solid rgba(182, 106, 53, .4);
  outline-offset: 4px;
}

/* ==========================================
   1. HERO — PREMIUM SPLIT LAYOUT
========================================== */

#main .hero {
  position: relative;
  isolation: isolate;
  padding: clamp(60px, 8vw, 110px) 0 75px;
  background:
    radial-gradient(ellipse at 85% 18%, rgba(227, 167, 46, .14), transparent 35%),
    radial-gradient(ellipse at 8% 90%, rgba(47, 111, 94, .07), transparent 32%),
    linear-gradient(135deg, #fcfaf6 0%, #f7f3eb 100%);
}

#main .hero > .wrap {
  display: grid;
  grid-template-columns: 1.04fr .96fr;
  align-items: center;
  gap: 55px;
}

#main .hero-copy {
  position: relative;
  z-index: 2;
  max-width: 650px;
}

#main .badge-pill {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 10px 15px;
  color: #365f4c;
  background: rgba(63, 108, 79, .09);
  border: 1px solid rgba(63, 108, 79, .13);
  border-radius: 50px;
  font-size: 12px;
  font-weight: 700;
  line-height: 1.5;
}

#main .dot {
  width: 8px;
  height: 8px;
  flex: 0 0 8px;
  display: inline-block;
  background: #43875b;
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(67, 135, 91, .12);
}

#main .hero h1 {
  max-width: 650px;
  margin: 26px 0 20px;
  color: #1c1b19;
  font-size: clamp(42px, 5.4vw, 70px);
  font-weight: 850;
  line-height: 1.06;
  letter-spacing: -3.5px;
}

#main .hero h1 .accent {
  color: var(--sx-primary);
}

#main .hero .lede {
  max-width: 540px;
  margin: 0;
  color: #69665f;
  font-size: 16px;
  line-height: 1.9;
}

/* Search bar */

#main .search-bar {
  display: flex;
  align-items: center;
  gap: 10px;
  max-width: 560px;
  margin-top: 30px;
  padding: 7px;
  background: #fff;
  border: 1px solid #e9e2d8;
  border-radius: 14px;
  box-shadow: 0 10px 35px rgba(55, 43, 26, .07);
  transition: border-color .25s, box-shadow .25s;
}

#main .search-bar:focus-within {
  border-color: var(--sx-primary);
  box-shadow: 0 0 0 4px rgba(182, 106, 53, .10);
}

#main .search-bar input {
  width: 100%;
  min-width: 0;
  height: 48px;
  padding: 0 16px;
  color: var(--sx-ink);
  background: transparent;
  border: 0;
  outline: 0;
  font: inherit;
  font-size: 13px;
  box-shadow: none;
}

#main .search-bar input:focus-visible {
  outline: none;
}

#main .search-bar button {
  display: grid;
  place-items: center;
  width: 49px;
  height: 48px;
  flex: 0 0 49px;
  color: #fff;
  background: var(--sx-primary);
  border: 0;
  border-radius: 10px;
  cursor: pointer;
  transition: background .25s, transform .25s;
}

#main .search-bar button:hover {
  background: var(--sx-primary-dark);
  transform: scale(.97);
}

/* Hero statistics */

#main .trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: 0;
  margin-top: 36px;
}

#main .trust-cell {
  display: flex;
  flex-direction: column;
  gap: 5px;
  min-width: 115px;
  padding: 0 23px;
  border-right: 1px solid #e2dcd2;
}

#main .trust-cell:first-child {
  padding-left: 0;
}

#main .trust-cell:last-child {
  border-right: 0;
}

#main .trust-cell strong {
  color: #24221e;
  font-size: 25px;
  font-weight: 800;
  letter-spacing: -.8px;
}

#main .trust-cell span {
  color: #77736c;
  font-size: 11px;
}

/* Hero illustration */

#main .hero-visual {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 0;
  min-height: 430px;
  isolation: isolate;
}

#main .hv-back {
  position: absolute;
  z-index: -1;
  width: min(100%, 410px);
  aspect-ratio: 1;
  background:
    radial-gradient(circle at 35% 28%, #fffdf7 0%, #f2e7d3 65%, #e9dcc7 100%);
  border: 1px solid rgba(182, 106, 53, .13);
  border-radius: 48% 52% 58% 42% / 46% 43% 57% 54%;
  box-shadow: inset 0 0 60px rgba(255,255,255,.5);
  animation: sx-blob 12s ease-in-out infinite alternate;
}

#main .hv-cart {
  width: min(58%, 260px);
  height: auto;
  filter: drop-shadow(0 15px 12px rgba(0,0,0,.08));
  animation: sx-float 5s ease-in-out infinite;
}

#main .float-chip {
  position: absolute;
  display: flex;
  align-items: center;
  gap: 9px;
  padding: 12px 15px;
  color: #292821;
  background: rgba(255,255,255,.96);
  border: 1px solid rgba(235,230,222,.95);
  border-radius: 13px;
  box-shadow: 0 12px 30px rgba(0,0,0,.07);
  font-size: 12px;
  font-weight: 700;
  animation: sx-float 5s ease-in-out infinite;
}

#main .float-chip svg {
  width: 35px;
  height: 35px;
  flex: 0 0 35px;
}

#main .fc1 {
  top: 13%;
  left: 1%;
}

#main .fc2 {
  top: 23%;
  right: 0;
  animation-delay: -.8s;
}

#main .fc3 {
  bottom: 24%;
  left: 0;
  animation-delay: -1.5s;
}

#main .fc4 {
  right: 3%;
  bottom: 15%;
  animation-delay: -2s;
}

#main .delivery-chip {
  position: absolute;
  bottom: 1%;
  left: 50%;
  display: flex;
  align-items: center;
  gap: 10px;
  width: max-content;
  max-width: 94%;
  padding: 14px 18px;
  color: #315c48;
  background: #fff;
  border: 1px solid #e5ebe3;
  border-radius: 50px;
  box-shadow: var(--sx-shadow);
  font-size: 12px;
  font-weight: 700;
  transform: translateX(-50%);
}

@keyframes sx-float {
  0%, 100% { translate: 0 0; }
  50% { translate: 0 -8px; }
}

@keyframes sx-blob {
  from { border-radius: 48% 52% 58% 42% / 46% 43% 57% 54%; }
  to { border-radius: 55% 45% 44% 56% / 53% 58% 42% 47%; }
}

/* ==========================================
   2. ABOUT — TRUST & BRAND STORY
========================================== */

#main .about {
  padding: 75px 0;
  background: #fff;
}

#main .about > .wrap {
  display: grid;
  grid-template-columns: 1.5fr .8fr;
  align-items: center;
  gap: 55px;
}

#main .about h2 {
  max-width: 600px;
  margin: 0 0 20px;
}

#main .about h2::after {
  display: block;
  width: 58px;
  height: 4px;
  margin-top: 17px;
  content: "";
  background: var(--sx-primary);
  border-radius: 10px;
}

#main .about > .wrap > div:first-child p {
  max-width: 720px;
  margin: 0 0 14px;
  color: var(--sx-muted);
  font-size: 14px;
  line-height: 1.95;
}

#main .stat-card {
  position: relative;
  overflow: hidden;
  padding: 34px;
  background: linear-gradient(145deg, #f8f0e5, #fdfaf5);
  border: 1px solid #eee1d0;
  border-radius: 22px;
}

#main .stat-card::after {
  position: absolute;
  top: -50px;
  right: -50px;
  width: 150px;
  height: 150px;
  content: "";
  border: 1px solid rgba(182, 106, 53, .15);
  border-radius: 50%;
  box-shadow: 0 0 0 20px rgba(182, 106, 53, .04),
              0 0 0 40px rgba(182, 106, 53, .025);
}

#main .stat-card strong {
  display: block;
  margin-bottom: 12px;
  color: var(--sx-primary);
  font-size: clamp(46px, 5vw, 65px);
  font-weight: 850;
  letter-spacing: -3px;
}

#main .stat-card p {
  margin: 0;
  color: #69645b;
  font-size: 13px;
  line-height: 1.85;
}

/* ==========================================
   3. CATEGORY SECTION
========================================== */

#main .categories {
  padding: 85px 0;
  background: var(--sx-bg);
}

#main .cat-head {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 20px;
  margin-bottom: 34px;
}

#main .cat-head h2 {
  margin: 0;
}

#main .cat-head p {
  margin: 10px 0 0;
  color: var(--sx-muted);
  font-size: 14px;
  line-height: 1.7;
}

#main .cat-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 22px;
}

#main .cat-card {
  min-width: 0;
  overflow: hidden;
  background: #fff;
  border: 1px solid #eeece7;
  border-radius: var(--sx-radius);
  box-shadow: 0 4px 18px rgba(30, 25, 15, .025);
  transition: transform .3s ease, box-shadow .3s ease,
              border-color .3s ease;
}

#main .cat-card:hover {
  transform: translateY(-6px);
  border-color: #dfc2a7;
  box-shadow: 0 18px 40px rgba(40, 30, 20, .09);
}

#main .cat-art {
  position: relative;
  display: grid;
  place-items: center;
  min-height: 205px;
  overflow: hidden;
}

#main .cat-art::before {
  position: absolute;
  width: 155px;
  height: 155px;
  content: "";
  border: 1px solid rgba(25,25,25,.07);
  border-radius: 50%;
  box-shadow: 0 0 0 20px rgba(255,255,255,.14),
              0 0 0 40px rgba(255,255,255,.12);
  transition: transform .4s ease;
}

#main .cat-card:hover .cat-art::before {
  transform: scale(1.14);
}

#main .cat-art svg {
  position: relative;
  z-index: 1;
  width: 105px;
  height: 105px;
  transition: transform .35s ease;
}

#main .cat-card:hover .cat-art svg {
  transform: scale(1.09) rotate(-2deg);
}

#main .cat-card .body {
  padding: 22px 22px 25px;
}

#main .cat-card .body h3 {
  margin: 0 0 9px;
  color: #24231f;
  font-size: 17px;
  font-weight: 750;
  line-height: 1.45;
  letter-spacing: -.3px;
}

#main .cat-card .body p {
  margin: 0;
  color: #77736d;
  font-size: 13px;
  line-height: 1.8;
}

/* ==========================================
   4. TRENDING PRODUCTS
========================================== */

#main .trending {
  padding: 85px 0;
  background: #fff;
}

#main .prod-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 22px;
}

#main .prod-card {
  position: relative;
  min-width: 0;
  padding: 12px 12px 20px;
  overflow: hidden;
  background: #fff;
  border: 1px solid #eeece7;
  border-radius: 18px;
  transition: transform .3s ease, box-shadow .3s ease,
              border-color .3s ease;
}

#main .prod-card:hover {
  transform: translateY(-5px);
  border-color: #e0c4aa;
  box-shadow: 0 16px 35px rgba(0,0,0,.07);
}

#main .prod-tag {
  position: absolute;
  z-index: 2;
  top: 23px;
  left: 23px;
  padding: 7px 10px;
  color: #fff;
  background: var(--sx-primary);
  border-radius: 6px;
  font-size: 11px;
  font-weight: 800;
}

#main .prod-art {
  display: grid;
  place-items: center;
  min-height: 230px;
  margin-bottom: 18px;
  overflow: hidden;
  border-radius: 12px;
}

#main .prod-art svg {
  width: 125px;
  height: 125px;
  transition: transform .4s ease;
}

#main .prod-card:hover .prod-art svg {
  transform: scale(1.12);
}

#main .prod-card h4 {
  min-height: 44px;
  margin: 0 3px 12px;
  color: #292722;
  font-size: 15px;
  font-weight: 750;
  line-height: 1.5;
}

#main .stars {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 3px;
  margin: 0 3px 14px;
  color: #e5a72f;
}

#main .stars svg {
  width: 13px;
  height: 13px;
  flex: 0 0 13px;
}

#main .stars span {
  margin-left: 5px;
  color: #85817a;
  font-size: 11px;
}

#main .price-row {
  display: flex;
  flex-wrap: wrap;
  align-items: baseline;
  gap: 10px;
  margin: 0 3px;
}

#main .price-row .now {
  color: #20201d;
  font-size: 21px;
  font-weight: 850;
  letter-spacing: -.5px;
}

#main .price-row .was {
  color: #99958d;
  font-size: 12px;
  text-decoration: line-through;
}

#main .prod-cta {
  display: block;
  margin-top: 16px;
  text-align: center;
}

/* ==========================================
   5. APP DOWNLOAD — DARK PREMIUM BANNER
========================================== */

#main .app-cta {
  position: relative;
  overflow: hidden;
  padding: 75px 0;
  background: #1d2924;
  isolation: isolate;
}

#main .app-cta::before {
  position: absolute;
  z-index: -1;
  top: -220px;
  right: 2%;
  width: 500px;
  height: 500px;
  content: "";
  background: radial-gradient(circle, rgba(227,167,46,.18), transparent 70%);
  border-radius: 50%;
}

#main .app-cta::after {
  position: absolute;
  z-index: -1;
  bottom: -260px;
  left: -120px;
  width: 450px;
  height: 450px;
  content: "";
  background: radial-gradient(circle, rgba(47,111,94,.28), transparent 70%);
  border-radius: 50%;
}

#main .app-cta > .wrap {
  display: grid;
  grid-template-columns: 1.2fr .8fr;
  align-items: center;
  gap: 50px;
}

#main .app-cta h2 {
  max-width: 560px;
  margin: 0 0 20px;
  color: #fff;
  font-size: clamp(30px, 4vw, 46px);
  line-height: 1.2;
  letter-spacing: -1.5px;
}

#main .app-cta .lede {
  max-width: 550px;
  margin: 0;
  color: #c4ccc6;
  font-size: 14px;
  line-height: 1.9;
}

#main .store-badges {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-top: 28px;
}

#main .store-badge {
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: 160px;
  padding: 12px 16px;
  color: #fff;
  background: #101512;
  border: 1px solid #46524a;
  border-radius: 12px;
  text-decoration: none;
  transition: transform .25s, background .25s;
}

#main .store-badge:hover {
  transform: translateY(-3px);
  background: #303d34;
}

#main .store-badge svg {
  width: 28px;
  height: 28px;
  flex: 0 0 28px;
}

#main .store-badge .lines {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

#main .store-badge small {
  color: #d3d8d3;
  font-size: 10px;
}

#main .store-badge strong {
  font-size: 15px;
}

/* Phone mockup */

#main .phone-mock {
  justify-self: center;
  width: 230px;
  padding: 10px;
  background: linear-gradient(145deg, #69746d, #151c18);
  border: 2px solid #69746d;
  border-radius: 35px;
  box-shadow: 0 30px 70px rgba(0,0,0,.32);
  transform: rotate(4deg);
  transition: transform .4s ease;
}

#main .phone-mock:hover {
  transform: rotate(0deg) translateY(-5px);
}

#main .phone-mock .screen {
  min-height: 380px;
  padding: 20px 13px;
  overflow: hidden;
  background: #fbfaf7;
  border-radius: 26px;
}

#main .phone-mock .app-bar {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 24px;
  color: #262822;
  font-size: 13px;
  font-weight: 800;
}

#main .phone-mock .app-bar img {
  width: 27px;
  height: 27px;
  object-fit: contain;
}

#main .phone-mock .row {
  height: 45px;
  margin-bottom: 13px;
  background: linear-gradient(90deg, #ece8df, #f3f0e9);
  border-radius: 9px;
}

#main .phone-mock .grid2 {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 9px;
  margin-bottom: 18px;
}

#main .phone-mock .grid2 div {
  height: 75px;
  background: #f0e3d2;
  border-radius: 9px;
}

#main .phone-mock .grid2 div:nth-child(2) {
  background: #e1ece5;
}

#main .phone-mock .grid2 div:nth-child(3) {
  background: #e8e8f0;
}

#main .phone-mock .grid2 div:nth-child(4) {
  background: #f3e6e6;
}

/* ==========================================
   6. TESTIMONIALS
========================================== */

#main .testimonials {
  padding: 85px 0;
  background: var(--sx-bg);
}

#main .test-head {
  margin-bottom: 32px;
  text-align: center;
}

#main .test-head h2 {
  margin: 0;
}

#main .test-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 22px;
}

#main .test-card {
  display: flex;
  flex-direction: column;
  min-width: 0;
  padding: 28px;
  background: #fff;
  border: 1px solid #eeece7;
  border-radius: 18px;
  box-shadow: 0 4px 18px rgba(0,0,0,.02);
  transition: transform .3s, box-shadow .3s;
}

#main .test-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0,0,0,.06);
}

#main .test-stars {
  display: flex;
  gap: 4px;
  margin-bottom: 20px;
  color: #e4a52c;
}

#main .test-stars svg {
  width: 15px;
  height: 15px;
}

#main .test-card .quote {
  flex: 1;
  margin: 0 0 25px;
  color: #5f5c56;
  font-size: 13px;
  line-height: 1.95;
}

#main .test-person {
  display: flex;
  align-items: center;
  gap: 13px;
  padding-top: 18px;
  border-top: 1px solid #f0eee9;
}

#main .test-person .avatar {
  display: grid;
  place-items: center;
  width: 44px;
  height: 44px;
  flex: 0 0 44px;
  color: #fff;
  border-radius: 50%;
  font-size: 12px;
  font-weight: 800;
}

#main .test-person .name {
  color: #26241f;
  font-size: 13px;
  font-weight: 800;
}

#main .test-person .city {
  margin-top: 5px;
  color: #8a867e;
  font-size: 11px;
}

/* ==========================================
   7. RESPONSIVE — TABLETS
========================================== */

@media (max-width: 1024px) {
  #main .hero > .wrap {
    gap: 25px;
  }

  #main .hero h1 {
    font-size: clamp(40px, 5vw, 56px);
    letter-spacing: -2px;
  }

  #main .hero-visual {
    min-height: 360px;
  }

  #main .cat-grid {
    gap: 16px;
  }

  #main .prod-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  #main .prod-art {
    min-height: 220px;
  }

  #main .about > .wrap {
    gap: 30px;
  }
}

/* ==========================================
   8. RESPONSIVE — MOBILE
========================================== */

@media (max-width: 767px) {
  #main .wrap {
    width: calc(100% - 32px);
  }

  #main h2 {
    font-size: 29px;
    letter-spacing: -.8px;
  }

  #main .hero {
    padding: 45px 0 55px;
  }

  #main .hero > .wrap {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  #main .hero-copy {
    max-width: 100%;
  }

  #main .badge-pill {
    padding: 8px 11px;
    font-size: 10px;
  }

  #main .hero h1 {
    margin: 22px 0 16px;
    font-size: clamp(39px, 9vw, 57px);
    letter-spacing: -2px;
  }

  #main .hero .lede {
    font-size: 14px;
    line-height: 1.8;
  }

  #main .search-bar {
    margin-top: 24px;
  }

  #main .search-bar input {
    padding-inline: 10px;
    font-size: 12px;
  }

  #main .trust-row {
    justify-content: space-between;
    margin-top: 28px;
  }

  #main .trust-cell {
    min-width: 0;
    padding: 0 12px;
  }

  #main .trust-cell strong {
    font-size: 21px;
  }

  #main .trust-cell span {
    font-size: 10px;
  }

  #main .hero-visual {
    min-height: 310px;
    margin-top: 5px;
  }

  #main .hv-back {
    width: min(80%, 300px);
  }

  #main .hv-cart {
    width: 48%;
  }

  #main .float-chip {
    gap: 6px;
    padding: 8px 10px;
    border-radius: 10px;
    font-size: 10px;
  }

  #main .float-chip svg {
    width: 27px;
    height: 27px;
    flex-basis: 27px;
  }

  #main .fc1 { top: 9%; left: 0; }
  #main .fc2 { top: 18%; right: 0; }
  #main .fc3 { bottom: 25%; left: 0; }
  #main .fc4 { right: 0; bottom: 19%; }

  #main .delivery-chip {
    bottom: 0;
    padding: 11px 13px;
    font-size: 10px;
  }

  #main .about,
  #main .categories,
  #main .trending,
  #main .testimonials {
    padding: 55px 0;
  }

  #main .about > .wrap {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  #main .about > .wrap > div:first-child p {
    font-size: 13px;
  }

  #main .stat-card {
    padding: 27px;
  }

  #main .cat-head {
    align-items: flex-start;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 24px;
  }

  #main .cat-head p {
    margin-top: 8px;
    font-size: 13px;
  }

  #main .cat-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
  }

  #main .cat-card {
    border-radius: 13px;
  }

  #main .cat-art {
    min-height: 140px;
  }

  #main .cat-art svg {
    width: 78px;
    height: 78px;
  }

  #main .cat-art::before {
    width: 100px;
    height: 100px;
    box-shadow: 0 0 0 12px rgba(255,255,255,.14);
  }

  #main .cat-card .body {
    padding: 14px 12px 17px;
  }

  #main .cat-card .body h3 {
    margin-bottom: 7px;
    font-size: 13px;
    line-height: 1.5;
  }

  #main .cat-card .body p {
    font-size: 11px;
    line-height: 1.7;
  }

  #main .prod-grid {
    gap: 12px;
  }

  #main .prod-card {
    padding: 8px 8px 15px;
    border-radius: 13px;
  }

  #main .prod-art {
    min-height: 145px;
    margin-bottom: 13px;
    border-radius: 9px;
  }

  #main .prod-art svg {
    width: 85px;
    height: 85px;
  }

  #main .prod-tag {
    top: 15px;
    left: 15px;
    padding: 5px 7px;
    font-size: 10px;
  }

  #main .prod-card h4 {
    min-height: 39px;
    margin: 0 2px 9px;
    font-size: 12px;
  }

  #main .stars {
    gap: 2px;
    margin: 0 2px 11px;
  }

  #main .stars svg {
    width: 10px;
    height: 10px;
    flex-basis: 10px;
  }

  #main .stars span {
    margin-left: 3px;
    font-size: 9px;
  }

  #main .price-row {
    gap: 6px;
    margin-inline: 2px;
  }

  #main .price-row .now {
    font-size: 16px;
  }

  #main .price-row .was {
    font-size: 10px;
  }

  #main .app-cta {
    padding: 55px 0;
  }

  #main .app-cta > .wrap {
    grid-template-columns: 1fr;
    gap: 38px;
  }

  #main .app-cta h2 {
    font-size: 32px;
    letter-spacing: -.9px;
  }

  #main .app-cta .lede {
    font-size: 13px;
  }

  #main .store-badges {
    gap: 10px;
  }

  #main .store-badge {
    min-width: 0;
    flex: 1 1 145px;
    padding: 11px;
  }

  #main .store-badge strong {
    font-size: 13px;
  }

  #main .phone-mock {
    width: 205px;
    transform: none;
  }

  #main .phone-mock .screen {
    min-height: 335px;
  }

  #main .test-head {
    margin-bottom: 25px;
    text-align: left;
  }

  #main .test-grid {
    grid-template-columns: 1fr;
    gap: 14px;
  }

  #main .test-card {
    padding: 22px;
  }

  #main .test-card .quote {
    margin-bottom: 20px;
  }
}

/* Small phones */

@media (max-width: 380px) {
  #main .wrap {
    width: calc(100% - 24px);
  }

  #main .hero h1 {
    font-size: 37px;
  }

  #main .trust-cell {
    padding-inline: 7px;
  }

  #main .trust-cell strong {
    font-size: 18px;
  }

  #main .cat-grid {
    gap: 9px;
  }

  #main .cat-card .body {
    padding: 12px 9px 14px;
  }

  #main .cat-card .body h3 {
    font-size: 12px;
  }

  #main .prod-grid {
    gap: 9px;
  }
}

/* Accessibility: reduce motion */

@media (prefers-reduced-motion: reduce) {
  #main *,
  #main *::before,
  #main *::after {
    animation: none !important;
    transition: none !important;
    scroll-behavior: auto !important;
  }
}
</style>

<main id="main">

  <!-- HERO -->
  <section class="hero" id="top">
    <div class="wrap">
      <div class="hero-copy">
        <span class="badge-pill"><span class="dot"></span> Now delivering across Gwalior &amp; 500+ cities</span>
        <h1>Everything you need, <span class="accent">one cart</span> away.</h1>
        <p class="lede">Samexxa brings your city's grocers, shops and sellers onto a single marketplace — browse, compare and get it delivered to your door.</p>

        <form class="search-bar" role="search" onsubmit="return false;">
          <input type="search" placeholder="Search for products, brands and categories" aria-label="Search products">
          <button type="submit" aria-label="Search">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.5" y2="16.5"/></svg>
          </button>
        </form>

        <div class="trust-row">
          <div class="trust-cell"><strong>12,000+</strong><span>Sellers onboard</span></div>
          <div class="trust-cell"><strong>500+</strong><span>Cities served</span></div>
          <div class="trust-cell"><strong>2M+</strong><span>Products listed</span></div>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
        <div class="hv-back"></div>
        <svg class="hv-cart" viewBox="0 0 200 170" fill="none">
          <path d="M20 14h14l14 78a12 12 0 0 0 12 10h58a12 12 0 0 0 12-10l12-46H62" stroke="#191919" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="72" cy="150" r="11" fill="#191919"/>
          <circle cx="120" cy="150" r="11" fill="#191919"/>
          <rect x="70" y="46" width="60" height="46" rx="8" fill="#F6F8F7"/>
          <path d="M84 68a12 12 0 1 1 15 11.6" stroke="#191919" stroke-width="6" fill="none" stroke-linecap="round"/>
          <circle cx="93" cy="72" r="6.5" stroke="#191919" stroke-width="5" fill="none"/>
        </svg>
        <div class="float-chip fc1">
          <svg viewBox="0 0 48 48" fill="none"><path d="M14 20c0-7 4-12 10-12s10 5 10 12" stroke="#3F6C4F" stroke-width="3" fill="none" stroke-linecap="round"/><path d="M11 20h26l-2 16a4 4 0 0 1-4 3.5H17a4 4 0 0 1-4-3.5z" fill="#E3A72E"/></svg>
          Groceries
        </div>
        <div class="float-chip fc2">
          <svg viewBox="0 0 48 48" fill="none"><rect x="16" y="6" width="16" height="30" rx="4" fill="#191919"/><rect x="19" y="10" width="10" height="18" fill="#6C93B0"/><circle cx="24" cy="32" r="1.6" fill="#F6F8F7"/></svg>
          Electronics
        </div>
        <div class="float-chip fc3">
          <svg viewBox="0 0 48 48" fill="none"><path d="M12 10h8l4 5 4-5h8l4 8-6 4v20H14V22l-6-4z" fill="#C97B84"/></svg>
          Fashion
        </div>
        <div class="float-chip fc4">
          <svg viewBox="0 0 48 48" fill="none"><rect x="8" y="26" width="32" height="12" rx="2" fill="#2F6F6B"/><rect x="12" y="16" width="8" height="12" rx="2" fill="#2F6F6B"/><rect x="24" y="10" width="6" height="6" fill="#E3A72E"/></svg>
          Home
        </div>
        <div class="delivery-chip"><span class="dot"></span> Delivered in as fast as 45 minutes</div>
      </div>
    </div>
  </section>

  <!-- ABOUT / COMPANY DESCRIPTION -->
  <section class="about" id="about">
    <div class="wrap">
      <div>
        <h2>Local shopping, simplified</h2>
        <p>Samexxa is a marketplace built to make everyday shopping easier. Instead of switching between different apps for groceries, gadgets or a birthday outfit, everything sits inside one cart, one checkout and one delivery tracker.</p>
        <p>Built in Lucknow, Samexxa connects neighbourhood stores and sellers with the reach they need to grow, and gives shoppers a faster way to find what they're already looking for close to home.</p>
      </div>
      <div class="stat-card">
        <strong>50+</strong>
        <p>Categories covered across grocery, fashion, electronics, home and more — with new sellers joining every month.</p>
      </div>
    </div>
  </section>

  <!-- CATEGORY HIGHLIGHTS -->
  <section class="categories" id="categories">
    <div class="wrap">
      <div class="cat-head">
        <h2>Shop by category</h2>
        <p>A few of the places Samexxa shoppers start their search.</p>
      </div>
      <div class="cat-grid">

        <div class="cat-card">
          <div class="cat-art" style="background:#FDF3E4;">
            <svg viewBox="0 0 100 100" fill="none">
              <path d="M28 40c0-13 8-24 22-24s22 11 22 24" stroke="#191919" stroke-width="5" fill="none" stroke-linecap="round"/>
              <path d="M22 40h56l-4 34a7 7 0 0 1-7 6H33a7 7 0 0 1-7-6z" fill="#E3A72E"/>
              <path d="M40 40c2-8 6-12 10-12s8 4 10 12" stroke="#191919" stroke-width="3" fill="none" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="body"><h3>Grocery &amp; Essentials</h3><p>Daily staples, fresh produce and household needs.</p></div>
        </div>

        <div class="cat-card">
          <div class="cat-art" style="background:#EAF1F6;">
            <svg viewBox="0 0 100 100" fill="none">
              <rect x="30" y="14" width="34" height="58" rx="7" fill="#191919"/>
              <rect x="35" y="21" width="24" height="36" fill="#6C93B0"/>
              <circle cx="47" cy="64" r="2.6" fill="#F6F8F7"/>
              <circle cx="70" cy="56" r="10" fill="#F37828"/>
              <path d="M66 56h8M70 52v8" stroke="#191919" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="body"><h3>Electronics &amp; Gadgets</h3><p>Phones, accessories and everyday tech.</p></div>
        </div>

        <div class="cat-card">
          <div class="cat-art" style="background:#F6EBEC;">
            <svg viewBox="0 0 100 100" fill="none">
              <path d="M32 22h12l6 8 6-8h12l8 14-10 6v34H34V42l-10-6z" fill="#C97B84"/>
              <path d="M40 22c2 4 5 6 10 6s8-2 10-6" stroke="#191919" stroke-width="3" fill="none" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="body"><h3>Fashion &amp; Lifestyle</h3><p>Clothing, footwear and accessories for everyone.</p></div>
        </div>

        <div class="cat-card">
          <div class="cat-art" style="background:#E9F1EF;">
            <svg viewBox="0 0 100 100" fill="none">
              <rect x="18" y="52" width="60" height="22" rx="5" fill="#2F6F6B"/>
              <rect x="24" y="34" width="14" height="20" rx="3" fill="#2F6F6B"/>
              <rect x="54" y="16" width="10" height="14" fill="#E3A72E"/>
              <path d="M50 16h18l-4 10H54z" fill="#E3A72E"/>
            </svg>
          </div>
          <div class="body"><h3>Home &amp; Living</h3><p>Furniture, décor and kitchen essentials.</p></div>
        </div>

        <div class="cat-card">
          <div class="cat-art" style="background:#F6EBEC;">
            <svg viewBox="0 0 100 100" fill="none">
              <rect x="32" y="36" width="16" height="34" rx="4" fill="#C97B84"/>
              <rect x="36" y="26" width="8" height="12" rx="2" fill="#191919"/>
              <rect x="54" y="46" width="18" height="24" rx="9" fill="#F37828"/>
              <rect x="60" y="38" width="6" height="10" fill="#191919"/>
            </svg>
          </div>
          <div class="body"><h3>Beauty &amp; Personal Care</h3><p>Skincare, grooming and wellness picks.</p></div>
        </div>

        <div class="cat-card">
          <div class="cat-art" style="background:#EAF1F6;">
            <svg viewBox="0 0 100 100" fill="none">
              <rect x="20" y="46" width="60" height="10" fill="#6C93B0"/>
              <rect x="24" y="56" width="52" height="10" fill="#2F6F6B"/>
              <rect x="28" y="66" width="44" height="10" fill="#E3A72E"/>
              <rect x="60" y="24" width="6" height="24" fill="#191919" transform="rotate(18 63 36)"/>
            </svg>
          </div>
          <div class="body"><h3>Books, Toys &amp; Stationery</h3><p>Reading, learning and playtime finds.</p></div>
        </div>

      </div>
    </div>
  </section>

  <!-- TRENDING PRODUCTS -->
  <section class="trending" id="trending">
    <div class="wrap">
      <div class="cat-head">
        <h2>Trending this week</h2>
        <p>Popular picks across Samexxa's most-shopped categories.</p>
      </div>

      <div class="prod-grid">

        <div class="prod-card">
          <span class="prod-tag">-30%</span>
          <div class="prod-art" style="background:#EAF1F6;">
            <svg viewBox="0 0 100 100" fill="none">
              <path d="M32 46a10 10 0 0 1 10-10" stroke="#191919" stroke-width="5" fill="none" stroke-linecap="round"/>
              <circle cx="30" cy="52" r="10" fill="#F37828"/>
              <path d="M68 46a10 10 0 0 0-10-10" stroke="#191919" stroke-width="5" fill="none" stroke-linecap="round"/>
              <circle cx="70" cy="52" r="10" fill="#F37828"/>
              <rect x="40" y="60" width="20" height="16" rx="4" fill="#191919"/>
            </svg>
          </div>
          <h4>TrueBeat Wireless Earbuds</h4>
          <div class="stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor" opacity=".3"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <span>4.2 (860)</span>
          </div>
          <div class="price-row"><span class="now">₹1,499</span><span class="was">₹2,199</span></div>
          <!--<a class="btn btn-outline prod-cta" href="#">Add to cart</a>-->
        </div>

        <div class="prod-card">
          <span class="prod-tag">-20%</span>
          <div class="prod-art" style="background:#F6EBEC;">
            <svg viewBox="0 0 100 100" fill="none">
              <path d="M18 66c8-4 16-4 22 0s14 4 22 0 16-4 20 0" stroke="#191919" stroke-width="5" fill="none" stroke-linecap="round"/>
              <path d="M22 62c2-14 10-24 20-26 8-1 8 6 16 6 8 0 10-6 16-4 8 3 10 14 8 24z" fill="#C97B84"/>
            </svg>
          </div>
          <h4>Stride Running Sneakers</h4>
          <div class="stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <span>4.6 (1.2k)</span>
          </div>
          <div class="price-row"><span class="now">₹1,899</span><span class="was">₹2,399</span></div>
          <!--<a class="btn btn-outline prod-cta" href="#">Add to cart</a>-->
        </div>

        <div class="prod-card">
          <span class="prod-tag">-15%</span>
          <div class="prod-art" style="background:#FDF3E4;">
            <svg viewBox="0 0 100 100" fill="none">
              <rect x="34" y="24" width="32" height="40" rx="10" fill="#191919"/>
              <rect x="38" y="30" width="24" height="24" rx="12" fill="#E3A72E"/>
              <rect x="46" y="64" width="8" height="8" fill="#191919"/>
              <path d="M40 76c4-4 16-4 20 0" stroke="#191919" stroke-width="4" fill="none" stroke-linecap="round"/>
            </svg>
          </div>
          <h4>Pulse Smartwatch</h4>
          <div class="stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor" opacity=".3"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <span>4.0 (540)</span>
          </div>
          <div class="price-row"><span class="now">₹2,299</span><span class="was">₹2,699</span></div>
          <!--<a class="btn btn-outline prod-cta" href="#">Add to cart</a>-->
        </div>

        <div class="prod-card">
          <span class="prod-tag">-25%</span>
          <div class="prod-art" style="background:#E9F1EF;">
            <svg viewBox="0 0 100 100" fill="none">
              <path d="M30 30h40l-4 8H34z" fill="#2F6F6B"/>
              <path d="M32 38h36l-5 34a5 5 0 0 1-5 4H42a5 5 0 0 1-5-4z" fill="#3F6C4F"/>
              <rect x="44" y="46" width="12" height="18" rx="2" fill="#F6F8F7"/>
            </svg>
          </div>
          <h4>WhipMate Mixer Grinder</h4>
          <div class="stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <span>4.7 (2.1k)</span>
          </div>
          <div class="price-row"><span class="now">₹1,349</span><span class="was">₹1,799</span></div>
          <!--<a class="btn btn-outline prod-cta" href="#">Add to cart</a>-->
        </div>

      </div>
    </div>
  </section>

  <!-- APP DOWNLOAD CTA -->
  <section class="app-cta" id="app">
    <div class="wrap">
      <div>
        <h2>Shop faster with the Samexxa app</h2>
        <p class="lede">Track orders, get personalised deals and reorder favourites in a tap — everything from the front page, right in your pocket.</p>
        <div class="store-badges">
          <a class="store-badge" href="#">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 2c.1 1.2-.4 2.4-1.1 3.3-.7.9-1.9 1.6-3 1.5-.1-1.2.4-2.5 1.1-3.3.8-.9 2-1.5 3-1.5zM20 17.1c-.6 1.3-.9 1.9-1.6 3-1 1.5-2.5 3.4-4.2 3.4-1.6 0-2-1-4.1-1s-2.6 1-4.1 1c-1.7 0-3.1-1.7-4.1-3.2C0 16.7-.2 12 1.6 9.5c1.1-1.5 2.9-2.5 4.5-2.5 1.6 0 2.6 1.1 4 1.1 1.3 0 2.1-1.1 4-1.1 1.3 0 2.7.7 3.7 1.9-3.3 1.8-2.8 6.5.2 8.2z"/></svg>
            <span class="lines"><small>Download on the</small><strong>App Store</strong></span>
          </a>
          <a class="store-badge" href="#">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4 2.6c-.4.3-.6.8-.6 1.4v16c0 .6.2 1.1.6 1.4l9-9.4-9-9.4z"/><path d="M14.5 12l2.9-3-9-5.1 6.1 8.1z"/><path d="M14.5 12l-6 8 9-5-3-3z"/><path d="M18.8 9.6 15.6 12l3.2 2.4c1.4-.8 2.2-1.5 2.2-2.4s-.8-1.6-2.2-2.4z"/></svg>
            <span class="lines"><small>Get it on</small><strong>Google Play</strong></span>
          </a>
        </div>
      </div>

      <div class="phone-mock" aria-hidden="true">
        <div class="screen">
          <div class="app-bar"><img src="/assets/logo.png" alt=""><span>Samexxa</span></div>
          <div class="row"></div>
          <div class="grid2"><div></div><div></div><div></div><div></div></div>
          <div class="row"></div>
          <div class="row" style="height:60px;"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <div class="wrap">
      <div class="test-head">
        <h2>What shoppers are saying</h2>
      </div>
      <div class="test-grid">

        <div class="test-card">
          <div class="test-stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
          </div>
          <p class="quote">"I used to order groceries on one app and electronics on another. Samexxa put both in the same cart, which saved me a good chunk of time this month."</p>
          <div class="test-person">
            <div class="avatar" style="background:#F37828;">RA</div>
            <div><div class="name">Ritu Agarwal</div><div class="city">Lucknow</div></div>
          </div>
        </div>

        <div class="test-card">
          <div class="test-stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor" opacity=".3"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
          </div>
          <p class="quote">"As a small seller, listing on Samexxa got my shop in front of a lot more people nearby than I could reach on my own."</p>
          <div class="test-person">
            <div class="avatar" style="background:#2F6F6B;">SK</div>
            <div><div class="name">Sandeep Kapoor</div><div class="city">Kanpur</div></div>
          </div>
        </div>

        <div class="test-card">
          <div class="test-stars">
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
            <svg viewBox="0 0 20 20" fill="currentColor"><path d="M10 1l2.6 5.9 6.4.6-4.8 4.3 1.4 6.2L10 14.9 4.4 18l1.4-6.2L1 7.5l6.4-.6z"/></svg>
          </div>
          <p class="quote">"Return pickup for a pair of shoes that didn't fit was arranged the same evening I asked. Didn't expect it to be that quick."</p>
          <div class="test-person">
            <div class="avatar" style="background:#C97B84;">PN</div>
            <div><div class="name">Priya Nair</div><div class="city">Gorakhpur</div></div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
<?php include_once('./includes/footer.php'); ?>