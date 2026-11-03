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
  font-family: 'DM Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
}

#main h1,
#main h2,
#main h3,
#main h4,
#main .hs-title,
#main .cat-copy strong,
#main .prod-card h4,
#main .trust-cell strong,
#main .welcome-stat strong,
#main .visual-note strong,
#main .price-row .now {
  font-family: 'Manrope', system-ui, -apple-system, 'Segoe UI', sans-serif;
}

#main *,
#main *::before,
#main *::after {
  box-sizing: border-box;
}

#main .wrap {
  width: 100%;
  max-width: 1200px;
  margin-inline: auto;
  padding: 0 32px;
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
  padding: clamp(26px, 3.2vw, 48px) 0 75px;
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

/* Hero visual — image slider */

#main .hero-visual {
  position: relative;
  min-width: 0;
  min-height: 430px;
}

#main .hs {
  position: relative;
  height: 100%;
  min-height: 430px;
  overflow: hidden;
  background: #f1ece4;
  border: 1px solid var(--sx-border);
  border-radius: 26px;
  box-shadow: 0 26px 60px rgba(40, 31, 20, .14);
  isolation: isolate;
  touch-action: pan-y;
}

#main .hs-track {
  display: flex;
  height: 100%;
  min-height: 430px;
  transition: transform .65s cubic-bezier(.4, 0, .2, 1);
  will-change: transform;
}

#main .hs-slide {
  position: relative;
  flex: 0 0 100%;
  min-width: 0;
  overflow: hidden;
}

#main .hs-slide > img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.02);
  transition: transform 7s ease;
}

#main .hs-slide.is-active > img {
  transform: scale(1.09);
}

#main .hs-slide::after {
  position: absolute;
  inset: 0;
  content: "";
  background: linear-gradient(180deg,
    rgba(12, 18, 14, 0) 34%,
    rgba(12, 18, 14, .55) 68%,
    rgba(12, 18, 14, .82) 100%);
}

#main .hs-caption {
  position: absolute;
  z-index: 2;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 26px 26px 48px;
  color: #fff;
}

#main .hs-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  margin-bottom: 12px;
  padding: 6px 12px;
  background: rgba(255, 255, 255, .18);
  border: 1px solid rgba(255, 255, 255, .28);
  border-radius: 99px;
  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
  font-size: 9.5px;
  font-weight: 800;
  letter-spacing: .13em;
  text-transform: uppercase;
}

#main .hs-title {
  max-width: 16ch;
  margin: 0 0 9px;
  font-size: clamp(21px, 2vw, 28px);
  font-weight: 800;
  line-height: 1.18;
  letter-spacing: -.7px;
  text-shadow: 0 2px 18px rgba(0, 0, 0, .25);
}

#main .hs-text {
  max-width: 36ch;
  margin: 0 0 16px;
  color: rgba(255, 255, 255, .82);
  font-size: 12.5px;
  line-height: 1.6;
}

#main .hs-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 18px;
  color: #20201d;
  background: #fff;
  border-radius: 99px;
  font-size: 12px;
  font-weight: 800;
  text-decoration: none;
  transition: background .2s ease, color .2s ease, transform .2s ease;
}

#main .hs-btn:hover,
#main .hs-btn:focus-visible {
  color: #fff;
  background: var(--sx-primary);
  transform: translateY(-1px);
}

/* Dots */

#main .hs-dots {
  position: absolute;
  z-index: 4;
  bottom: 18px;
  left: 50%;
  display: flex;
  gap: 7px;
  transform: translateX(-50%);
}

#main .hs-dot {
  width: 7px;
  height: 7px;
  padding: 0;
  background: rgba(255, 255, 255, .5);
  border: 0;
  border-radius: 99px;
  cursor: pointer;
  transition: width .25s ease, background .25s ease;
}

#main .hs-dot.is-active {
  width: 22px;
  background: #fff;
}

/* ==========================================
   2. ABOUT — WHERE QUALITY MEETS VALUE
========================================== */

#main .about-welcome {
  position: relative;
  overflow: hidden;
  padding: 76px 0;
  background: linear-gradient(145deg, #eef2e9, #faf8f1 52%, #f5ede4);
}

#main .about-welcome::before,
#main .about-welcome::after {
  position: absolute;
  content: "";
  border-radius: 50%;
  pointer-events: none;
}

#main .about-welcome::before {
  top: -170px;
  right: -120px;
  width: 430px;
  height: 430px;
  border: 80px solid rgba(227, 167, 46, .16);
}

#main .about-welcome::after {
  left: -160px;
  bottom: -230px;
  width: 390px;
  height: 390px;
  background: rgba(182, 106, 53, .08);
}

