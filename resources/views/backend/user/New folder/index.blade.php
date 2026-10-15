<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LUXE — My Account Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <style>
    /* =====================================================
       ROOT VARIABLES
    ===================================================== */
    :root {
      --maroon:       #800000;
      --maroon-deep:  #5a0000;
      --maroon-light: #a31515;
      --maroon-glow:  rgba(128,0,0,0.12);
      --gold:         #c9a84c;
      --gold-light:   #e8cc84;
      --cream:        #fdf8f3;
      --beige:        #f2ece4;
      --smoke:        #f7f4f1;
      --white:        #ffffff;
      --text-dark:    #1a0f0f;
      --text-mid:     #4a3030;
      --text-light:   #9a8080;
      --border:       rgba(128,0,0,0.1);
      --border-solid: #ede4dc;
      --shadow-sm:    0 2px 12px rgba(128,0,0,0.07);
      --shadow-md:    0 8px 32px rgba(128,0,0,0.12);
      --shadow-lg:    0 20px 56px rgba(128,0,0,0.16);
      --radius:       14px;
      --radius-sm:    8px;
      --radius-pill:  50px;
      --t:            0.28s cubic-bezier(0.4,0,0.2,1);
      --sidebar-w:    260px;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--text-dark);
      min-height: 100vh;
      display: flex;
      overflow-x: hidden;
    }
    a { text-decoration: none; color: inherit; }
    ul { list-style: none; }

    /* =====================================================
       SIDEBAR
    ===================================================== */
    .sidebar {
      width: var(--sidebar-w);
      min-height: 100vh;
      background: linear-gradient(170deg, #1a0808 0%, #2e0e0e 45%, #1a0808 100%);
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 0; left: 0; bottom: 0;
      z-index: 200;
      transition: transform var(--t);
      overflow: hidden;
    }

    /* Decorative grain */
    .sidebar::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      opacity: 0.5;
    }

    /* Decorative circles */
    .sidebar::after {
      content: '';
      position: absolute;
      width: 280px; height: 280px;
      border-radius: 50%;
      right: -120px; top: -80px;
      background: radial-gradient(circle, rgba(128,0,0,0.25) 0%, transparent 70%);
      pointer-events: none;
    }

    /* Brand */
    .sidebar-brand {
      padding: 28px 24px 22px;
      display: flex;
      align-items: center;
      gap: 12px;
      border-bottom: 1px solid rgba(255,255,255,0.06);
      position: relative;
      z-index: 1;
    }

    .brand-emblem {
      width: 40px; height: 40px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      border-radius: 11px;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 16px rgba(128,0,0,0.4);
      flex-shrink: 0;
    }

    .brand-emblem i { color: var(--gold-light); font-size: 17px; }

    .brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 20px;
      font-weight: 800;
      background: linear-gradient(135deg, var(--gold-light), var(--gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      letter-spacing: 0.05em;
    }

    .brand-sub {
      font-size: 9px;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: rgba(201,168,76,0.5);
    }

    /* User card */
    .sidebar-user {
      margin: 20px 16px;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: var(--radius);
      padding: 16px;
      display: flex;
      align-items: center;
      gap: 12px;
      position: relative;
      z-index: 1;
    }

    .user-avatar {
      width: 46px; height: 46px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      display: flex; align-items: center; justify-content: center;
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      font-weight: 700;
      color: var(--gold-light);
      flex-shrink: 0;
      border: 2px solid rgba(201,168,76,0.3);
    }

    .user-info { flex: 1; min-width: 0; }
    .user-name { font-size: 14px; font-weight: 600; color: var(--white); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .user-tier {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      margin-top: 3px;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.1em;
      color: var(--gold);
    }

    .user-tier i { font-size: 9px; }

    /* Nav */
    .sidebar-nav {
      flex: 1;
      padding: 12px 12px 0;
      overflow-y: auto;
      position: relative;
      z-index: 1;
    }

    .sidebar-nav::-webkit-scrollbar { width: 3px; }
    .sidebar-nav::-webkit-scrollbar-track { background: transparent; }
    .sidebar-nav::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 2px; }

    .nav-section-label {
      font-size: 9px;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.25);
      padding: 14px 12px 6px;
    }

    .nav-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 12px;
      border-radius: 10px;
      cursor: pointer;
      color: rgba(255,255,255,0.5);
      font-size: 13.5px;
      font-weight: 400;
      transition: all var(--t);
      position: relative;
      margin-bottom: 2px;
    }

    .nav-item i {
      width: 20px;
      text-align: center;
      font-size: 14px;
      flex-shrink: 0;
      transition: color var(--t);
    }

    .nav-item:hover {
      background: rgba(255,255,255,0.06);
      color: rgba(255,255,255,0.85);
    }

    .nav-item.active {
      background: linear-gradient(90deg, rgba(128,0,0,0.5) 0%, rgba(128,0,0,0.2) 100%);
      color: var(--white);
      border: 1px solid rgba(128,0,0,0.3);
    }

    .nav-item.active i { color: var(--gold-light); }

    .nav-item.active::before {
      content: '';
      position: absolute;
      left: 0; top: 20%; bottom: 20%;
      width: 3px;
      background: linear-gradient(180deg, var(--gold), var(--maroon));
      border-radius: 0 3px 3px 0;
    }

    .nav-badge {
      margin-left: auto;
      min-width: 20px; height: 20px;
      background: var(--maroon);
      border-radius: 10px;
      font-size: 10px;
      font-weight: 700;
      color: var(--white);
      display: flex; align-items: center; justify-content: center;
      padding: 0 5px;
    }

    /* Sidebar footer */
    .sidebar-footer {
      padding: 16px 12px 24px;
      border-top: 1px solid rgba(255,255,255,0.06);
      position: relative;
      z-index: 1;
    }

    .nav-item.logout { color: rgba(255,100,100,0.6); }
    .nav-item.logout:hover { color: rgba(255,100,100,0.9); background: rgba(255,50,50,0.08); }

    /* =====================================================
       MAIN CONTENT
    ===================================================== */
    .main {
      margin-left: var(--sidebar-w);
      flex: 1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Top bar */
    .topbar {
      height: 64px;
      background: rgba(253,248,243,0.9);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border-solid);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .topbar-left { display: flex; align-items: center; gap: 16px; }

    .topbar-greeting {
      font-size: 15px;
      color: var(--text-mid);
    }

    .topbar-greeting strong {
      color: var(--maroon);
      font-weight: 600;
    }

    .topbar-right { display: flex; align-items: center; gap: 10px; }

    .topbar-search {
      display: flex;
      align-items: center;
      gap: 8px;
      background: var(--smoke);
      border: 1.5px solid var(--border-solid);
      border-radius: var(--radius-pill);
      padding: 8px 16px;
      font-size: 13px;
      color: var(--text-light);
      cursor: pointer;
      transition: all var(--t);
    }

    .topbar-search:hover { border-color: var(--maroon); color: var(--text-mid); }
    .topbar-search i { font-size: 13px; }

    .topbar-icon {
      width: 38px; height: 38px;
      border-radius: 50%;
      background: none;
      border: none;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      color: var(--text-mid);
      font-size: 16px;
      position: relative;
      transition: all var(--t);
    }

    .topbar-icon:hover { background: var(--maroon-glow); color: var(--maroon); }

    .topbar-dot {
      position: absolute;
      top: 7px; right: 7px;
      width: 8px; height: 8px;
      background: var(--maroon);
      border-radius: 50%;
      border: 2px solid var(--cream);
    }

    .topbar-avatar {
      width: 36px; height: 36px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      display: flex; align-items: center; justify-content: center;
      font-family: 'Cormorant Garamond', serif;
      font-size: 16px;
      font-weight: 700;
      color: var(--gold-light);
      cursor: pointer;
      border: 2px solid rgba(128,0,0,0.2);
      transition: transform var(--t), box-shadow var(--t);
    }

    .topbar-avatar:hover { transform: scale(1.08); box-shadow: 0 4px 14px var(--maroon-glow); }

    /* Hamburger */
    .menu-toggle {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 6px;
      border-radius: 8px;
      transition: background var(--t);
    }
    .menu-toggle:hover { background: var(--maroon-glow); }
    .menu-toggle span { display: block; height: 2px; background: var(--maroon); border-radius: 2px; }
    .menu-toggle span:nth-child(1) { width: 22px; }
    .menu-toggle span:nth-child(2) { width: 16px; }
    .menu-toggle span:nth-child(3) { width: 20px; }

    /* =====================================================
       PAGE BODY
    ===================================================== */
    .page-body { padding: 32px; flex: 1; }

    /* Page header */
    .page-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 28px;
      flex-wrap: wrap;
      gap: 16px;
    }

    .page-title {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 800;
      color: var(--text-dark);
      line-height: 1.2;
    }

    .page-title span {
      background: linear-gradient(135deg, var(--maroon), var(--maroon-light));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .page-subtitle { font-size: 13.5px; color: var(--text-light); margin-top: 4px; }

    .btn-sm {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 10px 20px;
      border-radius: var(--radius-pill);
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      transition: all var(--t);
      border: none;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      color: var(--white);
      box-shadow: 0 4px 14px var(--maroon-glow);
    }

    .btn-primary:hover {
      box-shadow: 0 8px 24px rgba(128,0,0,0.28);
      transform: translateY(-2px);
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid var(--border-solid);
      color: var(--text-mid);
    }

    .btn-outline:hover { border-color: var(--maroon); color: var(--maroon); background: var(--maroon-glow); }

    /* =====================================================
       STAT CARDS ROW
    ===================================================== */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
      margin-bottom: 28px;
    }

    .stat-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 22px 20px;
      border: 1px solid var(--border-solid);
      box-shadow: var(--shadow-sm);
      position: relative;
      overflow: hidden;
      transition: transform var(--t), box-shadow var(--t);
      animation: fadeUp 0.5s both;
    }

    .stat-card:nth-child(1) { animation-delay: 0.05s; }
    .stat-card:nth-child(2) { animation-delay: 0.10s; }
    .stat-card:nth-child(3) { animation-delay: 0.15s; }
    .stat-card:nth-child(4) { animation-delay: 0.20s; }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .stat-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }

    .stat-card::after {
      content: '';
      position: absolute;
      top: 0; right: 0;
      width: 80px; height: 80px;
      border-radius: 0 0 0 80px;
      opacity: 0.06;
    }

    .stat-card.c1::after { background: var(--maroon); }
    .stat-card.c2::after { background: #1565c0; }
    .stat-card.c3::after { background: #2e7d32; }
    .stat-card.c4::after { background: #c9a84c; }

    .stat-icon {
      width: 44px; height: 44px;
      border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 18px;
      margin-bottom: 14px;
    }

    .c1 .stat-icon { background: rgba(128,0,0,0.1); color: var(--maroon); }
    .c2 .stat-icon { background: rgba(21,101,192,0.1); color: #1565c0; }
    .c3 .stat-icon { background: rgba(46,125,50,0.1); color: #2e7d32; }
    .c4 .stat-icon { background: rgba(201,168,76,0.12); color: #c9a84c; }

    .stat-label { font-size: 11.5px; color: var(--text-light); font-weight: 500; letter-spacing: 0.04em; margin-bottom: 6px; }

    .stat-value {
      font-family: 'Cormorant Garamond', serif;
      font-size: 30px;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1;
      margin-bottom: 8px;
    }

    .stat-delta {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      font-size: 11px;
      font-weight: 600;
    }

    .stat-delta.up   { color: #2e7d32; }
    .stat-delta.down { color: #c62828; }
    .stat-delta i    { font-size: 10px; }

    /* =====================================================
       MAIN GRID — 2 col
    ===================================================== */
    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    /* Card shell */
    .card {
      background: var(--white);
      border-radius: var(--radius);
      border: 1px solid var(--border-solid);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      animation: fadeUp 0.5s both;
    }

    .card-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 22px 16px;
      border-bottom: 1px solid var(--border-solid);
    }

    .card-title {
      font-size: 15px;
      font-weight: 600;
      color: var(--text-dark);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .card-title i { font-size: 14px; color: var(--maroon); }

    .card-link {
      font-size: 12px;
      font-weight: 500;
      color: var(--maroon);
      display: flex;
      align-items: center;
      gap: 5px;
      cursor: pointer;
      transition: gap var(--t);
    }

    .card-link:hover { gap: 8px; }

    .card-body { padding: 18px 22px; }

    /* =====================================================
       ORDER LIST
    ===================================================== */
    .order-list { display: flex; flex-direction: column; gap: 0; }

    .order-row {
      display: grid;
      grid-template-columns: auto 1fr auto auto;
      align-items: center;
      gap: 16px;
      padding: 14px 0;
      border-bottom: 1px solid var(--border-solid);
      transition: background var(--t);
      cursor: pointer;
      border-radius: 6px;
      margin: 0 -6px;
      padding-left: 6px; padding-right: 6px;
    }

    .order-row:last-child { border-bottom: none; }
    .order-row:hover { background: var(--smoke); }

    .order-img {
      width: 48px; height: 48px;
      border-radius: 10px;
      background: var(--smoke);
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      color: var(--text-light);
      flex-shrink: 0;
      border: 1px solid var(--border-solid);
    }

    .order-info { min-width: 0; }

    .order-name {
      font-size: 13.5px;
      font-weight: 500;
      color: var(--text-dark);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      margin-bottom: 3px;
    }

    .order-meta { font-size: 11.5px; color: var(--text-light); }

    .order-price {
      font-family: 'Cormorant Garamond', serif;
      font-size: 17px;
      font-weight: 700;
      color: var(--text-dark);
      white-space: nowrap;
      flex-shrink: 0;
    }

    .status-pill {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: var(--radius-pill);
      font-size: 10.5px;
      font-weight: 600;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .status-pill i { font-size: 8px; }
    .s-delivered { background: rgba(46,125,50,0.1); color: #2e7d32; }
    .s-shipped   { background: rgba(21,101,192,0.1); color: #1565c0; }
    .s-processing{ background: rgba(201,168,76,0.12); color: #7a5c00; }
    .s-cancelled { background: rgba(198,40,40,0.1);  color: #c62828; }

    /* =====================================================
       ACTIVITY / NOTIFICATIONS
    ===================================================== */
    .activity-list { display: flex; flex-direction: column; gap: 0; }

    .activity-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 12px 0;
      border-bottom: 1px solid var(--border-solid);
      position: relative;
    }

    .activity-item:last-child { border-bottom: none; }

    .act-dot {
      width: 36px; height: 36px;
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 14px;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .act-dot.green  { background: rgba(46,125,50,0.1); color: #2e7d32; }
    .act-dot.blue   { background: rgba(21,101,192,0.1); color: #1565c0; }
    .act-dot.maroon { background: var(--maroon-glow); color: var(--maroon); }
    .act-dot.gold   { background: rgba(201,168,76,0.12); color: #c9a84c; }
    .act-dot.red    { background: rgba(198,40,40,0.1); color: #c62828; }

    .act-text { flex: 1; min-width: 0; }
    .act-title { font-size: 13px; font-weight: 500; color: var(--text-dark); line-height: 1.4; margin-bottom: 2px; }
    .act-time  { font-size: 11px; color: var(--text-light); }

    /* =====================================================
       WISHLIST MINI GRID
    ===================================================== */
    .wish-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .wish-card {
      border-radius: 12px;
      border: 1px solid var(--border-solid);
      overflow: hidden;
      cursor: pointer;
      transition: transform var(--t), box-shadow var(--t);
      background: var(--smoke);
    }

    .wish-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }

    .wish-img {
      aspect-ratio: 1/1;
      background: var(--beige);
      display: flex; align-items: center; justify-content: center;
      font-size: 32px;
      color: var(--text-light);
      position: relative;
    }

    .wish-remove {
      position: absolute;
      top: 6px; right: 6px;
      width: 26px; height: 26px;
      background: var(--white);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px;
      color: var(--text-light);
      cursor: pointer;
      opacity: 0;
      transition: all var(--t);
    }

    .wish-card:hover .wish-remove { opacity: 1; }
    .wish-remove:hover { color: var(--maroon); }

    .wish-info { padding: 10px 10px 12px; }
    .wish-name { font-size: 12px; font-weight: 500; color: var(--text-dark); margin-bottom: 4px; line-height: 1.3; }
    .wish-price { font-family: 'Cormorant Garamond', serif; font-size: 16px; font-weight: 700; color: var(--maroon); }

    /* =====================================================
       ADDRESS CARDS
    ===================================================== */
    .address-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    .address-card {
      border: 1.5px solid var(--border-solid);
      border-radius: var(--radius);
      padding: 18px;
      cursor: pointer;
      transition: all var(--t);
      position: relative;
    }

    .address-card:hover { border-color: var(--maroon); box-shadow: 0 4px 16px var(--maroon-glow); }

    .address-card.default { border-color: var(--maroon); background: rgba(128,0,0,0.02); }

    .address-badge {
      position: absolute;
      top: 12px; right: 12px;
      font-size: 9px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 3px 8px;
      border-radius: var(--radius-pill);
      background: var(--maroon);
      color: var(--white);
    }

    .address-type {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .address-type i { font-size: 11px; }

    .address-name { font-size: 14px; font-weight: 600; color: var(--text-dark); margin-bottom: 4px; }
    .address-line { font-size: 12.5px; color: var(--text-light); line-height: 1.6; }

    .address-actions { display: flex; gap: 8px; margin-top: 12px; }

    .btn-xs {
      padding: 5px 12px;
      border-radius: var(--radius-pill);
      font-size: 11px;
      font-weight: 500;
      cursor: pointer;
      border: 1.5px solid var(--border-solid);
      background: none;
      color: var(--text-mid);
      font-family: 'DM Sans', sans-serif;
      transition: all var(--t);
    }

    .btn-xs:hover { border-color: var(--maroon); color: var(--maroon); }
    .btn-xs.danger:hover { border-color: #c62828; color: #c62828; }

    /* Add address card */
    .address-add {
      border: 1.5px dashed var(--border-solid);
      border-radius: var(--radius);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      padding: 24px;
      transition: all var(--t);
      min-height: 150px;
    }

    .address-add:hover { border-color: var(--maroon); background: var(--maroon-glow); }

    .address-add i { font-size: 24px; color: var(--text-light); }
    .address-add span { font-size: 12.5px; color: var(--text-light); font-weight: 500; }

    /* =====================================================
       PROFILE FORM
    ===================================================== */
    .profile-layout {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 32px;
      align-items: start;
    }

    .profile-photo-col { display: flex; flex-direction: column; align-items: center; gap: 12px; }

    .profile-photo {
      width: 90px; height: 90px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      display: flex; align-items: center; justify-content: center;
      font-family: 'Cormorant Garamond', serif;
      font-size: 36px;
      font-weight: 700;
      color: var(--gold-light);
      border: 3px solid rgba(128,0,0,0.2);
      position: relative;
    }

    .photo-edit {
      position: absolute;
      bottom: 0; right: 0;
      width: 26px; height: 26px;
      background: var(--maroon);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: var(--white);
      font-size: 11px;
      cursor: pointer;
      border: 2px solid var(--white);
    }

    .photo-note { font-size: 11px; color: var(--text-light); text-align: center; max-width: 100px; line-height: 1.4; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-label { font-size: 12px; font-weight: 600; color: var(--text-mid); letter-spacing: 0.04em; }

    .form-input {
      height: 42px;
      padding: 0 14px;
      border: 1.5px solid var(--border-solid);
      border-radius: 10px;
      background: var(--smoke);
      font-family: 'DM Sans', sans-serif;
      font-size: 13.5px;
      color: var(--text-dark);
      outline: none;
      transition: all var(--t);
    }

    .form-input:focus { border-color: var(--maroon); background: var(--white); box-shadow: 0 0 0 4px var(--maroon-glow); }
    .form-input::placeholder { color: var(--text-light); }

    .form-select {
      height: 42px;
      padding: 0 14px;
      border: 1.5px solid var(--border-solid);
      border-radius: 10px;
      background: var(--smoke);
      font-family: 'DM Sans', sans-serif;
      font-size: 13.5px;
      color: var(--text-dark);
      outline: none;
      cursor: pointer;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%239a8080' fill='none' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 14px center;
      padding-right: 36px;
      transition: all var(--t);
    }

    .form-select:focus { border-color: var(--maroon); box-shadow: 0 0 0 4px var(--maroon-glow); }

    .form-actions { display: flex; gap: 10px; margin-top: 6px; }

    /* =====================================================
       LOYALTY CARD
    ===================================================== */
    .loyalty-card {
      background: linear-gradient(135deg, #1a0808 0%, #3d1010 50%, #1a0808 100%);
      border-radius: var(--radius);
      padding: 24px 22px;
      position: relative;
      overflow: hidden;
    }

    .loyalty-card::before {
      content: '';
      position: absolute;
      width: 200px; height: 200px;
      border-radius: 50%;
      right: -60px; top: -60px;
      background: radial-gradient(circle, rgba(128,0,0,0.4) 0%, transparent 70%);
    }

    .loyalty-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .loy-tier {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .loy-tier-badge {
      padding: 4px 12px;
      background: linear-gradient(90deg, var(--gold), #a07030);
      border-radius: var(--radius-pill);
      font-size: 10px;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--white);
    }

    .loy-pts {
      font-family: 'Cormorant Garamond', serif;
      font-size: 36px;
      font-weight: 700;
      color: var(--white);
      line-height: 1;
    }

    .loy-pts-label { font-size: 11px; color: rgba(255,255,255,0.5); margin-top: 2px; }

    .loy-prog-label {
      display: flex;
      justify-content: space-between;
      font-size: 11px;
      color: rgba(255,255,255,0.5);
      margin-bottom: 6px;
    }

    .loy-prog-track {
      height: 5px;
      background: rgba(255,255,255,0.1);
      border-radius: 3px;
      overflow: hidden;
      margin-bottom: 10px;
    }

    .loy-prog-fill {
      height: 100%;
      width: 68%;
      background: linear-gradient(90deg, var(--gold), var(--gold-light));
      border-radius: 3px;
    }

    .loy-note { font-size: 11px; color: rgba(255,255,255,0.4); }
    .loy-note strong { color: var(--gold-light); }

    /* =====================================================
       COUPON / PROMO
    ===================================================== */
    .coupon-list { display: flex; flex-direction: column; gap: 10px; }

    .coupon-card {
      display: flex;
      align-items: center;
      gap: 0;
      border: 1.5px solid var(--border-solid);
      border-radius: 12px;
      overflow: hidden;
      transition: all var(--t);
      cursor: pointer;
    }

    .coupon-card:hover { border-color: var(--maroon); box-shadow: var(--shadow-sm); }

    .coupon-left {
      width: 68px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-deep));
      align-self: stretch;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .coupon-left span {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      font-weight: 800;
      color: var(--gold-light);
      writing-mode: vertical-rl;
      text-orientation: mixed;
      transform: rotate(180deg);
      letter-spacing: 0.05em;
    }

    .coupon-body { flex: 1; padding: 12px 16px; }

    .coupon-code {
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.12em;
      color: var(--maroon);
      margin-bottom: 3px;
    }

    .coupon-desc { font-size: 12px; color: var(--text-mid); margin-bottom: 4px; }
    .coupon-exp  { font-size: 10.5px; color: var(--text-light); }

    .coupon-btn {
      padding: 8px 16px;
      margin-right: 14px;
      background: var(--maroon-glow);
      border: 1.5px solid rgba(128,0,0,0.2);
      border-radius: var(--radius-pill);
      font-size: 11.5px;
      font-weight: 600;
      color: var(--maroon);
      cursor: pointer;
      white-space: nowrap;
      font-family: 'DM Sans', sans-serif;
      transition: all var(--t);
      flex-shrink: 0;
    }

    .coupon-btn:hover { background: var(--maroon); color: var(--white); }

    /* =====================================================
       TABS
    ===================================================== */
    .tabs {
      display: flex;
      gap: 4px;
      background: var(--smoke);
      border-radius: 10px;
      padding: 4px;
      margin-bottom: 20px;
    }

    .tab {
      flex: 1;
      padding: 8px 12px;
      text-align: center;
      font-size: 12.5px;
      font-weight: 500;
      color: var(--text-light);
      border-radius: 8px;
      cursor: pointer;
      transition: all var(--t);
    }

    .tab.active {
      background: var(--white);
      color: var(--maroon);
      font-weight: 600;
      box-shadow: var(--shadow-sm);
    }

    /* =====================================================
       EMPTY STATE
    ===================================================== */
    .empty-state {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
      gap: 12px;
      text-align: center;
    }

    .empty-state i { font-size: 36px; color: var(--border-solid); }
    .empty-state p { font-size: 13px; color: var(--text-light); }

    /* =====================================================
       SECTION TABS (page views)
    ===================================================== */
    .dash-section { display: none; }
    .dash-section.active { display: block; }

    /* =====================================================
       OVERLAY for mobile
    ===================================================== */
    .overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 199;
      opacity: 0;
      transition: opacity var(--t);
    }

    .overlay.show { display: block; opacity: 1; }

    /* =====================================================
       PROGRESS TRACKER
    ===================================================== */
    .track-steps {
      display: flex;
      align-items: center;
      gap: 0;
      margin: 8px 0 6px;
    }

    .track-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      flex: 1;
      position: relative;
    }

    .track-step::after {
      content: '';
      position: absolute;
      top: 14px;
      left: 50%;
      width: 100%;
      height: 2px;
      background: var(--border-solid);
      z-index: 0;
    }

    .track-step:last-child::after { display: none; }

    .track-step.done::after { background: var(--maroon); }

    .track-dot {
      width: 28px; height: 28px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px;
      position: relative;
      z-index: 1;
      border: 2px solid var(--border-solid);
      background: var(--white);
      color: var(--text-light);
    }

    .track-step.done .track-dot { background: var(--maroon); border-color: var(--maroon); color: var(--white); }
    .track-step.current .track-dot { background: var(--white); border-color: var(--maroon); color: var(--maroon); box-shadow: 0 0 0 4px var(--maroon-glow); }

    .track-label { font-size: 10px; color: var(--text-light); text-align: center; max-width: 60px; line-height: 1.3; }
    .track-step.done .track-label, .track-step.current .track-label { color: var(--maroon); font-weight: 600; }

    /* =====================================================
       RESPONSIVE
    ===================================================== */
    @media (max-width: 1100px) {
      .stats-row { grid-template-columns: repeat(2, 1fr); }
      .grid-2 { grid-template-columns: 1fr; }
      .grid-3 { grid-template-columns: 1fr; }
      .wish-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 860px) {
      :root { --sidebar-w: 260px; }

      .sidebar { transform: translateX(-100%); }
      .sidebar.open { transform: translateX(0); }
      .main { margin-left: 0; }
      .menu-toggle { display: flex; }
      .topbar { padding: 0 20px; }
      .page-body { padding: 20px; }
      .address-grid { grid-template-columns: 1fr; }
      .form-grid { grid-template-columns: 1fr; }
      .profile-layout { grid-template-columns: 1fr; }
      .profile-photo-col { flex-direction: row; align-items: center; gap: 20px; }
      .photo-note { text-align: left; max-width: 200px; }
    }

    @media (max-width: 540px) {
      .stats-row { grid-template-columns: 1fr 1fr; gap: 12px; }
      .wish-grid { grid-template-columns: 1fr 1fr 1fr; }
      .order-row { grid-template-columns: auto 1fr auto; }
      .order-price { display: none; }
      .topbar-search { display: none; }
    }
  </style>
</head>
<body>

  <!-- =====================================================
       SIDEBAR
  ===================================================== -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
      <div class="brand-emblem"><i class="fas fa-gem"></i></div>
      <div>
        <div class="brand-name">LUXE</div>
        <div class="brand-sub">Premium Collection</div>
      </div>
    </div>

    <div class="sidebar-user">
      <div class="user-avatar">A</div>
      <div class="user-info">
        <div class="user-name">Arjun Mehta</div>
        <div class="user-tier"><i class="fas fa-crown"></i> Gold Member</div>
      </div>
    </div>

    <nav class="sidebar-nav">
      <div class="nav-section-label">Main</div>

      <div class="nav-item active" onclick="showSection('overview', this)">
        <i class="fas fa-house"></i> Overview
      </div>
      <div class="nav-item" onclick="showSection('orders', this)">
        <i class="fas fa-bag-shopping"></i> My Orders
        <span class="nav-badge">2</span>
      </div>
      <div class="nav-item" onclick="showSection('wishlist', this)">
        <i class="fas fa-heart"></i> Wishlist
        <span class="nav-badge">5</span>
      </div>
      <div class="nav-item" onclick="showSection('addresses', this)">
        <i class="fas fa-location-dot"></i> Addresses
      </div>

      <div class="nav-section-label">Account</div>

      <div class="nav-item" onclick="showSection('profile', this)">
        <i class="fas fa-user-circle"></i> Profile Settings
      </div>
      <div class="nav-item" onclick="showSection('coupons', this)">
        <i class="fas fa-tag"></i> Coupons & Offers
        <span class="nav-badge">3</span>
      </div>
      <div class="nav-item" onclick="showSection('loyalty', this)">
        <i class="fas fa-crown"></i> Loyalty Points
      </div>
      <div class="nav-item" onclick="showSection('wallet', this)">
        <i class="fas fa-wallet"></i> Wallet
      </div>

      <div class="nav-section-label">Support</div>

      <div class="nav-item" onclick="showSection('returns', this)">
        <i class="fas fa-rotate-left"></i> Returns & Refunds
      </div>
      <div class="nav-item">
        <i class="fas fa-headset"></i> Help Centre
      </div>
    </nav>

    <div class="sidebar-footer">
      <div class="nav-item logout">
        <i class="fas fa-arrow-right-from-bracket"></i> Sign Out
      </div>
    </div>
  </aside>

  <!-- Overlay for mobile -->
  <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

  <!-- =====================================================
       MAIN
  ===================================================== -->
  <div class="main">

    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <div class="menu-toggle" id="menuToggle" onclick="toggleSidebar()">
          <span style="width:22px"></span>
          <span style="width:16px"></span>
          <span style="width:20px"></span>
        </div>
        <div class="topbar-greeting">Welcome back, <strong>Arjun</strong> 👋</div>
      </div>
      <div class="topbar-right">
        <div class="topbar-search"><i class="fas fa-magnifying-glass"></i> Search orders…</div>
        <button class="topbar-icon" aria-label="Notifications">
          <i class="fas fa-bell"></i>
          <span class="topbar-dot"></span>
        </button>
        <button class="topbar-icon" aria-label="Messages">
          <i class="fas fa-message"></i>
        </button>
        <div class="topbar-avatar">A</div>
      </div>
    </header>

    <!-- Page Body -->
    <div class="page-body">

      <!-- ================================================
           OVERVIEW SECTION
      ================================================ -->
      <div class="dash-section active" id="sec-overview">

        <div class="page-header">
          <div>
            <div class="page-title">Dashboard <span>Overview</span></div>
            <div class="page-subtitle">Sunday, 8 March 2026 — Here's what's happening</div>
          </div>
          <button class="btn-sm btn-primary" onclick="showSection('orders', document.querySelector('[onclick*=orders]'))">
            <i class="fas fa-bag-shopping"></i> Track Orders
          </button>
        </div>

        <!-- Stats -->
        <div class="stats-row">
          <div class="stat-card c1">
            <div class="stat-icon"><i class="fas fa-bag-shopping"></i></div>
            <div class="stat-label">Total Orders</div>
            <div class="stat-value">28</div>
            <div class="stat-delta up"><i class="fas fa-arrow-trend-up"></i> +3 this month</div>
          </div>
          <div class="stat-card c2">
            <div class="stat-icon"><i class="fas fa-rotate-left"></i></div>
            <div class="stat-label">Active Returns</div>
            <div class="stat-value">1</div>
            <div class="stat-delta down"><i class="fas fa-arrow-trend-down"></i> 1 pending</div>
          </div>
          <div class="stat-card c3">
            <div class="stat-icon"><i class="fas fa-wallet"></i></div>
            <div class="stat-label">Wallet Balance</div>
            <div class="stat-value">₹2,450</div>
            <div class="stat-delta up"><i class="fas fa-arrow-trend-up"></i> +₹500 added</div>
          </div>
          <div class="stat-card c4">
            <div class="stat-icon"><i class="fas fa-crown"></i></div>
            <div class="stat-label">Loyalty Points</div>
            <div class="stat-value">3,840</div>
            <div class="stat-delta up"><i class="fas fa-arrow-trend-up"></i> +220 earned</div>
          </div>
        </div>

        <div class="grid-3" style="grid-template-columns: 1.6fr 1fr;">

          <!-- Recent Orders -->
          <div class="card" style="animation-delay:0.25s;">
            <div class="card-head">
              <div class="card-title"><i class="fas fa-clock-rotate-left"></i> Recent Orders</div>
              <div class="card-link" onclick="showSection('orders', document.querySelectorAll('.nav-item')[1])">
                View all <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <div class="card-body">
              <div class="order-list">

                <div class="order-row">
                  <div class="order-img"><i class="fas fa-mobile-screen-button"></i></div>
                  <div class="order-info">
                    <div class="order-name">ProMax 15 Ultra 256GB</div>
                    <div class="order-meta">#LX-20482 · 4 Mar 2026</div>
                  </div>
                  <div class="order-price">₹79,999</div>
                  <div class="status-pill s-shipped"><i class="fas fa-circle"></i> Shipped</div>
                </div>

                <div class="order-row">
                  <div class="order-img"><i class="fas fa-couch"></i></div>
                  <div class="order-info">
                    <div class="order-name">Velvet 3-Seater Sofa</div>
                    <div class="order-meta">#LX-20411 · 28 Feb 2026</div>
                  </div>
                  <div class="order-price">₹42,999</div>
                  <div class="status-pill s-delivered"><i class="fas fa-circle"></i> Delivered</div>
                </div>

                <div class="order-row">
                  <div class="order-img"><i class="fas fa-headphones"></i></div>
                  <div class="order-info">
                    <div class="order-name">SonicPro ANC Headphones</div>
                    <div class="order-meta">#LX-20389 · 20 Feb 2026</div>
                  </div>
                  <div class="order-price">₹24,999</div>
                  <div class="status-pill s-delivered"><i class="fas fa-circle"></i> Delivered</div>
                </div>

                <div class="order-row">
                  <div class="order-img"><i class="fas fa-shirt"></i></div>
                  <div class="order-info">
                    <div class="order-name">Royale Linen Blazer</div>
                    <div class="order-meta">#LX-20301 · 10 Feb 2026</div>
                  </div>
                  <div class="order-price">₹5,499</div>
                  <div class="status-pill s-processing"><i class="fas fa-circle"></i> Processing</div>
                </div>

              </div>
            </div>
          </div>

          <!-- Activity -->
          <div class="card" style="animation-delay:0.3s;">
            <div class="card-head">
              <div class="card-title"><i class="fas fa-bell"></i> Activity</div>
            </div>
            <div class="card-body">
              <div class="activity-list">

                <div class="activity-item">
                  <div class="act-dot green"><i class="fas fa-check"></i></div>
                  <div class="act-text">
                    <div class="act-title">Order #LX-20411 delivered successfully</div>
                    <div class="act-time">2 hours ago</div>
                  </div>
                </div>

                <div class="activity-item">
                  <div class="act-dot blue"><i class="fas fa-truck"></i></div>
                  <div class="act-text">
                    <div class="act-title">Order #LX-20482 out for delivery</div>
                    <div class="act-time">Today, 9:14 AM</div>
                  </div>
                </div>

                <div class="activity-item">
                  <div class="act-dot gold"><i class="fas fa-crown"></i></div>
                  <div class="act-text">
                    <div class="act-title">+220 loyalty points credited</div>
                    <div class="act-time">Yesterday</div>
                  </div>
                </div>

                <div class="activity-item">
                  <div class="act-dot maroon"><i class="fas fa-tag"></i></div>
                  <div class="act-text">
                    <div class="act-title">New coupon SAVE200 added</div>
                    <div class="act-time">2 days ago</div>
                  </div>
                </div>

                <div class="activity-item">
                  <div class="act-dot red"><i class="fas fa-rotate-left"></i></div>
                  <div class="act-text">
                    <div class="act-title">Return request #RT-882 approved</div>
                    <div class="act-time">3 days ago</div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

        <!-- Loyalty + Wishlist mini -->
        <div class="grid-2" style="grid-template-columns:1fr 1fr;">

          <div class="card" style="animation-delay:0.35s;">
            <div class="card-head">
              <div class="card-title"><i class="fas fa-crown"></i> Loyalty Status</div>
              <div class="card-link" onclick="showSection('loyalty', document.querySelectorAll('.nav-item')[7])">Details <i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="card-body">
              <div class="loyalty-card">
                <div class="loyalty-top">
                  <div class="loy-tier">
                    <div class="loy-tier-badge">Gold</div>
                  </div>
                  <div>
                    <div class="loy-pts">3,840</div>
                    <div class="loy-pts-label">Total Points</div>
                  </div>
                </div>
                <div class="loy-prog-label">
                  <span>Progress to Platinum</span>
                  <span>3,840 / 5,000 pts</span>
                </div>
                <div class="loy-prog-track"><div class="loy-prog-fill"></div></div>
                <div class="loy-note">Earn <strong>1,160 more points</strong> to unlock Platinum status</div>
              </div>
            </div>
          </div>

          <div class="card" style="animation-delay:0.4s;">
            <div class="card-head">
              <div class="card-title"><i class="fas fa-heart"></i> Wishlist</div>
              <div class="card-link" onclick="showSection('wishlist', document.querySelectorAll('.nav-item')[2])">View all <i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="card-body">
              <div class="wish-grid">
                <div class="wish-card">
                  <div class="wish-img"><i class="fas fa-tv"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                  <div class="wish-info"><div class="wish-name">UltraView 65" QLED</div><div class="wish-price">₹89,990</div></div>
                </div>
                <div class="wish-card">
                  <div class="wish-img"><i class="fas fa-laptop"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                  <div class="wish-info"><div class="wish-name">UltraBook Pro 14"</div><div class="wish-price">₹1,12,000</div></div>
                </div>
                <div class="wish-card">
                  <div class="wish-img"><i class="fas fa-shoe-prints"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                  <div class="wish-info"><div class="wish-name">Derby Leather Shoes</div><div class="wish-price">₹7,299</div></div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div><!-- /overview -->

      <!-- ================================================
           ORDERS SECTION
      ================================================ -->
      <div class="dash-section" id="sec-orders">
        <div class="page-header">
          <div>
            <div class="page-title">My <span>Orders</span></div>
            <div class="page-subtitle">Track and manage all your purchases</div>
          </div>
          <button class="btn-sm btn-outline"><i class="fas fa-filter"></i> Filter</button>
        </div>

        <div class="tabs">
          <div class="tab active">All Orders (28)</div>
          <div class="tab">Active (2)</div>
          <div class="tab">Delivered (24)</div>
          <div class="tab">Cancelled (2)</div>
        </div>

        <!-- Detailed order with tracker -->
        <div class="card" style="margin-bottom:16px;">
          <div class="card-head">
            <div class="card-title"><i class="fas fa-truck"></i> Order #LX-20482 — In Transit</div>
            <div class="status-pill s-shipped"><i class="fas fa-circle"></i> Shipped</div>
          </div>
          <div class="card-body">
            <div style="display:flex; gap:20px; align-items:flex-start; flex-wrap:wrap; margin-bottom:22px;">
              <div class="order-img" style="width:64px;height:64px;font-size:28px;"><i class="fas fa-mobile-screen-button"></i></div>
              <div>
                <div style="font-size:15px;font-weight:600;margin-bottom:4px;">ProMax 15 Ultra 256GB — Midnight Black</div>
                <div style="font-size:12.5px;color:var(--text-light);margin-bottom:4px;">Qty: 1 &nbsp;·&nbsp; Placed: 4 Mar 2026 &nbsp;·&nbsp; Est. Delivery: 10 Mar 2026</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:var(--maroon);">₹79,999</div>
              </div>
            </div>
            <div class="track-steps">
              <div class="track-step done">
                <div class="track-dot"><i class="fas fa-check"></i></div>
                <div class="track-label">Order Placed</div>
              </div>
              <div class="track-step done">
                <div class="track-dot"><i class="fas fa-check"></i></div>
                <div class="track-label">Confirmed</div>
              </div>
              <div class="track-step done">
                <div class="track-dot"><i class="fas fa-check"></i></div>
                <div class="track-label">Dispatched</div>
              </div>
              <div class="track-step current">
                <div class="track-dot"><i class="fas fa-truck"></i></div>
                <div class="track-label">Out for Delivery</div>
              </div>
              <div class="track-step">
                <div class="track-dot"><i class="fas fa-house"></i></div>
                <div class="track-label">Delivered</div>
              </div>
            </div>
            <div style="display:flex;gap:10px;margin-top:18px;">
              <button class="btn-sm btn-outline"><i class="fas fa-map-location-dot"></i> Track Shipment</button>
              <button class="btn-sm btn-outline"><i class="fas fa-rotate-left"></i> Cancel Order</button>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-head">
            <div class="card-title"><i class="fas fa-clock-rotate-left"></i> Order History</div>
          </div>
          <div class="card-body">
            <div class="order-list">
              <div class="order-row">
                <div class="order-img"><i class="fas fa-couch"></i></div>
                <div class="order-info"><div class="order-name">Velvet 3-Seater Sofa — Burgundy</div><div class="order-meta">#LX-20411 · 28 Feb 2026</div></div>
                <div class="order-price">₹42,999</div>
                <div class="status-pill s-delivered"><i class="fas fa-circle"></i> Delivered</div>
              </div>
              <div class="order-row">
                <div class="order-img"><i class="fas fa-headphones"></i></div>
                <div class="order-info"><div class="order-name">SonicPro ANC Headphones</div><div class="order-meta">#LX-20389 · 20 Feb 2026</div></div>
                <div class="order-price">₹24,999</div>
                <div class="status-pill s-delivered"><i class="fas fa-circle"></i> Delivered</div>
              </div>
              <div class="order-row">
                <div class="order-img"><i class="fas fa-shirt"></i></div>
                <div class="order-info"><div class="order-name">Royale Linen Blazer — Navy</div><div class="order-meta">#LX-20301 · 10 Feb 2026</div></div>
                <div class="order-price">₹5,499</div>
                <div class="status-pill s-cancelled"><i class="fas fa-circle"></i> Cancelled</div>
              </div>
              <div class="order-row">
                <div class="order-img"><i class="fas fa-chair"></i></div>
                <div class="order-info"><div class="order-name">ErgoLux Executive Chair</div><div class="order-meta">#LX-20215 · 30 Jan 2026</div></div>
                <div class="order-price">₹18,499</div>
                <div class="status-pill s-delivered"><i class="fas fa-circle"></i> Delivered</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           WISHLIST SECTION
      ================================================ -->
      <div class="dash-section" id="sec-wishlist">
        <div class="page-header">
          <div>
            <div class="page-title">My <span>Wishlist</span></div>
            <div class="page-subtitle">5 items saved for later</div>
          </div>
          <button class="btn-sm btn-primary"><i class="fas fa-bag-shopping"></i> Add All to Cart</button>
        </div>
        <div class="card">
          <div class="card-body">
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px;">
              <!-- Wishlist item -->
              <div class="wish-card" style="background:var(--white);">
                <div class="wish-img" style="background:var(--smoke);"><i class="fas fa-tv"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                <div class="wish-info">
                  <div class="wish-name">UltraView 65" 4K QLED Smart TV</div>
                  <div class="wish-price">₹89,990</div>
                  <button class="btn-sm btn-primary" style="margin-top:10px;width:100%;justify-content:center;border-radius:8px;font-size:12px;">Add to Cart</button>
                </div>
              </div>
              <div class="wish-card" style="background:var(--white);">
                <div class="wish-img" style="background:var(--smoke);"><i class="fas fa-laptop"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                <div class="wish-info">
                  <div class="wish-name">UltraBook Pro 14" M4 Max</div>
                  <div class="wish-price">₹1,12,000</div>
                  <button class="btn-sm btn-primary" style="margin-top:10px;width:100%;justify-content:center;border-radius:8px;font-size:12px;">Add to Cart</button>
                </div>
              </div>
              <div class="wish-card" style="background:var(--white);">
                <div class="wish-img" style="background:var(--smoke);"><i class="fas fa-shoe-prints"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                <div class="wish-info">
                  <div class="wish-name">Artisan Leather Derby Shoes</div>
                  <div class="wish-price">₹7,299</div>
                  <button class="btn-sm btn-primary" style="margin-top:10px;width:100%;justify-content:center;border-radius:8px;font-size:12px;">Add to Cart</button>
                </div>
              </div>
              <div class="wish-card" style="background:var(--white);">
                <div class="wish-img" style="background:var(--smoke);"><i class="fas fa-watch"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                <div class="wish-info">
                  <div class="wish-name">LuxeTime Chronograph Watch</div>
                  <div class="wish-price">₹32,000</div>
                  <button class="btn-sm btn-primary" style="margin-top:10px;width:100%;justify-content:center;border-radius:8px;font-size:12px;">Add to Cart</button>
                </div>
              </div>
              <div class="wish-card" style="background:var(--white);">
                <div class="wish-img" style="background:var(--smoke);"><i class="fas fa-camera"></i><div class="wish-remove"><i class="fas fa-xmark"></i></div></div>
                <div class="wish-info">
                  <div class="wish-name">Mirrorless Camera 45MP Body</div>
                  <div class="wish-price">₹1,45,000</div>
                  <button class="btn-sm btn-primary" style="margin-top:10px;width:100%;justify-content:center;border-radius:8px;font-size:12px;">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           ADDRESSES SECTION
      ================================================ -->
      <div class="dash-section" id="sec-addresses">
        <div class="page-header">
          <div>
            <div class="page-title">My <span>Addresses</span></div>
            <div class="page-subtitle">Manage your saved delivery addresses</div>
          </div>
          <button class="btn-sm btn-primary"><i class="fas fa-plus"></i> Add New</button>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="address-grid">
              <div class="address-card default">
                <div class="address-badge">Default</div>
                <div class="address-type"><i class="fas fa-house"></i> Home</div>
                <div class="address-name">Arjun Mehta</div>
                <div class="address-line">42, Shivaji Nagar, Near Central Mall<br>Pune, Maharashtra — 411005<br>+91 98765 43210</div>
                <div class="address-actions">
                  <button class="btn-xs">Edit</button>
                  <button class="btn-xs danger">Remove</button>
                </div>
              </div>
              <div class="address-card">
                <div class="address-type"><i class="fas fa-briefcase"></i> Office</div>
                <div class="address-name">Arjun Mehta</div>
                <div class="address-line">Level 8, Prestige Tower, BKC<br>Mumbai, Maharashtra — 400051<br>+91 98765 43210</div>
                <div class="address-actions">
                  <button class="btn-xs">Edit</button>
                  <button class="btn-xs">Set Default</button>
                  <button class="btn-xs danger">Remove</button>
                </div>
              </div>
              <div class="address-add">
                <i class="fas fa-plus-circle"></i>
                <span>Add New Address</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           PROFILE SECTION
      ================================================ -->
      <div class="dash-section" id="sec-profile">
        <div class="page-header">
          <div>
            <div class="page-title">Profile <span>Settings</span></div>
            <div class="page-subtitle">Manage your personal information and preferences</div>
          </div>
        </div>

        <div class="grid-2" style="grid-template-columns:1fr 1fr;align-items:start;">

          <div class="card" style="animation-delay:0.1s;">
            <div class="card-head">
              <div class="card-title"><i class="fas fa-user"></i> Personal Information</div>
            </div>
            <div class="card-body">
              <div class="profile-layout">
                <div class="profile-photo-col">
                  <div class="profile-photo">A
                    <div class="photo-edit"><i class="fas fa-pen"></i></div>
                  </div>
                  <div class="photo-note">JPG or PNG. Max 2MB.</div>
                </div>
                <div class="form-grid">
                  <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input class="form-input" type="text" value="Arjun" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input class="form-input" type="text" value="Mehta" />
                  </div>
                  <div class="form-group full">
                    <label class="form-label">Email Address</label>
                    <input class="form-input" type="email" value="arjun.mehta@email.com" />
                  </div>
                  <div class="form-group full">
                    <label class="form-label">Phone Number</label>
                    <input class="form-input" type="tel" value="+91 98765 43210" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Date of Birth</label>
                    <input class="form-input" type="date" value="1994-07-14" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Gender</label>
                    <select class="form-select">
                      <option selected>Male</option>
                      <option>Female</option>
                      <option>Prefer not to say</option>
                    </select>
                  </div>
                  <div class="form-actions full">
                    <button class="btn-sm btn-primary"><i class="fas fa-check"></i> Save Changes</button>
                    <button class="btn-sm btn-outline">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div style="display:flex;flex-direction:column;gap:20px;">
            <div class="card" style="animation-delay:0.15s;">
              <div class="card-head">
                <div class="card-title"><i class="fas fa-lock"></i> Change Password</div>
              </div>
              <div class="card-body">
                <div style="display:flex;flex-direction:column;gap:14px;">
                  <div class="form-group">
                    <label class="form-label">Current Password</label>
                    <input class="form-input" type="password" placeholder="••••••••" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input class="form-input" type="password" placeholder="••••••••" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Confirm New Password</label>
                    <input class="form-input" type="password" placeholder="••••••••" />
                  </div>
                  <button class="btn-sm btn-primary" style="align-self:flex-start;"><i class="fas fa-key"></i> Update Password</button>
                </div>
              </div>
            </div>

            <div class="card" style="animation-delay:0.2s;">
              <div class="card-head">
                <div class="card-title"><i class="fas fa-bell"></i> Notifications</div>
              </div>
              <div class="card-body">
                <div style="display:flex;flex-direction:column;gap:14px;">
                  <!-- Toggle rows -->
                  <div style="display:flex;align-items:center;justify-content:space-between;">
                    <div>
                      <div style="font-size:13.5px;font-weight:500;">Order Updates</div>
                      <div style="font-size:11.5px;color:var(--text-light);">Shipping & delivery alerts</div>
                    </div>
                    <label style="position:relative;width:44px;height:24px;cursor:pointer;">
                      <input type="checkbox" checked style="opacity:0;width:0;height:0;" />
                      <span style="position:absolute;inset:0;background:var(--maroon);border-radius:12px;transition:.3s;"></span>
                      <span style="position:absolute;top:3px;left:3px;width:18px;height:18px;background:white;border-radius:50%;transition:.3s;transform:translateX(20px);"></span>
                    </label>
                  </div>
                  <div style="height:1px;background:var(--border-solid);"></div>
                  <div style="display:flex;align-items:center;justify-content:space-between;">
                    <div>
                      <div style="font-size:13.5px;font-weight:500;">Promotions</div>
                      <div style="font-size:11.5px;color:var(--text-light);">Deals, offers & coupons</div>
                    </div>
                    <label style="position:relative;width:44px;height:24px;cursor:pointer;">
                      <input type="checkbox" checked style="opacity:0;width:0;height:0;" />
                      <span style="position:absolute;inset:0;background:var(--maroon);border-radius:12px;transition:.3s;"></span>
                      <span style="position:absolute;top:3px;left:3px;width:18px;height:18px;background:white;border-radius:50%;transition:.3s;transform:translateX(20px);"></span>
                    </label>
                  </div>
                  <div style="height:1px;background:var(--border-solid);"></div>
                  <div style="display:flex;align-items:center;justify-content:space-between;">
                    <div>
                      <div style="font-size:13.5px;font-weight:500;">SMS Alerts</div>
                      <div style="font-size:11.5px;color:var(--text-light);">Text message notifications</div>
                    </div>
                    <label style="position:relative;width:44px;height:24px;cursor:pointer;">
                      <input type="checkbox" style="opacity:0;width:0;height:0;" />
                      <span style="position:absolute;inset:0;background:#ddd;border-radius:12px;transition:.3s;"></span>
                      <span style="position:absolute;top:3px;left:3px;width:18px;height:18px;background:white;border-radius:50%;transition:.3s;"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- ================================================
           COUPONS SECTION
      ================================================ -->
      <div class="dash-section" id="sec-coupons">
        <div class="page-header">
          <div>
            <div class="page-title">Coupons <span>&amp; Offers</span></div>
            <div class="page-subtitle">3 active coupons available for you</div>
          </div>
        </div>
        <div class="grid-2" style="grid-template-columns:1fr 1fr;">
          <div class="card">
            <div class="card-head"><div class="card-title"><i class="fas fa-tag"></i> Active Coupons</div></div>
            <div class="card-body">
              <div class="coupon-list">
                <div class="coupon-card">
                  <div class="coupon-left"><span>20% OFF</span></div>
                  <div class="coupon-body">
                    <div class="coupon-code">LUXE20</div>
                    <div class="coupon-desc">20% off on Electronics above ₹15,000</div>
                    <div class="coupon-exp">Expires: 31 March 2026</div>
                  </div>
                  <button class="coupon-btn">Copy</button>
                </div>
                <div class="coupon-card">
                  <div class="coupon-left"><span>₹500 OFF</span></div>
                  <div class="coupon-body">
                    <div class="coupon-code">SAVE200</div>
                    <div class="coupon-desc">Flat ₹500 off on orders above ₹2,999</div>
                    <div class="coupon-exp">Expires: 15 April 2026</div>
                  </div>
                  <button class="coupon-btn">Copy</button>
                </div>
                <div class="coupon-card">
                  <div class="coupon-left"><span>FREE SHIP</span></div>
                  <div class="coupon-body">
                    <div class="coupon-code">FREESHIP</div>
                    <div class="coupon-desc">Free shipping on any order — no minimum</div>
                    <div class="coupon-exp">Expires: 30 March 2026</div>
                  </div>
                  <button class="coupon-btn">Copy</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head"><div class="card-title"><i class="fas fa-fire"></i> Flash Deals</div></div>
            <div class="card-body">
              <div style="display:flex;flex-direction:column;gap:14px;">
                <div style="background:linear-gradient(90deg,rgba(128,0,0,0.06),transparent);border:1px solid rgba(128,0,0,0.12);border-radius:12px;padding:16px;">
                  <div style="font-size:10px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:var(--maroon);margin-bottom:6px;">Fashion Sale</div>
                  <div style="font-size:14.5px;font-weight:600;margin-bottom:4px;">Up to 60% off on all Apparel</div>
                  <div style="font-size:12px;color:var(--text-light);">Ends in: <strong style="color:var(--maroon);">2d 14h 32m</strong></div>
                </div>
                <div style="background:linear-gradient(90deg,rgba(201,168,76,0.07),transparent);border:1px solid rgba(201,168,76,0.2);border-radius:12px;padding:16px;">
                  <div style="font-size:10px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:var(--gold);margin-bottom:6px;">Gold Member Deal</div>
                  <div style="font-size:14.5px;font-weight:600;margin-bottom:4px;">Extra 10% off on Furniture</div>
                  <div style="font-size:12px;color:var(--text-light);">Valid for Gold members only</div>
                </div>
                <div style="background:linear-gradient(90deg,rgba(21,101,192,0.06),transparent);border:1px solid rgba(21,101,192,0.12);border-radius:12px;padding:16px;">
                  <div style="font-size:10px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#1565c0;margin-bottom:6px;">Weekend Special</div>
                  <div style="font-size:14.5px;font-weight:600;margin-bottom:4px;">Buy 2, Get 1 Free on Accessories</div>
                  <div style="font-size:12px;color:var(--text-light);">Ends: Sunday midnight</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           LOYALTY SECTION
      ================================================ -->
      <div class="dash-section" id="sec-loyalty">
        <div class="page-header">
          <div>
            <div class="page-title">Loyalty <span>Points</span></div>
            <div class="page-subtitle">Earn &amp; redeem your LUXE reward points</div>
          </div>
        </div>
        <div class="grid-3" style="grid-template-columns:1fr 1.4fr;">
          <div class="card">
            <div class="card-body">
              <div class="loyalty-card">
                <div class="loyalty-top">
                  <div><div class="loy-tier-badge">Gold</div></div>
                  <div><div class="loy-pts">3,840</div><div class="loy-pts-label">Points Balance</div></div>
                </div>
                <div class="loy-prog-label"><span>Gold → Platinum</span><span>3,840 / 5,000</span></div>
                <div class="loy-prog-track"><div class="loy-prog-fill"></div></div>
                <div class="loy-note">Earn <strong>1,160 more points</strong> to unlock Platinum</div>
              </div>
              <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:16px;">
                <div style="text-align:center;padding:14px;background:var(--smoke);border-radius:10px;">
                  <div style="font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:700;color:var(--maroon);">12,400</div>
                  <div style="font-size:11px;color:var(--text-light);">Total Earned</div>
                </div>
                <div style="text-align:center;padding:14px;background:var(--smoke);border-radius:10px;">
                  <div style="font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:700;color:#2e7d32;">8,560</div>
                  <div style="font-size:11px;color:var(--text-light);">Total Redeemed</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-head"><div class="card-title"><i class="fas fa-clock-rotate-left"></i> Points History</div></div>
            <div class="card-body">
              <div class="activity-list">
                <div class="activity-item">
                  <div class="act-dot gold"><i class="fas fa-plus"></i></div>
                  <div class="act-text"><div class="act-title">+220 pts — ProMax 15 Ultra purchase</div><div class="act-time">4 Mar 2026</div></div>
                  <div style="font-weight:700;color:#2e7d32;font-size:13px;">+220</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot red"><i class="fas fa-minus"></i></div>
                  <div class="act-text"><div class="act-title">-500 pts — Redeemed on SonicPro order</div><div class="act-time">20 Feb 2026</div></div>
                  <div style="font-weight:700;color:#c62828;font-size:13px;">-500</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot gold"><i class="fas fa-plus"></i></div>
                  <div class="act-text"><div class="act-title">+430 pts — Velvet Sofa purchase</div><div class="act-time">28 Jan 2026</div></div>
                  <div style="font-weight:700;color:#2e7d32;font-size:13px;">+430</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot maroon"><i class="fas fa-crown"></i></div>
                  <div class="act-text"><div class="act-title">+200 pts — Gold tier bonus reward</div><div class="act-time">1 Jan 2026</div></div>
                  <div style="font-weight:700;color:#2e7d32;font-size:13px;">+200</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot gold"><i class="fas fa-plus"></i></div>
                  <div class="act-text"><div class="act-title">+185 pts — ErgoLux Chair purchase</div><div class="act-time">30 Dec 2025</div></div>
                  <div style="font-weight:700;color:#2e7d32;font-size:13px;">+185</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           WALLET SECTION
      ================================================ -->
      <div class="dash-section" id="sec-wallet">
        <div class="page-header">
          <div>
            <div class="page-title">My <span>Wallet</span></div>
            <div class="page-subtitle">Manage your LUXE wallet balance</div>
          </div>
          <button class="btn-sm btn-primary"><i class="fas fa-plus"></i> Add Money</button>
        </div>
        <div class="grid-3" style="grid-template-columns:1fr 1.5fr;">
          <div class="card">
            <div class="card-body" style="text-align:center;padding:32px 22px;">
              <div style="width:64px;height:64px;background:var(--maroon-glow);border-radius:18px;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:26px;color:var(--maroon);">
                <i class="fas fa-wallet"></i>
              </div>
              <div style="font-size:12px;color:var(--text-light);letter-spacing:0.1em;text-transform:uppercase;margin-bottom:8px;">Available Balance</div>
              <div style="font-family:'Cormorant Garamond',serif;font-size:48px;font-weight:800;color:var(--maroon);line-height:1;">₹2,450</div>
              <div style="font-size:12px;color:var(--text-light);margin-top:8px;margin-bottom:24px;">≈ 2450 LUXE Credits</div>
              <button class="btn-sm btn-primary" style="width:100%;justify-content:center;border-radius:10px;height:44px;">
                <i class="fas fa-arrow-up-right-from-square"></i> Use at Checkout
              </button>
            </div>
          </div>
          <div class="card">
            <div class="card-head"><div class="card-title"><i class="fas fa-receipt"></i> Transaction History</div></div>
            <div class="card-body">
              <div class="activity-list">
                <div class="activity-item">
                  <div class="act-dot green"><i class="fas fa-plus"></i></div>
                  <div class="act-text"><div class="act-title">₹500 added via UPI</div><div class="act-time">5 Mar 2026, 3:22 PM</div></div>
                  <div style="font-weight:700;color:#2e7d32;">+₹500</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot red"><i class="fas fa-minus"></i></div>
                  <div class="act-text"><div class="act-title">₹1,200 used for Order #LX-20411</div><div class="act-time">28 Feb 2026</div></div>
                  <div style="font-weight:700;color:#c62828;">-₹1,200</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot blue"><i class="fas fa-rotate-left"></i></div>
                  <div class="act-text"><div class="act-title">₹899 refund from cancelled order</div><div class="act-time">14 Feb 2026</div></div>
                  <div style="font-weight:700;color:#2e7d32;">+₹899</div>
                </div>
                <div class="activity-item">
                  <div class="act-dot green"><i class="fas fa-plus"></i></div>
                  <div class="act-text"><div class="act-title">₹2,000 added via Debit Card</div><div class="act-time">1 Feb 2026</div></div>
                  <div style="font-weight:700;color:#2e7d32;">+₹2,000</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================================================
           RETURNS SECTION
      ================================================ -->
      <div class="dash-section" id="sec-returns">
        <div class="page-header">
          <div>
            <div class="page-title">Returns <span>&amp; Refunds</span></div>
            <div class="page-subtitle">Manage your return requests and refund status</div>
          </div>
          <button class="btn-sm btn-primary"><i class="fas fa-plus"></i> New Return</button>
        </div>
        <div class="card">
          <div class="card-head"><div class="card-title"><i class="fas fa-rotate-left"></i> Return Requests</div></div>
          <div class="card-body">
            <div class="order-list">
              <div class="order-row">
                <div class="order-img"><i class="fas fa-shirt"></i></div>
                <div class="order-info">
                  <div class="order-name">Royale Linen Blazer — Navy</div>
                  <div class="order-meta">Return #RT-882 · Requested: 12 Feb 2026 · Reason: Wrong Size</div>
                </div>
                <div class="order-price">₹5,499</div>
                <div class="status-pill s-processing"><i class="fas fa-circle"></i> Approved</div>
              </div>
            </div>
            <div style="margin-top:20px;">
              <div style="font-size:13px;font-weight:600;margin-bottom:14px;color:var(--text-mid);">Return Pickup Status</div>
              <div class="track-steps">
                <div class="track-step done"><div class="track-dot"><i class="fas fa-check"></i></div><div class="track-label">Requested</div></div>
                <div class="track-step done"><div class="track-dot"><i class="fas fa-check"></i></div><div class="track-label">Approved</div></div>
                <div class="track-step current"><div class="track-dot"><i class="fas fa-truck"></i></div><div class="track-label">Pickup Scheduled</div></div>
                <div class="track-step"><div class="track-dot"><i class="fas fa-box"></i></div><div class="track-label">Item Received</div></div>
                <div class="track-step"><div class="track-dot"><i class="fas fa-rotate-left"></i></div><div class="track-label">Refunded</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /page-body -->
  </div><!-- /main -->

  <!-- =====================================================
       JAVASCRIPT
  ===================================================== -->
  <script>
    /* --- Section switcher --- */
    function showSection(id, triggerEl) {
      // Hide all sections
      document.querySelectorAll('.dash-section').forEach(s => s.classList.remove('active'));
      document.getElementById('sec-' + id).classList.add('active');

      // Update nav active state
      document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
      if (triggerEl) triggerEl.classList.add('active');

      // Close sidebar on mobile
      if (window.innerWidth <= 860) closeSidebar();

      // Scroll top
      document.querySelector('.main').scrollTo({ top: 0, behavior: 'smooth' });
    }

    /* --- Sidebar toggle --- */
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
      sidebar.classList.toggle('open');
      overlay.classList.toggle('show');
      document.body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
    }

    function closeSidebar() {
      document.getElementById('sidebar').classList.remove('open');
      document.getElementById('overlay').classList.remove('show');
      document.body.style.overflow = '';
    }

    /* --- Tab switching (simple) --- */
    document.querySelectorAll('.tabs .tab').forEach(tab => {
      tab.addEventListener('click', function() {
        this.closest('.tabs').querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });

    /* --- Coupon copy effect --- */
    document.querySelectorAll('.coupon-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const code = this.closest('.coupon-card').querySelector('.coupon-code').textContent;
        this.textContent = 'Copied!';
        this.style.background = 'var(--maroon)';
        this.style.color = 'var(--white)';
        setTimeout(() => {
          this.textContent = 'Copy';
          this.style.background = '';
          this.style.color = '';
        }, 2000);
      });
    });

    /* --- Wishlist remove --- */
    document.querySelectorAll('.wish-remove').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const card = this.closest('.wish-card');
        card.style.opacity = '0';
        card.style.transform = 'scale(0.9)';
        card.style.transition = 'all 0.3s ease';
        setTimeout(() => card.remove(), 300);
      });
    });

    /* --- Toggle switches visual --- */
    document.querySelectorAll('input[type=checkbox]').forEach(chk => {
      chk.addEventListener('change', function() {
        const track = this.nextElementSibling;
        const thumb = track.nextElementSibling;
        if (this.checked) {
          track.style.background = 'var(--maroon)';
          thumb.style.transform = 'translateX(20px)';
        } else {
          track.style.background = '#ddd';
          thumb.style.transform = 'translateX(0)';
        }
      });
    });

    /* --- Sticky sidebar highlight on scroll removed (SPA mode) --- */
  </script>

</body>
</html>