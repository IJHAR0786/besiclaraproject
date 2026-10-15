<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LUXE — Premium eCommerce</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <style>
    /* ============================================================
       CSS VARIABLES & RESET
    ============================================================ */
    :root {
      --maroon:        #800000;
      --maroon-deep:   #5a0000;
      --maroon-light:  #a31515;
      --maroon-glow:   rgba(128,0,0,0.18);
      --gold:          #c9a84c;
      --gold-light:    #e8cc84;
      --cream:         #fdf8f3;
      --beige:         #f2ece4;
      --white:         #ffffff;
      --smoke:         #f7f4f1;
      --text-dark:     #1a0f0f;
      --text-mid:      #4a3030;
      --text-light:    #9a8080;
      --border:        rgba(128,0,0,0.12);
      --shadow-sm:     0 2px 16px rgba(128,0,0,0.08);
      --shadow-md:     0 8px 40px rgba(128,0,0,0.14);
      --shadow-lg:     0 20px 60px rgba(128,0,0,0.18);
      --radius-sm:     8px;
      --radius-md:     16px;
      --radius-pill:   50px;
      --transition:    0.3s cubic-bezier(0.4,0,0.2,1);
      --header-h:      72px;
      --announce-h:    38px;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--text-dark);
      overflow-x: hidden;
      padding-top: calc(var(--announce-h) + var(--header-h));
    }

    a { text-decoration: none; color: inherit; }
    ul { list-style: none; }
    img { display: block; max-width: 100%; }

    /* ============================================================
       ANNOUNCEMENT BAR
    ============================================================ */
    .announce-bar {
      position: fixed;
      top: 0; left: 0; right: 0;
      height: var(--announce-h);
      z-index: 1000;
      background: linear-gradient(90deg, var(--maroon-deep) 0%, var(--maroon) 50%, var(--maroon-deep) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 40px;
      overflow: hidden;
    }

    .announce-bar::before {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(
        90deg,
        transparent,
        transparent 60px,
        rgba(255,255,255,0.03) 60px,
        rgba(255,255,255,0.03) 61px
      );
    }

    .announce-item {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--gold-light);
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      white-space: nowrap;
      animation: announceFade 8s infinite ease-in-out;
    }

    .announce-item:nth-child(2) { animation-delay: -2.67s; }
    .announce-item:nth-child(3) { animation-delay: -5.33s; }

    .announce-item i { color: var(--gold); font-size: 11px; }

    .announce-sep {
      width: 1px; height: 14px;
      background: rgba(201,168,76,0.3);
    }

    @keyframes announceFade {
      0%, 90%, 100% { opacity: 1; }
    }

    /* ============================================================
       MAIN HEADER
    ============================================================ */
    .header {
      position: fixed;
      top: var(--announce-h);
      left: 0; right: 0;
      height: var(--header-h);
      z-index: 999;
      background: rgba(253,248,243,0.92);
      backdrop-filter: blur(20px) saturate(1.6);
      -webkit-backdrop-filter: blur(20px) saturate(1.6);
      border-bottom: 1px solid var(--border);
      transition: box-shadow var(--transition), background var(--transition);
    }

    .header.scrolled {
      box-shadow: var(--shadow-md);
      background: rgba(253,248,243,0.97);
    }

    .header-inner {
      max-width: 1400px;
      margin: 0 auto;
      height: 100%;
      display: grid;
      grid-template-columns: 220px 1fr auto;
      align-items: center;
      padding: 0 32px;
      gap: 24px;
    }

    /* ---- LOGO ---- */
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      flex-shrink: 0;
    }

    .logo-emblem {
      width: 38px; height: 38px;
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-deep) 100%);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 14px var(--maroon-glow);
      position: relative;
      overflow: hidden;
      flex-shrink: 0;
    }

    .logo-emblem::after {
      content: '';
      position: absolute;
      top: -40%; left: -40%;
      width: 80%; height: 80%;
      background: rgba(255,255,255,0.15);
      border-radius: 50%;
    }

    .logo-emblem i {
      color: var(--gold-light);
      font-size: 17px;
      position: relative;
      z-index: 1;
    }

    .logo-text {
      display: flex;
      flex-direction: column;
      line-height: 1;
    }

    .logo-name {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 800;
      background: linear-gradient(135deg, var(--maroon) 30%, var(--maroon-light) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      letter-spacing: 0.04em;
    }

    .logo-tagline {
      font-size: 8.5px;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-top: 2px;
    }

    /* ---- NAV ---- */
    .nav {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 4px;
    }

    .nav-item {
      position: relative;
    }

    .nav-link {
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 8px 14px;
      font-size: 13.5px;
      font-weight: 500;
      color: var(--text-mid);
      letter-spacing: 0.02em;
      border-radius: var(--radius-sm);
      transition: color var(--transition), background var(--transition);
      position: relative;
      white-space: nowrap;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 4px;
      left: 50%;
      transform: translateX(-50%) scaleX(0);
      width: calc(100% - 28px);
      height: 1.5px;
      background: linear-gradient(90deg, var(--maroon), var(--gold));
      border-radius: 2px;
      transition: transform var(--transition);
    }

    .nav-link:hover,
    .nav-link.active {
      color: var(--maroon);
      background: var(--maroon-glow);
    }

    .nav-link:hover::after,
    .nav-link.active::after { transform: translateX(-50%) scaleX(1); }

    .nav-link i { font-size: 9px; color: var(--text-light); }

    /* Mega dropdown */
    .nav-item.has-dropdown:hover .mega-drop { opacity: 1; visibility: visible; transform: translateY(0); }

    .mega-drop {
      position: absolute;
      top: calc(100% + 10px);
      left: 50%;
      transform: translateX(-50%) translateY(8px);
      min-width: 200px;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-lg);
      padding: 10px;
      opacity: 0;
      visibility: hidden;
      transition: all var(--transition);
      z-index: 100;
    }

    .mega-drop::before {
      content: '';
      position: absolute;
      top: -5px;
      left: 50%;
      transform: translateX(-50%);
      width: 10px; height: 10px;
      background: var(--white);
      border-left: 1px solid var(--border);
      border-top: 1px solid var(--border);
      rotate: 45deg;
    }

    .drop-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 12px;
      border-radius: var(--radius-sm);
      font-size: 13px;
      font-weight: 400;
      color: var(--text-mid);
      transition: all var(--transition);
      cursor: pointer;
    }

    .drop-item i {
      width: 28px; height: 28px;
      background: var(--smoke);
      border-radius: 7px;
      display: flex; align-items: center; justify-content: center;
      font-size: 12px;
      color: var(--maroon);
      flex-shrink: 0;
      transition: all var(--transition);
    }

    .drop-item:hover {
      background: linear-gradient(90deg, rgba(128,0,0,0.06), transparent);
      color: var(--maroon);
    }

    .drop-item:hover i {
      background: var(--maroon-glow);
      color: var(--maroon);
    }

    /* ---- HEADER ACTIONS ---- */
    .header-actions {
      display: flex;
      align-items: center;
      gap: 6px;
      flex-shrink: 0;
    }

    /* Search */
    .search-wrap {
      position: relative;
      display: flex;
      align-items: center;
    }

    .search-input {
      width: 210px;
      height: 40px;
      padding: 0 40px 0 16px;
      border: 1.5px solid var(--border);
      border-radius: var(--radius-pill);
      background: var(--smoke);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      color: var(--text-dark);
      outline: none;
      transition: all var(--transition);
    }

    .search-input::placeholder { color: var(--text-light); }

    .search-input:focus {
      width: 250px;
      border-color: var(--maroon);
      background: var(--white);
      box-shadow: 0 0 0 4px var(--maroon-glow);
    }

    .search-btn {
      position: absolute;
      right: 10px;
      background: none; border: none;
      color: var(--text-light);
      cursor: pointer;
      font-size: 14px;
      transition: color var(--transition);
      padding: 4px;
    }

    .search-btn:hover { color: var(--maroon); }

    /* Icon buttons */
    .icon-btn {
      position: relative;
      width: 40px; height: 40px;
      background: none;
      border: none;
      border-radius: 50%;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      color: var(--text-mid);
      font-size: 17px;
      transition: all var(--transition);
    }

    .icon-btn:hover {
      background: var(--maroon-glow);
      color: var(--maroon);
      transform: translateY(-2px);
    }

    /* Cart badge */
    .cart-badge {
      position: absolute;
      top: 4px; right: 4px;
      min-width: 17px; height: 17px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      color: var(--white);
      font-size: 9px;
      font-weight: 700;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      border: 2px solid var(--cream);
      animation: badgePulse 2.5s ease-in-out infinite;
    }

    @keyframes badgePulse {
      0%, 100% { box-shadow: 0 0 0 0 rgba(128,0,0,0.4); }
      50%       { box-shadow: 0 0 0 5px rgba(128,0,0,0); }
    }

    /* Auth button */
    .btn-auth {
      display: flex;
      align-items: center;
      gap: 7px;
      padding: 0 20px;
      height: 40px;
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-deep) 100%);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 0.03em;
      border: none;
      border-radius: var(--radius-pill);
      cursor: pointer;
      white-space: nowrap;
      box-shadow: 0 4px 14px var(--maroon-glow);
      transition: all var(--transition);
    }

    .btn-auth:hover {
      background: linear-gradient(135deg, var(--maroon-light) 0%, var(--maroon) 100%);
      box-shadow: 0 8px 24px rgba(128,0,0,0.3);
      transform: translateY(-2px);
    }

    .btn-auth i { font-size: 12px; }

    /* ---- HAMBURGER ---- */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 8px;
      border-radius: var(--radius-sm);
      transition: background var(--transition);
    }

    .hamburger:hover { background: var(--maroon-glow); }

    .hamburger span {
      display: block;
      height: 2px;
      background: var(--maroon);
      border-radius: 2px;
      transition: all var(--transition);
    }

    .hamburger span:nth-child(1) { width: 24px; }
    .hamburger span:nth-child(2) { width: 18px; }
    .hamburger span:nth-child(3) { width: 22px; }

    .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); width: 22px; }
    .hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); width: 22px; }

    /* ---- MOBILE NAV DRAWER ---- */
    .mobile-nav {
      display: none;
      position: fixed;
      top: calc(var(--announce-h) + var(--header-h));
      left: 0; right: 0;
      background: var(--white);
      z-index: 998;
      padding: 20px 24px 32px;
      border-bottom: 1px solid var(--border);
      box-shadow: var(--shadow-lg);
      transform: translateY(-10px);
      opacity: 0;
      transition: all var(--transition);
      pointer-events: none;
    }

    .mobile-nav.open {
      transform: translateY(0);
      opacity: 1;
      pointer-events: auto;
    }

    .mobile-search {
      display: flex;
      align-items: center;
      gap: 10px;
      background: var(--smoke);
      border: 1.5px solid var(--border);
      border-radius: var(--radius-pill);
      padding: 10px 16px;
      margin-bottom: 20px;
    }

    .mobile-search i { color: var(--text-light); font-size: 14px; }

    .mobile-search input {
      border: none; background: none;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      color: var(--text-dark);
      outline: none;
      flex: 1;
    }

    .mobile-search input::placeholder { color: var(--text-light); }

    .mobile-links { display: flex; flex-direction: column; gap: 2px; }

    .mobile-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 14px;
      border-radius: var(--radius-sm);
      font-size: 14px;
      font-weight: 500;
      color: var(--text-mid);
      cursor: pointer;
      transition: all var(--transition);
    }

    .mobile-link:hover { background: var(--maroon-glow); color: var(--maroon); }

    .mobile-link-left { display: flex; align-items: center; gap: 12px; }
    .mobile-link-left i { width: 22px; text-align: center; color: var(--maroon); font-size: 14px; }

    .mobile-link i.chevron { font-size: 11px; color: var(--text-light); transition: transform var(--transition); }
    .mobile-link.expanded i.chevron { transform: rotate(90deg); }

    .mobile-submenu {
      overflow: hidden;
      max-height: 0;
      transition: max-height 0.35s ease;
    }

    .mobile-submenu.open { max-height: 300px; }

    .mobile-sublink {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 14px 9px 50px;
      font-size: 13px;
      color: var(--text-light);
      border-radius: var(--radius-sm);
      cursor: pointer;
      transition: all var(--transition);
    }

    .mobile-sublink:hover { background: var(--smoke); color: var(--maroon); }

    .mobile-divider {
      height: 1px;
      background: var(--border);
      margin: 12px 0;
    }

    .mobile-actions {
      display: flex;
      gap: 10px;
      margin-top: 16px;
    }

    .mobile-actions .btn-auth {
      flex: 1;
      justify-content: center;
    }

    .mobile-icon-row {
      display: flex;
      align-items: center;
      gap: 4px;
    }

    /* ============================================================
       HERO SECTION
    ============================================================ */
    .hero {
      min-height: 90vh;
      background:
        radial-gradient(ellipse 80% 60% at 70% 50%, rgba(128,0,0,0.06) 0%, transparent 60%),
        linear-gradient(160deg, var(--cream) 0%, var(--beige) 60%, #ede4d8 100%);
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
      padding: 60px 32px;
    }

    .hero-grid {
      max-width: 1400px;
      margin: 0 auto;
      width: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
    }

    .hero-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 16px;
      background: rgba(128,0,0,0.08);
      border: 1px solid rgba(128,0,0,0.2);
      border-radius: var(--radius-pill);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--maroon);
      margin-bottom: 24px;
    }

    .hero-label i { font-size: 10px; color: var(--gold); }

    .hero-h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(38px, 5.5vw, 68px);
      font-weight: 800;
      line-height: 1.1;
      color: var(--text-dark);
      margin-bottom: 22px;
    }

    .hero-h1 em {
      font-style: normal;
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-light) 60%, var(--gold) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-p {
      font-size: 16px;
      color: var(--text-mid);
      line-height: 1.75;
      max-width: 480px;
      margin-bottom: 36px;
    }

    .hero-cta-row {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 14px 32px;
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-deep) 100%);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 600;
      border: none;
      border-radius: var(--radius-pill);
      cursor: pointer;
      box-shadow: 0 6px 24px var(--maroon-glow), 0 2px 6px rgba(128,0,0,0.2);
      transition: all var(--transition);
      letter-spacing: 0.02em;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, var(--maroon-light) 0%, var(--maroon) 100%);
      box-shadow: 0 12px 32px rgba(128,0,0,0.3);
      transform: translateY(-3px);
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 14px 28px;
      background: transparent;
      border: 1.5px solid var(--maroon);
      color: var(--maroon);
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 500;
      border-radius: var(--radius-pill);
      cursor: pointer;
      transition: all var(--transition);
    }

    .btn-secondary:hover {
      background: var(--maroon);
      color: var(--white);
      transform: translateY(-3px);
      box-shadow: 0 8px 24px var(--maroon-glow);
    }

    .hero-stats {
      display: flex;
      gap: 32px;
      margin-top: 44px;
      padding-top: 32px;
      border-top: 1px solid var(--border);
    }

    .hero-stat {
      display: flex;
      flex-direction: column;
      gap: 2px;
    }

    .stat-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 32px;
      font-weight: 700;
      color: var(--maroon);
      line-height: 1;
    }

    .stat-label {
      font-size: 11px;
      color: var(--text-light);
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }

    /* Hero visual */
    .hero-visual {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-card-stack {
      position: relative;
      width: 380px;
      height: 460px;
    }

    .hcard {
      position: absolute;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);
    }

    .hcard-main {
      width: 300px; height: 380px;
      top: 40px; left: 40px;
      background: linear-gradient(160deg, #1a0f0f 0%, #3d1515 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 16px;
      z-index: 3;
    }

    .hcard-main:hover { transform: translateY(-6px) rotate(0.5deg); }

    .hcard-main i {
      font-size: 64px;
      background: linear-gradient(135deg, var(--gold-light), var(--gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hcard-main span {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      color: var(--cream);
      letter-spacing: 0.1em;
    }

    .hcard-accent1 {
      width: 160px; height: 190px;
      top: 0; right: 20px;
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-deep) 100%);
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      gap: 10px;
      z-index: 2;
    }

    .hcard-accent1:hover { transform: translateY(-4px) rotate(-1deg); }
    .hcard-accent1 i { font-size: 36px; color: var(--gold-light); }
    .hcard-accent1 span { font-size: 12px; color: rgba(255,255,255,0.7); letter-spacing: 0.1em; }

    .hcard-accent2 {
      width: 140px; height: 160px;
      bottom: 0; left: 0;
      background: linear-gradient(135deg, var(--gold) 0%, #a07030 100%);
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      gap: 10px;
      z-index: 2;
    }

    .hcard-accent2:hover { transform: translateY(-4px) rotate(1deg); }
    .hcard-accent2 i { font-size: 32px; color: var(--white); }
    .hcard-accent2 span { font-size: 11px; color: rgba(255,255,255,0.85); letter-spacing: 0.1em; }

    .float-badge {
      position: absolute;
      background: var(--white);
      border-radius: 16px;
      padding: 10px 16px;
      box-shadow: var(--shadow-md);
      display: flex;
      align-items: center;
      gap: 10px;
      z-index: 10;
      animation: floatY 4s ease-in-out infinite;
    }

    .float-badge.top {
      top: 10px; left: -10px;
      animation-delay: -2s;
    }

    .float-badge.bot {
      bottom: 20px; right: -10px;
    }

    .float-badge i { color: var(--maroon); font-size: 18px; }

    .float-badge .fb-text { display: flex; flex-direction: column; line-height: 1.3; }
    .float-badge .fb-text b { font-size: 13px; font-weight: 600; color: var(--text-dark); }
    .float-badge .fb-text span { font-size: 10px; color: var(--text-light); }

    @keyframes floatY {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-10px); }
    }

    /* ============================================================
       CATEGORIES SECTION
    ============================================================ */
    .section { padding: 80px 32px; }

    .section-inner { max-width: 1400px; margin: 0 auto; }

    .section-label {
      display: inline-block;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 10px;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(26px, 3.5vw, 40px);
      font-weight: 800;
      color: var(--text-dark);
      margin-bottom: 8px;
    }

    .section-title span {
      background: linear-gradient(135deg, var(--maroon), var(--maroon-light));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .section-subtitle {
      font-size: 15px;
      color: var(--text-light);
      margin-bottom: 48px;
    }

    .section-head { display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 48px; }

    .section-head .section-label { display: block; margin-bottom: 10px; }

    .view-all {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 13px;
      font-weight: 500;
      color: var(--maroon);
      padding: 8px 18px;
      border: 1.5px solid var(--maroon);
      border-radius: var(--radius-pill);
      transition: all var(--transition);
      white-space: nowrap;
      flex-shrink: 0;
    }

    .view-all:hover {
      background: var(--maroon);
      color: var(--white);
      box-shadow: 0 4px 16px var(--maroon-glow);
      transform: translateY(-2px);
    }

    /* Category grid */
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .cat-card {
      border-radius: var(--radius-md);
      overflow: hidden;
      position: relative;
      cursor: pointer;
      aspect-ratio: 3/4;
      background: var(--text-dark);
      box-shadow: var(--shadow-sm);
      transition: transform var(--transition), box-shadow var(--transition);
    }

    .cat-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
    }

    .cat-bg {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);
    }

    .cat-card:hover .cat-bg { transform: scale(1.06); }

    .cat-card:nth-child(1) .cat-bg { background: linear-gradient(160deg, #1a0f0f 0%, #2d1010 60%, #4a1818 100%); }
    .cat-card:nth-child(2) .cat-bg { background: linear-gradient(160deg, #0a1a2a 0%, #0d2540 60%, #1a3a5a 100%); }
    .cat-card:nth-child(3) .cat-bg { background: linear-gradient(160deg, #1a1008 0%, #2d1f0c 60%, #3d2a10 100%); }
    .cat-card:nth-child(4) .cat-bg { background: linear-gradient(160deg, #0a1a0a 0%, #0d280d 60%, #163016 100%); }

    .cat-bg i {
      font-size: 80px;
      opacity: 0.18;
      color: var(--white);
      transition: transform 0.5s ease, opacity 0.4s ease;
    }

    .cat-card:hover .cat-bg i { transform: scale(1.15) rotate(5deg); opacity: 0.25; }

    .cat-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.1) 50%, transparent 100%);
    }

    .cat-content {
      position: absolute;
      bottom: 0; left: 0; right: 0;
      padding: 24px 20px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .cat-icon-wrap {
      width: 46px; height: 46px;
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      color: var(--white);
      margin-bottom: 10px;
      transition: all var(--transition);
    }

    .cat-card:hover .cat-icon-wrap {
      background: var(--maroon-glow);
      border-color: rgba(128,0,0,0.4);
    }

    .cat-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--white);
      letter-spacing: 0.02em;
    }

    .cat-count {
      font-size: 12px;
      color: rgba(255,255,255,0.55);
      letter-spacing: 0.05em;
    }

    .cat-arrow {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      font-weight: 500;
      color: var(--gold-light);
      margin-top: 8px;
      opacity: 0;
      transform: translateX(-8px);
      transition: all var(--transition);
    }

    .cat-card:hover .cat-arrow { opacity: 1; transform: translateX(0); }

    /* ============================================================
       FEATURED / PRODUCT GRID
    ============================================================ */
    .products-section { background: var(--beige); }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 22px;
    }

    .product-card {
      background: var(--white);
      border-radius: var(--radius-md);
      overflow: hidden;
      position: relative;
      box-shadow: var(--shadow-sm);
      border: 1px solid rgba(128,0,0,0.05);
      transition: transform var(--transition), box-shadow var(--transition);
      cursor: pointer;
    }

    .product-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-md);
    }

    .product-img {
      position: relative;
      aspect-ratio: 1/1;
      overflow: hidden;
      background: var(--smoke);
      display: flex; align-items: center; justify-content: center;
    }

    .product-img i {
      font-size: 56px;
      color: var(--border);
      transition: transform 0.5s ease, color 0.3s ease;
    }

    .product-card:hover .product-img i {
      transform: scale(1.1);
      color: rgba(128,0,0,0.15);
    }

    .product-badge {
      position: absolute;
      top: 12px; left: 12px;
      padding: 4px 10px;
      border-radius: var(--radius-pill);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .badge-new  { background: var(--maroon); color: var(--white); }
    .badge-sale { background: var(--gold); color: var(--white); }
    .badge-hot  { background: #ff5a2c; color: var(--white); }

    .product-wish {
      position: absolute;
      top: 12px; right: 12px;
      width: 34px; height: 34px;
      background: var(--white);
      border-radius: 50%;
      border: none;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      font-size: 14px;
      color: var(--text-light);
      transition: all var(--transition);
      opacity: 0;
      transform: scale(0.8);
    }

    .product-card:hover .product-wish { opacity: 1; transform: scale(1); }
    .product-wish:hover { color: var(--maroon); background: rgba(128,0,0,0.06); }
    .product-wish.active { color: var(--maroon); }

    .product-add-btn {
      position: absolute;
      bottom: 0; left: 0; right: 0;
      padding: 10px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      color: var(--white);
      border: none;
      font-family: 'DM Sans', sans-serif;
      font-size: 12.5px;
      font-weight: 600;
      letter-spacing: 0.04em;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center; gap: 8px;
      transform: translateY(100%);
      transition: transform var(--transition);
    }

    .product-card:hover .product-add-btn { transform: translateY(0); }

    .product-info {
      padding: 16px;
    }

    .product-cat {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 6px;
    }

    .product-name {
      font-size: 14.5px;
      font-weight: 500;
      color: var(--text-dark);
      line-height: 1.4;
      margin-bottom: 10px;
    }

    .product-rating {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 12px;
    }

    .stars { display: flex; gap: 2px; }
    .stars i { font-size: 11px; color: var(--gold); }
    .rating-count { font-size: 11px; color: var(--text-light); }

    .product-price-row {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .price-cur {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--maroon);
    }

    .price-old {
      font-size: 13px;
      color: var(--text-light);
      text-decoration: line-through;
    }

    .price-off {
      font-size: 10px;
      font-weight: 700;
      color: #22a85a;
      background: rgba(34,168,90,0.1);
      padding: 2px 7px;
      border-radius: var(--radius-pill);
    }

    /* ============================================================
       PROMO BANNER
    ============================================================ */
    .promo-section { padding: 0 32px 80px; }

    .promo-grid {
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .promo-card {
      border-radius: 20px;
      padding: 40px 36px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: transform var(--transition), box-shadow var(--transition);
      min-height: 200px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .promo-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-lg);
    }

    .promo-card.maroon {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-deep) 100%);
    }

    .promo-card.gold {
      background: linear-gradient(135deg, #7a5c00 0%, var(--gold) 100%);
    }

    .promo-card::before {
      content: '';
      position: absolute;
      width: 250px; height: 250px;
      border-radius: 50%;
      right: -60px; top: -60px;
      background: rgba(255,255,255,0.06);
    }

    .promo-card::after {
      content: '';
      position: absolute;
      width: 150px; height: 150px;
      border-radius: 50%;
      right: 40px; bottom: -80px;
      background: rgba(255,255,255,0.04);
    }

    .promo-tag {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.6);
      margin-bottom: 10px;
    }

    .promo-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(22px, 3vw, 32px);
      font-weight: 800;
      color: var(--white);
      line-height: 1.2;
      margin-bottom: 14px;
    }

    .promo-desc {
      font-size: 14px;
      color: rgba(255,255,255,0.7);
      margin-bottom: 24px;
      line-height: 1.6;
    }

    .btn-promo {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 11px 24px;
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border: 1.5px solid rgba(255,255,255,0.3);
      border-radius: var(--radius-pill);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      transition: all var(--transition);
      position: relative;
      z-index: 1;
      align-self: flex-start;
    }

    .btn-promo:hover {
      background: rgba(255,255,255,0.25);
      border-color: rgba(255,255,255,0.5);
      transform: translateX(4px);
    }

    .promo-icon {
      position: absolute;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 80px;
      color: rgba(255,255,255,0.08);
      z-index: 0;
    }

    /* ============================================================
       TESTIMONIALS
    ============================================================ */
    .testi-section { background: var(--cream); }

    .testi-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .testi-card {
      background: var(--white);
      border-radius: var(--radius-md);
      padding: 28px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow-sm);
      transition: transform var(--transition), box-shadow var(--transition);
    }

    .testi-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-md);
    }

    .testi-stars { display: flex; gap: 3px; margin-bottom: 14px; }
    .testi-stars i { font-size: 13px; color: var(--gold); }

    .testi-text {
      font-size: 14px;
      color: var(--text-mid);
      line-height: 1.75;
      margin-bottom: 20px;
      font-style: italic;
    }

    .testi-author {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .testi-avatar {
      width: 42px; height: 42px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      display: flex; align-items: center; justify-content: center;
      color: var(--white);
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px;
      font-weight: 700;
      flex-shrink: 0;
    }

    .testi-name { font-size: 14px; font-weight: 600; color: var(--text-dark); }
    .testi-role { font-size: 11px; color: var(--text-light); margin-top: 2px; }

    /* ============================================================
       NEWSLETTER
    ============================================================ */
    .newsletter-section { padding: 0 32px 80px; }

    .newsletter-wrap {
      max-width: 1400px;
      margin: 0 auto;
      background: linear-gradient(135deg, var(--maroon) 0%, #3d0000 100%);
      border-radius: 24px;
      padding: 60px 80px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 60px;
      position: relative;
      overflow: hidden;
    }

    .newsletter-wrap::before {
      content: '';
      position: absolute;
      width: 400px; height: 400px;
      border-radius: 50%;
      right: -100px; top: -100px;
      background: rgba(255,255,255,0.04);
    }

    .newsletter-wrap::after {
      content: '';
      position: absolute;
      width: 250px; height: 250px;
      border-radius: 50%;
      left: -60px; bottom: -80px;
      background: rgba(255,255,255,0.03);
    }

    .nl-label {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold-light);
      margin-bottom: 12px;
    }

    .nl-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(24px, 3vw, 36px);
      font-weight: 800;
      color: var(--white);
      line-height: 1.2;
      margin-bottom: 12px;
    }

    .nl-desc { font-size: 14px; color: rgba(255,255,255,0.6); line-height: 1.6; }

    .nl-form {
      display: flex;
      flex-direction: column;
      gap: 12px;
      min-width: 360px;
      position: relative;
      z-index: 1;
    }

    .nl-input-wrap {
      display: flex;
      gap: 10px;
    }

    .nl-input {
      flex: 1;
      height: 50px;
      padding: 0 20px;
      background: rgba(255,255,255,0.1);
      border: 1.5px solid rgba(255,255,255,0.2);
      border-radius: var(--radius-pill);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      outline: none;
      transition: all var(--transition);
    }

    .nl-input::placeholder { color: rgba(255,255,255,0.45); }

    .nl-input:focus {
      background: rgba(255,255,255,0.15);
      border-color: var(--gold);
      box-shadow: 0 0 0 4px rgba(201,168,76,0.15);
    }

    .btn-nl {
      height: 50px;
      padding: 0 24px;
      background: linear-gradient(135deg, var(--gold) 0%, #a07030 100%);
      color: var(--white);
      border: none;
      border-radius: var(--radius-pill);
      font-family: 'DM Sans', sans-serif;
      font-size: 13.5px;
      font-weight: 600;
      cursor: pointer;
      white-space: nowrap;
      transition: all var(--transition);
      box-shadow: 0 4px 16px rgba(201,168,76,0.3);
    }

    .btn-nl:hover {
      background: linear-gradient(135deg, var(--gold-light) 0%, var(--gold) 100%);
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(201,168,76,0.4);
    }

    .nl-note { font-size: 11px; color: rgba(255,255,255,0.4); }

    /* ============================================================
       FOOTER
    ============================================================ */
    .footer {
      background: var(--text-dark);
      padding: 64px 32px 32px;
    }

    .footer-inner {
      max-width: 1400px;
      margin: 0 auto;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 52px;
    }

    .footer-brand .logo-name {
      background: linear-gradient(135deg, var(--gold-light), var(--gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-size: 26px;
    }

    .footer-brand .logo-tagline { color: rgba(201,168,76,0.6); }

    .footer-desc {
      font-size: 13.5px;
      color: rgba(255,255,255,0.4);
      line-height: 1.75;
      margin-top: 16px;
      max-width: 300px;
    }

    .footer-socials {
      display: flex;
      gap: 10px;
      margin-top: 24px;
    }

    .social-btn {
      width: 38px; height: 38px;
      border-radius: 10px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      display: flex; align-items: center; justify-content: center;
      color: rgba(255,255,255,0.5);
      font-size: 15px;
      cursor: pointer;
      transition: all var(--transition);
    }

    .social-btn:hover {
      background: var(--maroon-glow);
      border-color: var(--maroon);
      color: var(--gold-light);
      transform: translateY(-3px);
    }

    .footer-col h4 {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold-light);
      margin-bottom: 20px;
    }

    .footer-links { display: flex; flex-direction: column; gap: 10px; }

    .footer-link {
      font-size: 13.5px;
      color: rgba(255,255,255,0.4);
      cursor: pointer;
      transition: color var(--transition);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .footer-link::before {
      content: '';
      width: 0; height: 1px;
      background: var(--gold);
      transition: width var(--transition);
    }

    .footer-link:hover { color: rgba(255,255,255,0.8); }
    .footer-link:hover::before { width: 12px; }

    .footer-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 28px;
      border-top: 1px solid rgba(255,255,255,0.06);
      flex-wrap: wrap;
      gap: 16px;
    }

    .footer-copy {
      font-size: 12px;
      color: rgba(255,255,255,0.25);
    }

    .footer-pay { display: flex; align-items: center; gap: 10px; }
    .pay-icon {
      padding: 5px 10px;
      background: rgba(255,255,255,0.06);
      border-radius: 6px;
      font-size: 11px;
      color: rgba(255,255,255,0.35);
      letter-spacing: 0.05em;
      font-weight: 600;
    }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1100px) {
      .product-grid { grid-template-columns: repeat(3, 1fr); }
      .cat-grid { grid-template-columns: repeat(2, 1fr); }
      .footer-top { grid-template-columns: 1fr 1fr; gap: 36px; }
    }

    @media (max-width: 900px) {
      .header-inner { grid-template-columns: auto 1fr auto; }
      .nav { display: none; }
      .hamburger { display: flex; }
      .mobile-nav { display: block; }
      .search-wrap { display: none; }

      .hero-grid { grid-template-columns: 1fr; text-align: center; }
      .hero-visual { display: none; }
      .hero-p { max-width: 100%; }
      .hero-cta-row { justify-content: center; }
      .hero-stats { justify-content: center; }

      .product-grid { grid-template-columns: repeat(2, 1fr); }
      .testi-grid { grid-template-columns: 1fr 1fr; }
      .promo-grid { grid-template-columns: 1fr; }
      .newsletter-wrap { grid-template-columns: 1fr; padding: 40px 32px; }
      .nl-form { min-width: auto; }
    }

    @media (max-width: 600px) {
      :root { --announce-h: 0px; }
      .announce-bar { display: none; }

      .header-inner { padding: 0 16px; gap: 12px; }

      .section { padding: 52px 16px; }
      .promo-section { padding: 0 16px 52px; }
      .newsletter-section { padding: 0 16px 52px; }
      .footer { padding: 48px 16px 24px; }

      .cat-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
      .product-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
      .testi-grid { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr; gap: 28px; }
      .newsletter-wrap { padding: 32px 24px; }
      .nl-input-wrap { flex-direction: column; }
      .btn-nl { height: 44px; }
      .hero-stats { flex-wrap: wrap; gap: 20px; }

      .section-head { flex-direction: column; align-items: flex-start; gap: 16px; }
    }

    @media (max-width: 380px) {
      .product-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <!-- ============================================================
       ANNOUNCEMENT BAR
  ============================================================ -->
  <div class="announce-bar">
    <div class="announce-item">
      <i class="fas fa-truck-fast"></i>
      Free Shipping on Orders Over ₹999
    </div>
    <div class="announce-sep"></div>
    <div class="announce-item">
      <i class="fas fa-tag"></i>
      Use Code LUXE20 for 20% Off
    </div>
    <div class="announce-sep"></div>
    <div class="announce-item">
      <i class="fas fa-shield-halved"></i>
      Secure Payments &amp; Easy Returns
    </div>
  </div>

  <!-- ============================================================
       HEADER
  ============================================================ -->
  <header class="header" id="mainHeader">
    <div class="header-inner">

      <!-- Logo -->
      <a href="#" class="logo">
        <div class="logo-emblem">
          <i class="fas fa-gem"></i>
        </div>
        <div class="logo-text">
          <span class="logo-name">LUXE</span>
          <span class="logo-tagline">Premium Collection</span>
        </div>
      </a>

      <!-- Nav -->
      <nav class="nav" aria-label="Main navigation">
        <div class="nav-item">
          <a href="#" class="nav-link active">Home</a>
        </div>

        <div class="nav-item has-dropdown">
          <a href="#" class="nav-link">Mobile <i class="fas fa-chevron-down"></i></a>
          <div class="mega-drop">
            <div class="drop-item"><i class="fas fa-mobile-screen"></i> Smartphones</div>
            <div class="drop-item"><i class="fas fa-tablet-screen-button"></i> Tablets</div>
            <div class="drop-item"><i class="fas fa-headphones"></i> Accessories</div>
            <div class="drop-item"><i class="fas fa-plug"></i> Chargers &amp; Cables</div>
          </div>
        </div>

        <div class="nav-item has-dropdown">
          <a href="#" class="nav-link">Electronics <i class="fas fa-chevron-down"></i></a>
          <div class="mega-drop">
            <div class="drop-item"><i class="fas fa-tv"></i> Televisions</div>
            <div class="drop-item"><i class="fas fa-laptop"></i> Laptops</div>
            <div class="drop-item"><i class="fas fa-camera"></i> Cameras</div>
            <div class="drop-item"><i class="fas fa-gamepad"></i> Gaming</div>
          </div>
        </div>

        <div class="nav-item has-dropdown">
          <a href="#" class="nav-link">Fashion <i class="fas fa-chevron-down"></i></a>
          <div class="mega-drop">
            <div class="drop-item"><i class="fas fa-shirt"></i> Men's Wear</div>
            <div class="drop-item"><i class="fas fa-dress"></i> Women's Wear</div>
            <div class="drop-item"><i class="fas fa-shoe-prints"></i> Footwear</div>
            <div class="drop-item"><i class="fas fa-gem"></i> Jewellery</div>
          </div>
        </div>

        <div class="nav-item has-dropdown">
          <a href="#" class="nav-link">Furniture <i class="fas fa-chevron-down"></i></a>
          <div class="mega-drop">
            <div class="drop-item"><i class="fas fa-couch"></i> Living Room</div>
            <div class="drop-item"><i class="fas fa-bed"></i> Bedroom</div>
            <div class="drop-item"><i class="fas fa-chair"></i> Office</div>
            <div class="drop-item"><i class="fas fa-lightbulb"></i> Lighting</div>
          </div>
        </div>

        <div class="nav-item">
          <a href="#" class="nav-link">Deals</a>
        </div>

        <div class="nav-item">
          <a href="#" class="nav-link">Contact</a>
        </div>
      </nav>

      <!-- Actions -->
      <div class="header-actions">
        <!-- Search -->
        <div class="search-wrap">
          <input type="text" class="search-input" placeholder="Search products…" aria-label="Search" />
          <button class="search-btn" aria-label="Submit search"><i class="fas fa-magnifying-glass"></i></button>
        </div>

        <!-- Wishlist -->
        <button class="icon-btn" aria-label="Wishlist">
          <i class="far fa-heart"></i>
        </button>

        <!-- Cart -->
        <button class="icon-btn" aria-label="Cart">
          <i class="fas fa-bag-shopping"></i>
          <span class="cart-badge">3</span>
        </button>

        <!-- Mobile icons -->
        <div class="mobile-icon-row" style="display:none;">
          <button class="icon-btn" aria-label="Search"><i class="fas fa-magnifying-glass"></i></button>
          <button class="icon-btn" aria-label="Cart"><i class="fas fa-bag-shopping"></i><span class="cart-badge">3</span></button>
        </div>

        <!-- Auth -->
        <button class="btn-auth">
          <i class="fas fa-user"></i>
          Sign In
        </button>

        <!-- Hamburger -->
        <div class="hamburger" id="hamburger" role="button" aria-label="Toggle menu" tabindex="0">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>

  <!-- ============================================================
       MOBILE NAV
  ============================================================ -->
  <div class="mobile-nav" id="mobileNav" aria-hidden="true">
    <div class="mobile-search">
      <i class="fas fa-magnifying-glass"></i>
      <input type="text" placeholder="Search products…" aria-label="Mobile search" />
    </div>

    <div class="mobile-links">
      <div class="mobile-link"><div class="mobile-link-left"><i class="fas fa-house"></i> Home</div></div>

      <div class="mobile-link" onclick="toggleSub('sub-mobile')">
        <div class="mobile-link-left"><i class="fas fa-mobile-screen"></i> Mobile</div>
        <i class="fas fa-chevron-right chevron"></i>
      </div>
      <div class="mobile-submenu" id="sub-mobile">
        <div class="mobile-sublink">Smartphones</div>
        <div class="mobile-sublink">Tablets</div>
        <div class="mobile-sublink">Accessories</div>
      </div>

      <div class="mobile-link" onclick="toggleSub('sub-elec')">
        <div class="mobile-link-left"><i class="fas fa-laptop"></i> Electronics</div>
        <i class="fas fa-chevron-right chevron"></i>
      </div>
      <div class="mobile-submenu" id="sub-elec">
        <div class="mobile-sublink">Televisions</div>
        <div class="mobile-sublink">Laptops</div>
        <div class="mobile-sublink">Cameras</div>
        <div class="mobile-sublink">Gaming</div>
      </div>

      <div class="mobile-link" onclick="toggleSub('sub-fashion')">
        <div class="mobile-link-left"><i class="fas fa-shirt"></i> Fashion</div>
        <i class="fas fa-chevron-right chevron"></i>
      </div>
      <div class="mobile-submenu" id="sub-fashion">
        <div class="mobile-sublink">Men's Wear</div>
        <div class="mobile-sublink">Women's Wear</div>
        <div class="mobile-sublink">Footwear</div>
        <div class="mobile-sublink">Jewellery</div>
      </div>

      <div class="mobile-link" onclick="toggleSub('sub-furn')">
        <div class="mobile-link-left"><i class="fas fa-couch"></i> Furniture</div>
        <i class="fas fa-chevron-right chevron"></i>
      </div>
      <div class="mobile-submenu" id="sub-furn">
        <div class="mobile-sublink">Living Room</div>
        <div class="mobile-sublink">Bedroom</div>
        <div class="mobile-sublink">Office</div>
        <div class="mobile-sublink">Lighting</div>
      </div>

      <div class="mobile-link"><div class="mobile-link-left"><i class="fas fa-fire"></i> Deals</div></div>
      <div class="mobile-link"><div class="mobile-link-left"><i class="fas fa-envelope"></i> Contact</div></div>
    </div>

    <div class="mobile-divider"></div>

    <div class="mobile-actions">
      <button class="btn-auth" style="width:100%; justify-content:center; border-radius:12px;">
        <i class="fas fa-user"></i> Sign In
      </button>
      <button class="btn-auth" style="background:transparent; border:1.5px solid var(--maroon); color:var(--maroon); box-shadow:none; width:100%; justify-content:center; border-radius:12px;">
        Register
      </button>
    </div>
  </div>

  <!-- ============================================================
       HERO
  ============================================================ -->
  <section class="hero">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-label"><i class="fas fa-sparkles"></i> New Season Collection 2025</div>
        <h1 class="hero-h1">
          Discover<br><em>Luxury</em><br>Redefined
        </h1>
        <p class="hero-p">
          Curated premium products across Mobile, Electronics, Fashion, and Furniture — crafted for those who appreciate quality without compromise.
        </p>
        <div class="hero-cta-row">
          <button class="btn-primary"><i class="fas fa-bag-shopping"></i> Shop Now</button>
          <button class="btn-secondary"><i class="fas fa-play"></i> View Lookbook</button>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <span class="stat-num">50K+</span>
            <span class="stat-label">Products</span>
          </div>
          <div class="hero-stat">
            <span class="stat-num">2M+</span>
            <span class="stat-label">Happy Customers</span>
          </div>
          <div class="hero-stat">
            <span class="stat-num">4.9★</span>
            <span class="stat-label">Avg Rating</span>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="float-badge top">
          <i class="fas fa-shield-check"></i>
          <div class="fb-text">
            <b>Verified Brand</b>
            <span>100% Authentic</span>
          </div>
        </div>

        <div class="hero-card-stack">
          <div class="hcard hcard-accent1">
            <i class="fas fa-mobile-screen"></i>
            <span>MOBILE</span>
          </div>
          <div class="hcard hcard-accent2">
            <i class="fas fa-couch"></i>
            <span>FURNITURE</span>
          </div>
          <div class="hcard hcard-main">
            <i class="fas fa-gem"></i>
            <span>PREMIUM LUXE</span>
          </div>
        </div>

        <div class="float-badge bot">
          <i class="fas fa-truck-fast"></i>
          <div class="fb-text">
            <b>Free Delivery</b>
            <span>On ₹999+</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CATEGORIES
  ============================================================ -->
  <section class="section">
    <div class="section-inner">
      <div class="section-head">
        <div>
          <span class="section-label">Shop by Category</span>
          <h2 class="section-title">Explore Our <span>Collections</span></h2>
          <p class="section-subtitle">Four worlds of premium products, one destination.</p>
        </div>
        <a href="#" class="view-all">All Categories <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="cat-grid">
        <div class="cat-card">
          <div class="cat-bg"><i class="fas fa-mobile-screen"></i></div>
          <div class="cat-overlay"></div>
          <div class="cat-content">
            <div class="cat-icon-wrap"><i class="fas fa-mobile-screen"></i></div>
            <div class="cat-name">Mobile</div>
            <div class="cat-count">1,240+ products</div>
            <div class="cat-arrow"><i class="fas fa-arrow-right"></i> Explore</div>
          </div>
        </div>

        <div class="cat-card">
          <div class="cat-bg"><i class="fas fa-laptop"></i></div>
          <div class="cat-overlay"></div>
          <div class="cat-content">
            <div class="cat-icon-wrap"><i class="fas fa-laptop"></i></div>
            <div class="cat-name">Electronics</div>
            <div class="cat-count">3,800+ products</div>
            <div class="cat-arrow"><i class="fas fa-arrow-right"></i> Explore</div>
          </div>
        </div>

        <div class="cat-card">
          <div class="cat-bg"><i class="fas fa-shirt"></i></div>
          <div class="cat-overlay"></div>
          <div class="cat-content">
            <div class="cat-icon-wrap"><i class="fas fa-shirt"></i></div>
            <div class="cat-name">Fashion</div>
            <div class="cat-count">6,500+ products</div>
            <div class="cat-arrow"><i class="fas fa-arrow-right"></i> Explore</div>
          </div>
        </div>

        <div class="cat-card">
          <div class="cat-bg"><i class="fas fa-couch"></i></div>
          <div class="cat-overlay"></div>
          <div class="cat-content">
            <div class="cat-icon-wrap"><i class="fas fa-couch"></i></div>
            <div class="cat-name">Furniture</div>
            <div class="cat-count">2,100+ products</div>
            <div class="cat-arrow"><i class="fas fa-arrow-right"></i> Explore</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FEATURED PRODUCTS
  ============================================================ -->
  <section class="section products-section">
    <div class="section-inner">
      <div class="section-head">
        <div>
          <span class="section-label">Handpicked for You</span>
          <h2 class="section-title">Featured <span>Products</span></h2>
          <p class="section-subtitle">Bestsellers loved by thousands of customers.</p>
        </div>
        <a href="#" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="product-grid">

        <!-- Product 1 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-mobile-screen-button"></i>
            <span class="product-badge badge-new">New</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Mobile</div>
            <div class="product-name">ProMax 15 Ultra — 256GB Midnight Black</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i></div>
              <span class="rating-count">(2.4k)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹79,999</span>
              <span class="price-old">₹89,999</span>
              <span class="price-off">11% off</span>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-headphones"></i>
            <span class="product-badge badge-hot">Hot</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Electronics</div>
            <div class="product-name">SonicPro ANC Wireless Headphones</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <span class="rating-count">(1.8k)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹24,999</span>
              <span class="price-old">₹34,999</span>
              <span class="price-off">28% off</span>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-shirt"></i>
            <span class="product-badge badge-sale">Sale</span>
            <button class="product-wish active" aria-label="Wishlist"><i class="fas fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Fashion</div>
            <div class="product-name">Royale Linen Blazer — Slim Fit Premium</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
              <span class="rating-count">(980)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹5,499</span>
              <span class="price-old">₹8,999</span>
              <span class="price-off">38% off</span>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-couch"></i>
            <span class="product-badge badge-new">New</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Furniture</div>
            <div class="product-name">Velvet 3-Seater Sofa — Deep Burgundy</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i></div>
              <span class="rating-count">(542)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹42,999</span>
              <span class="price-old">₹59,999</span>
              <span class="price-off">28% off</span>
            </div>
          </div>
        </div>

        <!-- Product 5 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-tv"></i>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Electronics</div>
            <div class="product-name">UltraView 65" 4K QLED Smart TV</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <span class="rating-count">(3.1k)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹89,990</span>
              <span class="price-old">₹1,19,990</span>
              <span class="price-off">25% off</span>
            </div>
          </div>
        </div>

        <!-- Product 6 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-shoe-prints"></i>
            <span class="product-badge badge-sale">Sale</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Fashion</div>
            <div class="product-name">Artisan Leather Derby Shoes — Cognac</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
              <span class="rating-count">(720)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹7,299</span>
              <span class="price-old">₹12,999</span>
              <span class="price-off">43% off</span>
            </div>
          </div>
        </div>

        <!-- Product 7 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-tablet-screen-button"></i>
            <span class="product-badge badge-new">New</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Mobile</div>
            <div class="product-name">PadPro 12.9" M3 — Space Silver 512GB</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i></div>
              <span class="rating-count">(1.5k)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹1,09,999</span>
              <span class="price-old">₹1,24,900</span>
              <span class="price-off">12% off</span>
            </div>
          </div>
        </div>

        <!-- Product 8 -->
        <div class="product-card">
          <div class="product-img">
            <i class="fas fa-chair"></i>
            <span class="product-badge badge-hot">Hot</span>
            <button class="product-wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>
            <button class="product-add-btn"><i class="fas fa-bag-shopping"></i> Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Furniture</div>
            <div class="product-name">ErgoLux Executive Office Chair — Black</div>
            <div class="product-rating">
              <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
              <span class="rating-count">(2.9k)</span>
            </div>
            <div class="product-price-row">
              <span class="price-cur">₹18,499</span>
              <span class="price-old">₹28,999</span>
              <span class="price-off">36% off</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PROMO BANNERS
  ============================================================ -->
  <div class="promo-section">
    <div class="promo-grid">
      <div class="promo-card maroon">
        <div>
          <div class="promo-tag">Limited Time</div>
          <div class="promo-title">Summer Fashion<br>Sale is Live!</div>
          <div class="promo-desc">Up to 60% off on premium fashion brands. Refresh your wardrobe today.</div>
        </div>
        <button class="btn-promo">Shop Fashion <i class="fas fa-arrow-right"></i></button>
        <i class="fas fa-shirt promo-icon"></i>
      </div>

      <div class="promo-card gold">
        <div>
          <div class="promo-tag">New Arrivals</div>
          <div class="promo-title">Smart Home<br>Tech Awaits You</div>
          <div class="promo-desc">Upgrade your living space with cutting-edge electronics and smart devices.</div>
        </div>
        <button class="btn-promo">Explore Tech <i class="fas fa-arrow-right"></i></button>
        <i class="fas fa-tv promo-icon"></i>
      </div>
    </div>
  </div>

  <!-- ============================================================
       TESTIMONIALS
  ============================================================ -->
  <section class="section testi-section">
    <div class="section-inner">
      <div class="section-head">
        <div>
          <span class="section-label">Customer Love</span>
          <h2 class="section-title">What Our <span>Clients</span> Say</h2>
          <p class="section-subtitle">Real reviews from our valued customers.</p>
        </div>
      </div>

      <div class="testi-grid">
        <div class="testi-card">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <div class="testi-text">"Absolutely stunning quality. The velvet sofa I ordered exceeded every expectation — delivered in perfect condition, and the customer support was exceptional throughout."</div>
          <div class="testi-author">
            <div class="testi-avatar">A</div>
            <div>
              <div class="testi-name">Arjun Mehta</div>
              <div class="testi-role">Purchased: Velvet 3-Seater Sofa</div>
            </div>
          </div>
        </div>

        <div class="testi-card">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <div class="testi-text">"LUXE is my go-to for premium electronics. The prices are competitive, shipping was lightning-fast, and the product was sealed and authentic. Highly recommend!"</div>
          <div class="testi-author">
            <div class="testi-avatar">P</div>
            <div>
              <div class="testi-name">Priya Sharma</div>
              <div class="testi-role">Purchased: SonicPro Headphones</div>
            </div>
          </div>
        </div>

        <div class="testi-card">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-stroke"></i>
          </div>
          <div class="testi-text">"The linen blazer is a masterpiece. Exactly as described — premium fabric, perfect fit, and arrived beautifully packaged. This brand understands luxury."</div>
          <div class="testi-author">
            <div class="testi-avatar">R</div>
            <div>
              <div class="testi-name">Rahul Kapoor</div>
              <div class="testi-role">Purchased: Royale Linen Blazer</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       NEWSLETTER
  ============================================================ -->
  <div class="newsletter-section">
    <div class="newsletter-wrap">
      <div>
        <div class="nl-label">Stay in the Loop</div>
        <div class="nl-title">Get Exclusive Deals &amp;<br>New Arrivals First</div>
        <div class="nl-desc">Join 2 million+ subscribers who get early access to sales, new products, and luxury editorial content.</div>
      </div>
      <div class="nl-form">
        <div class="nl-input-wrap">
          <input class="nl-input" type="email" placeholder="Your email address" aria-label="Email for newsletter" />
          <button class="btn-nl">Subscribe</button>
        </div>
        <div class="nl-note">✓ No spam. Unsubscribe anytime. Your data is safe with us.</div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       FOOTER
  ============================================================ -->
  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-top">
        <div class="footer-brand">
          <div class="logo">
            <div class="logo-emblem" style="background:linear-gradient(135deg,#a31515,#5a0000);">
              <i class="fas fa-gem"></i>
            </div>
            <div class="logo-text footer-brand">
              <span class="logo-name">LUXE</span>
              <span class="logo-tagline">Premium Collection</span>
            </div>
          </div>
          <p class="footer-desc">India's premier destination for curated luxury products. We believe premium shouldn't mean unattainable.</p>
          <div class="footer-socials">
            <div class="social-btn"><i class="fab fa-instagram"></i></div>
            <div class="social-btn"><i class="fab fa-facebook-f"></i></div>
            <div class="social-btn"><i class="fab fa-twitter"></i></div>
            <div class="social-btn"><i class="fab fa-youtube"></i></div>
            <div class="social-btn"><i class="fab fa-pinterest"></i></div>
          </div>
        </div>

        <div class="footer-col">
          <h4>Shop</h4>
          <div class="footer-links">
            <div class="footer-link">Mobile Phones</div>
            <div class="footer-link">Electronics</div>
            <div class="footer-link">Fashion &amp; Apparel</div>
            <div class="footer-link">Furniture</div>
            <div class="footer-link">Deals &amp; Offers</div>
            <div class="footer-link">New Arrivals</div>
          </div>
        </div>

        <div class="footer-col">
          <h4>Support</h4>
          <div class="footer-links">
            <div class="footer-link">Help Center</div>
            <div class="footer-link">Track Order</div>
            <div class="footer-link">Returns &amp; Refunds</div>
            <div class="footer-link">Warranty Policy</div>
            <div class="footer-link">Size Guide</div>
            <div class="footer-link">Contact Us</div>
          </div>
        </div>

        <div class="footer-col">
          <h4>Company</h4>
          <div class="footer-links">
            <div class="footer-link">About LUXE</div>
            <div class="footer-link">Careers</div>
            <div class="footer-link">Press &amp; Media</div>
            <div class="footer-link">Affiliate Program</div>
            <div class="footer-link">Privacy Policy</div>
            <div class="footer-link">Terms of Service</div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="footer-copy">© 2025 LUXE Premium eCommerce. All rights reserved. Crafted with ♥ in India.</div>
        <div class="footer-pay">
          <div class="pay-icon">VISA</div>
          <div class="pay-icon">MC</div>
          <div class="pay-icon">UPI</div>
          <div class="pay-icon">GPay</div>
          <div class="pay-icon">PhonePe</div>
          <div class="pay-icon">COD</div>
        </div>
      </div>
    </div>
  </footer>

  <!-- ============================================================
       JAVASCRIPT
  ============================================================ -->
  <script>
    /* -- Sticky header shadow on scroll -- */
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 10);
    });

    /* -- Hamburger toggle -- */
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobileNav');

    hamburger.addEventListener('click', () => {
      const open = hamburger.classList.toggle('open');
      mobileNav.classList.toggle('open', open);
      mobileNav.setAttribute('aria-hidden', String(!open));
      document.body.style.overflow = open ? 'hidden' : '';
    });

    /* -- Mobile submenu accordions -- */
    function toggleSub(id) {
      const sub = document.getElementById(id);
      const parent = sub.previousElementSibling;
      const isOpen = sub.classList.toggle('open');
      parent.classList.toggle('expanded', isOpen);
    }

    /* -- Close mobile nav on outside click -- */
    document.addEventListener('click', (e) => {
      if (!mobileNav.contains(e.target) && !hamburger.contains(e.target)) {
        hamburger.classList.remove('open');
        mobileNav.classList.remove('open');
        mobileNav.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
    });

    /* -- Wishlist toggle -- */
    document.querySelectorAll('.product-wish').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        btn.classList.toggle('active');
        const icon = btn.querySelector('i');
        icon.classList.toggle('far');
        icon.classList.toggle('fas');
      });
    });

    /* -- Cart badge bump on Add to Cart -- */
    let cartCount = 3;
    const badge = document.querySelector('.cart-badge');

    document.querySelectorAll('.product-add-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        cartCount++;
        badge.textContent = cartCount;
        badge.style.transform = 'scale(1.4)';
        setTimeout(() => { badge.style.transform = ''; }, 300);
      });
    });

    /* -- Keyboard accessibility: hamburger -- */
    hamburger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        hamburger.click();
      }
    });
  </script>

</body>
</html>