#main .about-welcome > .wrap {
  position: relative;
  z-index: 1;
  max-width: 1136px;
  display: grid;
  grid-template-columns: .9fr 1.1fr;
  align-items: center;
  gap: 42px;
  padding: 24px;
  background: rgba(255, 255, 255, .78);
  border: 1px solid rgba(255, 255, 255, .9);
  border-radius: 36px;
  box-shadow: 0 28px 80px rgba(23, 79, 59, .11);
  -webkit-backdrop-filter: blur(14px);
  backdrop-filter: blur(14px);
}

#main .about-welcome > .wrap::before {
  position: absolute;
  inset: 8px;
  content: "";
  border: 1px solid rgba(23, 79, 59, .06);
  border-radius: 29px;
  pointer-events: none;
}

/* Image */
#main .welcome-visual {
  position: relative;
  min-height: 465px;
  padding: 12px;
}

#main .welcome-frame {
  position: absolute;
  inset: 12px;
  overflow: hidden;
  background-color: #153d31;
  background-image:
    linear-gradient(180deg, rgba(8, 35, 26, .02), rgba(8, 35, 26, .18)),
    url('assets/hero/welcome-marketplace.jpg');
  background-position: center 50%;
  background-size: cover;
  border-radius: 26px;
  box-shadow: 0 24px 55px rgba(18, 55, 43, .2);
}

#main .welcome-frame::after {
  position: absolute;
  inset: 0;
  content: "";
  border: 1px solid rgba(255, 255, 255, .2);
  border-radius: inherit;
  pointer-events: none;
}

#main .premium-badge {
  position: absolute;
  z-index: 3;
  top: 27px;
  left: 27px;
  display: flex;
  align-items: center;
  gap: 9px;
  padding: 9px 13px;
  color: var(--sx-ink);
  background: rgba(255, 255, 255, .92);
  border: 1px solid rgba(255, 255, 255, .9);
  border-radius: 13px;
  box-shadow: 0 12px 28px rgba(20, 45, 35, .16);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  font-size: 11px;
  font-weight: 700;
}

#main .premium-badge i {
  display: grid;
  width: 26px;
  height: 26px;
  place-items: center;
  color: #2f6f5e;
  background: #e3a72e;
  border-radius: 8px;
  font-style: normal;
}

#main .premium-badge svg {
  width: 14px;
  height: 14px;
}

#main .visual-note {
  position: absolute;
  z-index: 3;
  right: 0;
  bottom: 26px;
  min-width: 180px;
  padding: 14px 18px;
  color: #fff;
  background: linear-gradient(135deg, var(--sx-primary), #8f4a1f);
  border: 4px solid #fff;
  border-radius: 17px 4px 4px 17px;
  box-shadow: 0 18px 35px rgba(84, 40, 21, .24);
}

#main .visual-note strong {
  display: block;
  font-size: 24px;
  font-weight: 800;
  line-height: 1.15;
}

#main .visual-note span {
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: .1em;
}

/* Copy */
#main .welcome-copy {
  position: relative;
  padding: 20px 24px 20px 8px;
}

#main .welcome-kicker {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 14px;
  color: var(--sx-primary);
  font-size: 11px;
  font-weight: 800;
  letter-spacing: .12em;
  text-transform: uppercase;
}

#main .welcome-kicker::before,
#main .welcome-kicker::after {
  width: 30px;
  height: 2px;
  content: "";
  background: linear-gradient(90deg, transparent, var(--sx-primary));
}

#main .welcome-kicker::after {
  background: linear-gradient(90deg, var(--sx-primary), transparent);
}

#main .welcome-copy h2 {
  margin: 0;
  font-size: clamp(30px, 3.2vw, 44px);
  letter-spacing: -1.6px;
}

#main .welcome-copy > p {
  max-width: 590px;
  margin: 17px 0 0;
  padding-left: 17px;
  color: var(--sx-muted);
  border-left: 3px solid #d8b06a;
  font-size: 14px;
  line-height: 1.78;
}

#main .welcome-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 9px;
  margin-top: 22px;
}

#main .welcome-stat {
  padding: 13px 10px;
  background: linear-gradient(145deg, #f6f7f2, #fff);
  border: 1px solid rgba(23, 79, 59, .09);
  border-radius: 13px;
  text-align: center;
}

#main .welcome-stat strong {
  display: block;
  color: var(--sx-green);
  font-size: 21px;
  font-weight: 800;
  letter-spacing: -.5px;
}

#main .welcome-stat span {
  color: var(--sx-muted);
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: .06em;
}

/* ==========================================
   3. CATEGORY SECTION — SLIDING CARD RAIL
   Exactly 5 cards per view on desktop; fewer items grow to fill the row.
========================================== */

#main .categories {
  padding: 76px 0;
  background: var(--sx-bg);
  border-top: 1px solid var(--sx-border);
  border-bottom: 1px solid var(--sx-border);
}

