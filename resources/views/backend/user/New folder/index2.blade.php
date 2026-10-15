<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LUXE — My Account Dashboard</title>

  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

 
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