#main .cat-head {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 20px;
  margin-bottom: 30px;
  flex-wrap: wrap;
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

/* Rail wrapper + edge fades */
#main .cat-rail-wrap {
  position: relative;
}

#main .cat-rail-wrap::before,
#main .cat-rail-wrap::after {
  content: "";
  position: absolute;
  top: 0;
  z-index: 2;
  width: 64px;
  height: 100%;
  pointer-events: none;
  opacity: 1;
  transition: opacity .25s ease;
}

#main .cat-rail-wrap::before {
  left: -1px;
  background: linear-gradient(270deg, rgba(250, 249, 246, 0) 0%, var(--sx-bg) 92%);
}

#main .cat-rail-wrap::after {
  right: -1px;
  background: linear-gradient(90deg, rgba(250, 249, 246, 0) 0%, var(--sx-bg) 92%);
}

#main .cat-rail-wrap.at-start::before {
  opacity: 0;
}

#main .cat-rail-wrap.at-end::after {
  opacity: 0;
}

/* Horizontal scroller */
#main .cat-rail {
  --cat-gap: 16px;
  display: flex;
  gap: var(--cat-gap);
  margin: 0;
  padding: 6px 2px 18px;
  list-style: none;
  overflow-x: auto;
  scroll-snap-type: x proximity;
  scroll-behavior: smooth;
  scroll-padding-inline: 2px;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  -ms-overflow-style: none;
  cursor: grab;
}

#main .cat-rail.is-dragging {
  cursor: grabbing;
  scroll-snap-type: none;
  scroll-behavior: auto;
}

#main .cat-rail::-webkit-scrollbar {
  display: none;
}

/* 5 across; grow to share the full width when there are fewer than 5 */
#main .cat-rail > li {
  flex: 1 0 calc((100% - 4 * var(--cat-gap)) / 5);
  min-width: 0;
  scroll-snap-align: start;
}

/* Category card — uses the same card language as "Trending this week" */
#main .cat-item {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 0;
  width: 100%;
  padding: 12px 12px 20px;
  overflow: hidden;
  text-decoration: none;
  background: #fff;
  border: 1px solid #eeece7;
  border-radius: 18px;
  -webkit-user-select: none;
  user-select: none;
  transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}

#main .cat-item:hover,
#main .cat-item:focus-visible {
  transform: translateY(-5px);
  border-color: #e0c4aa;
  box-shadow: 0 16px 35px rgba(0, 0, 0, .07);
}

#main .cat-item:active {
  transform: translateY(-2px);
}

/* Image tile mirrors the product artwork area */
#main .cat-ico {
  display: block;
  width: 100%;
  height: 196px;
  flex: 0 0 auto;
  margin-bottom: 16px;
  overflow: hidden;
  background: linear-gradient(150deg, var(--tone, #f2f7f4), #fff 145%);
  border-radius: 12px;
}

#main .cat-ico img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .4s ease;
}

#main .cat-item:hover .cat-ico img {
  transform: scale(1.08);
}

/* Name + explore link */
#main .cat-copy {
  display: flex;
  flex-direction: column;
  gap: 5px;
  margin-top: auto;
  padding: 0 3px;
}

#main .cat-copy strong {
  color: #292722;
  font-size: 15px;
  font-weight: 800;
  line-height: 1.45;
  letter-spacing: -.2px;
}

#main .cat-copy small {
  color: var(--sx-green);
  font-size: 10px;
  font-weight: 800;
  letter-spacing: .08em;
  text-transform: uppercase;
}

/* Responsive */
@media (max-width: 1024px) {
  #main .cat-rail > li {
    flex-basis: calc((100% - 3 * var(--cat-gap)) / 4);
  }

  #main .cat-item {
    padding: 10px 10px 17px;
    border-radius: 16px;
  }

  #main .cat-ico {
    height: 168px;
    margin-bottom: 14px;
    border-radius: 11px;
  }

  #main .cat-copy strong {
    font-size: 14px;
  }
}

@media (max-width: 767px) {
  #main .categories {
    padding: 44px 0 50px;
  }

  #main .cat-head {
    margin-bottom: 18px;
  }

  #main .cat-head h2 {
    font-size: 29px;
    letter-spacing: -.8px;
  }

  #main .cat-head p {
    font-size: 13px;
  }

  #main .cat-rail {
    --cat-gap: 10px;
    padding: 4px 2px 12px;
  }

  #main .cat-rail > li {
    flex-basis: calc((100% - 2 * var(--cat-gap)) / 2.3);
  }

  #main .cat-item {
    padding: 8px 8px 14px;
    border-radius: 14px;
  }

  #main .cat-ico {
    height: 132px;
    margin-bottom: 11px;
    border-radius: 9px;
  }

  #main .cat-copy strong {
    font-size: 13px;
  }

  #main .cat-copy small {
    font-size: 9px;
  }

  #main .cat-rail-wrap::before,
  #main .cat-rail-wrap::after {
    width: 34px;
  }
}

@media (max-width: 380px) {
  #main .cat-rail > li {
    flex-basis: calc((100% - 1 * var(--cat-gap)) / 1.75);
  }

  #main .cat-item {
    padding: 7px 7px 12px;
  }

  #main .cat-ico {
    height: 112px;
    margin-bottom: 10px;
  }
}

@media (prefers-reduced-motion: reduce) {
  #main .cat-rail {
    scroll-behavior: auto;
  }

  #main .cat-item,
  #main .cat-ico img {
    transition: none;
  }
}

/* ==========================================
   3b. WHY SAMEXXA — WELCOME + TRUST FEATURES
========================================== */

#main .why {
  position: relative;
  overflow: hidden;
  padding: 76px 0;
  background: linear-gradient(145deg, #edf1e8 0%, #f8f6ef 50%, #f4ede4 100%);
}

#main .why::before,
#main .why::after {
  position: absolute;
  content: "";
  border-radius: 50%;
  pointer-events: none;
}

#main .why::before {
  top: -180px;
  left: -160px;
  width: 400px;
  height: 400px;
  border: 70px solid rgba(227, 167, 46, .18);
}

#main .why::after {
  right: -140px;
  bottom: -210px;
  width: 420px;
  height: 420px;
  background: rgba(47, 111, 94, .09);
}

#main .why-panel {
  position: relative;
  z-index: 1;
  padding: 40px 38px 38px;
  background: rgba(255, 255, 255, .78);
  border: 1px solid rgba(255, 255, 255, .95);
  border-radius: 36px;
  box-shadow: 0 28px 80px rgba(23, 79, 59, .10);
  -webkit-backdrop-filter: blur(14px);
  backdrop-filter: blur(14px);
}

#main .why-panel::before {
  position: absolute;
  inset: 8px;
  content: "";
  border: 1px solid rgba(23, 79, 59, .06);
  border-radius: 29px;
  pointer-events: none;
}

#main .why-head {
  position: relative;
  z-index: 1;
  margin-bottom: 32px;
  text-align: center;
}

#main .why-kicker {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 13px;
  padding: 8px 15px;
  color: var(--sx-green);
  background: linear-gradient(135deg, rgba(227, 167, 46, .45), rgba(227, 167, 46, .16));
  border: 1px solid rgba(23, 79, 59, .08);
  border-radius: 99px;
  font-size: 10.5px;
  font-weight: 800;
  letter-spacing: .12em;
  text-transform: uppercase;
}

#main .why-kicker::before {
  width: 7px;
  height: 7px;
  content: "";
  background: var(--sx-primary);
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(182, 106, 53, .12);
}

#main .why h2 {
  margin: 0 auto;
  font-size: clamp(32px, 3.6vw, 45px);
  letter-spacing: -1.4px;
}

#main .why-lede {
  max-width: 800px;
  margin: 15px auto 0;
  color: var(--sx-muted);
  font-size: 15px;
  line-height: 1.78;
}

#main .why-stats {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  margin: 24px auto 0;
}

#main .why-stat {
  min-width: 148px;
  padding: 12px 22px;
  background: linear-gradient(145deg, #f6f7f2, #fff);
  border: 1px solid rgba(23, 79, 59, .09);
  border-radius: 13px;
  text-align: center;
}

#main .why-stat strong {
  display: block;
  color: var(--sx-green);
  font-size: 21px;
  font-weight: 800;
  letter-spacing: -.5px;
}

#main .why-stat span {
  color: var(--sx-muted);
  font-size: 9.5px;
  letter-spacing: .06em;
  text-transform: uppercase;
}

#main .why-grid {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 15px;
}

#main .why-card {
  position: relative;
  min-height: 236px;
  overflow: hidden;
  padding: 24px 21px;
  background: linear-gradient(155deg, #fff, rgba(247, 249, 244, .86));
  border: 1px solid rgba(23, 79, 59, .09);
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(23, 79, 59, .06);
  transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}

#main .why-card::before {
  position: absolute;
  top: 0;
  left: 21px;
  width: 42px;
  height: 3px;
  content: "";
  background: #e3a72e;
  border-radius: 0 0 6px 6px;
}

#main .why-card::after {
  position: absolute;
  right: -38px;
  bottom: -48px;
  width: 115px;
  height: 115px;
  content: "";
  background: #e3a72e;
  border-radius: 50%;
  opacity: .12;
  transition: transform .3s ease, opacity .3s ease;
}

#main .why-card:nth-child(2)::before,
#main .why-card:nth-child(2)::after { background: #d96035; }
#main .why-card:nth-child(3)::before,
#main .why-card:nth-child(3)::after { background: #6b5fa6; }
#main .why-card:nth-child(4)::before,
#main .why-card:nth-child(4)::after { background: #2f6f5e; }

#main .why-card:hover {
  z-index: 2;
  transform: translateY(-8px);
  border-color: rgba(23, 79, 59, .2);
  box-shadow: 0 22px 50px rgba(23, 79, 59, .14);
}

#main .why-card:hover::after {
  transform: scale(1.4);
  opacity: .2;
}

#main .why-icon {
  position: relative;
  display: grid;
  width: 56px;
  height: 56px;
  margin-bottom: 20px;
  place-items: center;
  color: #2f6f5e;
  background: linear-gradient(145deg, #f2cd6c, #e3a72e);
  border: 3px solid #fff;
  border-radius: 17px;
  box-shadow: 0 10px 22px rgba(100, 125, 45, .17);
}

#main .why-icon svg {
  width: 26px;
  height: 26px;
}

#main .why-card:nth-child(2) .why-icon {
  color: #fff;
  background: linear-gradient(145deg, #f17845, #d96035);
}

#main .why-card:nth-child(3) .why-icon {
  color: #fff;
  background: linear-gradient(145deg, #514a75, #8178aa);
}

#main .why-card:nth-child(4) .why-icon {
  color: #fff;
  background: linear-gradient(145deg, #2f6f5e, #2d8063);
}

#main .why-card h3 {
  position: relative;
  margin: 0 0 9px;
  font-size: 17px;
  font-weight: 800;
  letter-spacing: -.4px;
}

#main .why-card p {
  position: relative;
  margin: 0;
  color: var(--sx-muted);
  font-size: 13px;
  line-height: 1.68;
}

@media (max-width: 1024px) {
  #main .why-panel {
    padding: 32px 30px;
  }

  #main .why-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  #main .why-card {
    min-height: 200px;
  }
}

@media (max-width: 767px) {
  #main .why {
    padding: 52px 0;
  }

  #main .why-panel {
    padding: 28px 18px 20px;
    border-radius: 26px;
  }

  #main .why-panel::before {
    display: none;
  }

  #main .why-head {
    margin-bottom: 24px;
  }

  #main .why h2 {
    font-size: 30px;
    letter-spacing: -.8px;
  }

  #main .why-lede {
    font-size: 13.5px;
    line-height: 1.7;
  }

  #main .why-stats {
    gap: 8px;
  }

  #main .why-stat {
    flex: 1 1 30%;
    min-width: 0;
    padding: 10px 8px;
  }

  #main .why-stat strong {
    font-size: 18px;
  }

  #main .why-stat span {
    font-size: 8.5px;
  }

  #main .why-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  #main .why-card {
    min-height: 0;
    padding: 20px 18px;
  }
}

/* ==========================================
   4. TRENDING PRODUCTS
========================================== */

#main .trending {
  padding: 76px 0;
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

#main .prod-art img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform .4s ease;
}

#main .prod-art img {
  display: block;
  width: 100%;
  height: 100%;
  max-height: 230px;
  object-fit: cover;
  transition: transform .4s ease;
}

#main .prod-card:hover .prod-art svg,
#main .prod-card:hover .prod-art img {
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

/* Prices are hidden until the API enables them (products.showPrice). */
#main .trending.prices-hidden .price-row {
  display: none;
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
  padding: 76px 0;
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
  height: 400px;
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

#main .phone-mock img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 26px;
  display: block;
}

/* ==========================================
   6. TESTIMONIALS
========================================== */

#main .testimonials {
  padding: 76px 0;
  background: var(--sx-bg);
}

#main .test-head {
  margin-bottom: 32px;
  text-align: center;
}

#main .test-head h2 {
  margin: 0;
}

#main .test-slider {
  position: relative;
}

#main .test-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 22px;
}

#main .test-grid::-webkit-scrollbar {
  display: none;
}

#main .test-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 6;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1.5px solid rgba(25,25,25,.12);
  background: rgba(255,255,255,.92);
  color: #26241f;
  display: grid;
  place-items: center;
  cursor: pointer;
  box-shadow: 0 10px 26px rgba(0,0,0,.08);
  transition: background .2s ease, color .2s ease, border-color .2s ease;
}

#main .test-arrow:hover {
  background: #26241f;
  color: #fff;
  border-color: #26241f;
}

#main .test-arrow svg {
  width: 18px;
  height: 18px;
}

#main .test-prev { left: -8px; }
#main .test-next { right: -8px; }

#main .test-arrow.is-disabled {
  opacity: .4;
  pointer-events: none;
}

@media (min-width: 1025px) {
  #main .test-arrow { display: none; }
}

#main .test-card {
  display: flex;
  flex-direction: column;
  flex: 0 0 100%;
  min-width: 0;
  scroll-snap-align: start;
  scroll-snap-stop: always;
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

  #main .hero-visual,
  #main .hs,
  #main .hs-track {
    min-height: 360px;
  }

  #main .hs-caption {
    padding: 22px 22px 44px;
  }

  #main .hs-title {
    font-size: 23px;
  }

  #main .prod-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  #main .prod-art {
    min-height: 220px;
  }

  #main .about-welcome > .wrap {
    grid-template-columns: 1fr;
    gap: 26px;
    padding: 20px;
  }

  #main .welcome-visual {
    min-height: 400px;
  }

  #main .welcome-copy {
    padding: 4px 16px 18px;
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
    padding: 24px 0 55px;
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
    margin-top: 4px;
  }

  #main .hero-visual,
  #main .hs,
  #main .hs-track {
    min-height: 316px;
  }

  #main .hs {
    border-radius: 20px;
  }

  #main .hs-caption {
    padding: 18px 18px 42px;
  }

  #main .hs-eyebrow {
    margin-bottom: 9px;
    padding: 5px 10px;
    font-size: 8.5px;
  }

  #main .hs-title {
    max-width: 20ch;
    margin-bottom: 7px;
    font-size: 20px;
    letter-spacing: -.5px;
  }

  #main .hs-text {
    margin-bottom: 13px;
    font-size: 11.5px;
  }

  #main .hs-btn {
    padding: 8px 14px;
    font-size: 11px;
  }

  #main .hs-dots {
    bottom: 14px;
  }

  #main .categories,
  #main .trending,
  #main .testimonials {
    padding: 52px 0;
  }

  #main .about-welcome {
    padding: 52px 0;
  }

  #main .about-welcome > .wrap {
    padding: 10px;
    border-radius: 25px;
    gap: 12px;
  }

  #main .about-welcome > .wrap::before {
    display: none;
  }

  #main .welcome-visual {
    min-height: 340px;
    padding: 6px;
  }

  #main .welcome-frame {
    inset: 6px;
    border-radius: 20px;
  }

  #main .premium-badge {
    top: 17px;
    left: 17px;
  }

  #main .visual-note {
    right: -4px;
    bottom: 18px;
    min-width: 155px;
    padding: 12px 15px;
  }

  #main .visual-note strong {
    font-size: 20px;
  }

  #main .welcome-copy {
    padding: 14px 10px 10px;
  }

  #main .welcome-copy h2 {
    font-size: 30px;
    letter-spacing: -.9px;
  }

  #main .welcome-copy > p {
    padding-left: 13px;
    font-size: 13px;
  }

  #main .welcome-stats {
    gap: 6px;
  }

  #main .welcome-stat {
    padding: 10px 5px;
  }

  #main .welcome-stat strong {
    font-size: 18px;
  }

  #main .welcome-stat span {
    font-size: 8px;
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

  #main .prod-art img {
    max-height: 145px;
    object-fit: cover;
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
    padding: 52px 0;
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

  #main .phone-mock img {
    border-radius: 22px;
  }

  #main .test-head {
    margin-bottom: 25px;
    text-align: left;
  }

  #main .test-grid {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    scrollbar-width: none;
  }

  #main .test-grid::-webkit-scrollbar {
    display: none;
  }

  #main .test-card {
    flex: 0 0 100%;
    min-width: 0;
    scroll-snap-align: start;
    scroll-snap-stop: always;
    padding: 22px;
  }

  #main .test-card .quote {
    margin-bottom: 20px;
  }
}

/* Small phones */

@media (max-width: 380px) {
  #main .wrap {
    width: calc(100% - 32px);
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

      <div class="hero-visual">
        <div class="hs" id="heroSlider" role="region" aria-roledescription="carousel" aria-label="Featured shopping offers" tabindex="0">
          <div class="hs-track" id="heroTrack">
            <div class="hs-slide is-active" role="group" aria-roledescription="slide" aria-label="1 of 4">
              <img src="assets/hero/slide-1.jpg" alt="Fresh produce in a grocery store" width="1000" height="780" loading="eager" draggable="false">
              <div class="hs-caption">
                <span class="hs-eyebrow">Fresh picks</span>
                <h3 class="hs-title">Fresh groceries in 45 minutes</h3>
                <p class="hs-text">Handpicked produce and daily essentials from stores around you.</p>
                <a class="hs-btn" href="#categories">Shop groceries <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="hs-slide" role="group" aria-roledescription="slide" aria-label="2 of 4">
              <img src="assets/hero/slide-2.jpg" alt="Fashion shopping" width="1000" height="780" loading="lazy" draggable="false">
              <div class="hs-caption">
                <span class="hs-eyebrow">Trend edit</span>
                <h3 class="hs-title">New season, new favourites</h3>
                <p class="hs-text">Fashion finds from local boutiques and trusted brands.</p>
                <a class="hs-btn" href="#categories">Explore fashion <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="hs-slide" role="group" aria-roledescription="slide" aria-label="3 of 4">
              <img src="assets/hero/slide-3.jpg" alt="Laptop, headphones and smartwatch on a desk" width="1000" height="780" loading="lazy" draggable="false">
              <div class="hs-caption">
                <span class="hs-eyebrow">Tech drop</span>
                <h3 class="hs-title">Tech that keeps up with you</h3>
                <p class="hs-text">Headphones, wearables and more at marketplace prices.</p>
                <a class="hs-btn" href="#categories">Shop electronics <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="hs-slide" role="group" aria-roledescription="slide" aria-label="4 of 4">
              <img src="assets/hero/slide-4.jpg" alt="Home and beauty essentials" width="1000" height="780" loading="lazy" draggable="false">
              <div class="hs-caption">
                <span class="hs-eyebrow">Home upgrade</span>
                <h3 class="hs-title">Make every room feel newer</h3>
                <p class="hs-text">Kitchen, decor and everyday upgrades for the whole home.</p>
                <a class="hs-btn" href="#categories">Browse home <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
          </div>

          <div class="hs-dots" id="heroDots" role="tablist" aria-label="Choose a slide"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT / COMPANY DESCRIPTION — WHERE QUALITY MEETS VALUE -->
  <section class="about-welcome" id="about">
    <div class="wrap">
      <div class="welcome-visual">
        <div class="welcome-frame" role="img" aria-label="A selection of groceries, fashion and everyday essentials from Samexxa"></div>
        <div class="premium-badge">
          <i aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.6 6.4L21 11l-6.4 2.6L12 20l-2.6-6.4L3 11l6.4-2.6z"/></svg>
          </i>
          Curated with intention
        </div>
        <div class="visual-note"><strong>One cart.</strong><span>Endless possibilities</span></div>
      </div>

      <div class="welcome-copy">
        <span class="welcome-kicker">Welcome to Samexxa</span>
        <h2>Where Quality Meets Value</h2>
        <p>Samexxa is a marketplace built to make everyday shopping easier. Instead of switching between different apps for groceries, gadgets or a birthday outfit, everything sits inside one cart, one checkout and one delivery tracker. Built in Lucknow, Samexxa connects neighbourhood stores and sellers with the reach they need to grow, and gives shoppers a faster way to find what they're already looking for close to home.</p>

        <div class="welcome-stats">
          <div class="welcome-stat"><strong>50+</strong><span>Categories</span></div>
          <div class="welcome-stat"><strong>2M+</strong><span>Products listed</span></div>
          <div class="welcome-stat"><strong>Pan-India</strong><span>Delivery reach</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY SAMEXXA -->
  <section class="why" id="why">
    <div class="wrap">
      <div class="why-panel">
        <div class="why-head">
          <span class="why-kicker">Why Samexxa</span>
          <h2>Welcome to Samexxa</h2>
          <p class="why-lede">Welcome to Samexxa, your trusted multi-vendor e-commerce marketplace where quality products, trusted sellers, and great deals come together. We are committed to making online shopping simple, secure, and convenient by offering a wide range of products across multiple categories, all in one place. With fast shipping, secure payments, and dedicated customer support, Samexxa delivers a reliable shopping experience for every customer.</p>

          <div class="why-stats">
            <div class="why-stat"><strong>2M+</strong><span>Products listed</span></div>
            <div class="why-stat"><strong>12,000+</strong><span>Trusted sellers</span></div>
            <div class="why-stat"><strong>500+</strong><span>Cities served</span></div>
          </div>
        </div>

        <div class="why-grid">
          <article class="why-card">
            <span class="why-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l1 12H5L6 8z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
            </span>
            <h3>Wide Product Selection</h3>
            <p>Explore thousands of products across multiple categories from trusted sellers.</p>
          </article>

          <article class="why-card">
            <span class="why-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v6c0 4-3 7.4-7 9-4-1.6-7-5-7-9V6l7-3z"/><polyline points="9 12 11 14 15 10"/></svg>
            </span>
            <h3>Trusted Sellers</h3>
            <p>Shop with confidence from verified vendors offering genuine and quality products.</p>
          </article>

          <article class="why-card">
            <span class="why-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2.5"/><line x1="2" y1="9.5" x2="22" y2="9.5"/><path d="M6 15h4"/></svg>
            </span>
            <h3>Secure Payments</h3>
            <p>Multiple safe and encrypted payment options ensure secure transactions.</p>
          </article>

          <article class="why-card">
            <span class="why-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="6" width="14" height="11" rx="1.5"/><path d="M15 9h4l3 3v5h-7z"/><circle cx="6" cy="19" r="1.7"/><circle cx="17.5" cy="19" r="1.7"/></svg>
            </span>
            <h3>Fast Shipping</h3>
            <p>Quick and reliable delivery to bring your orders to your doorstep on time.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- CATEGORY HIGHLIGHTS — SLIDING CARD RAIL -->
  <section class="categories" id="categories">
    <div class="wrap">
      <div class="cat-head">
        <h2 id="catTitle">Shop by category</h2>
        <p id="catSub">A few of the places Samexxa shoppers start their search.</p>
      </div>

      <nav class="cat-rail-wrap" aria-label="Product categories">
        <ul class="cat-rail" id="catRail" role="list">
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#eef7e8">
              <span class="cat-ico"><img src="assets/categories/grocery.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Grocery</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#e8f1f8">
              <span class="cat-ico"><img src="assets/categories/electronics.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Electronics</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#fdeef3">
              <span class="cat-ico"><img src="assets/categories/fashion.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Fashion</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#fdf4e5">
              <span class="cat-ico"><img src="assets/categories/home-kitchen.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Home &amp; Kitchen</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#fceef7">
              <span class="cat-ico"><img src="assets/categories/beauty.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Beauty</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#e9f4ef">
              <span class="cat-ico"><img src="assets/categories/sports.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Sports</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#fff2e8">
              <span class="cat-ico"><img src="assets/categories/baby-care.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Baby Care</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#eef0f5">
              <span class="cat-ico"><img src="assets/categories/automotive.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Automotive</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#f3eefb">
              <span class="cat-ico"><img src="assets/categories/books.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Books</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
          <li role="listitem">
            <a class="cat-item" href="#categories" style="--tone:#fff8e1">
              <span class="cat-ico"><img src="assets/categories/toys.png" alt="" width="220" height="220" loading="lazy" draggable="false"></span>
              <span class="cat-copy"><strong>Toys</strong><small>Explore &rarr;</small></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

  <script>
    window.SAMEXXA_CONFIG = {
      // Single endpoint managed by the admin panel. Swap for your API URL.
      api: 'api/home'
    };

    function initTestimonials() {
      var testGrid = document.getElementById('testGrid');
      var testPrev = document.getElementById('testPrev');
      var testNext = document.getElementById('testNext');
      if (!testGrid || !testPrev || !testNext) return;
      function slideTest(dir) {
        var amount = testGrid.clientWidth * dir;
        testGrid.scrollBy({ left: amount, behavior: 'smooth' });
      }
      testPrev.addEventListener('click', function () { slideTest(-1); });
      testNext.addEventListener('click', function () { slideTest(1); });
      function syncArrows() {
        var maxScroll = testGrid.scrollWidth - testGrid.clientWidth;
        testPrev.classList.toggle('is-disabled', testGrid.scrollLeft <= 4);
        testNext.classList.toggle('is-disabled', testGrid.scrollLeft >= maxScroll - 4);
      }
      testGrid.addEventListener('scroll', syncArrows);
      testGrid.addEventListener('scrollend', syncArrows);
    }
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initTestimonials);
    } else {
      initTestimonials();
    }
  </script>
  <script src="assets/home.js" defer></script>

  <!-- TRENDING PRODUCTS -->
  <section class="trending prices-hidden" id="trending">
    <div class="wrap">
      <div class="cat-head">
        <h2 id="prodTitle">Trending this week</h2>
        <p id="prodSub">Popular picks across Samexxa's most-shopped categories.</p>
      </div>

      <div class="prod-grid" id="prodGrid">

        <div class="prod-card">
          <span class="prod-tag">-30%</span>
          <div class="prod-art" style="background:#EAF1F6;">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=700&fit=crop&q=80&fm=jpg" alt="TrueBeat Wireless Earbuds">
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
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&h=700&fit=crop&q=80&fm=jpg" alt="Stride Running Sneakers">
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
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&h=700&fit=crop&q=80&fm=jpg" alt="Pulse Smartwatch">
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
            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=800&h=700&fit=crop&q=80&fm=jpg" alt="WhipMate Mixer Grinder">
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
        <img src="assets/hero/welcome-marketplace.jpg" alt="Samexxa app shopping on a smartphone">
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <div class="wrap">
      <div class="test-head">
        <h2>What shoppers are saying</h2>
      </div>
      <div class="test-slider">
        <button class="test-arrow test-prev" id="testPrev" type="button" aria-label="Previous shopper story">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="test-grid" id="testGrid">

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

        <button class="test-arrow test-next" id="testNext" type="button" aria-label="Next shopper story">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>
  </section>

</main>
<?php include_once('./includes/footer.php'); ?>