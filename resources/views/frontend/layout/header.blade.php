<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <title>Luxora</title> -->
   <title>@yield('title')</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>

<div class="top-bar">
    Free Shipping on Orders Above ₹999 | Luxury Deals Available Now ✨
</div>

<header id="header">
    <div class="nav-container">

        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>

        <div class="logo">LUXORA</div>

        <nav class="nav-menu" id="navMenu">
            <a href="{{route ('home')}}">Home</a>
            <a href="{{route ('mobile')}}">Mobile</a>
            <a href="#">Electronics</a>
            <a href="#">Fashion</a>
            <a href="#">Furniture</a>
            <a href="#">Deals</a>
            <a href="#">Contact</a>
        </nav>

        <div class="header-right">

            <div class="search-box">
                <input type="text" placeholder="Search products...">
                <i class="fas fa-search"></i>
            </div>

            <div class="icon">
                <i class="far fa-heart"></i>
            </div>

            <a href="{{route('order-product-list')}}">
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge">3</span>
            </div>
            </a>

            <a href="{{url('login')}}">
            <button class="login-btn">Login / Sign Up</button>
            </a>
        </div>

    </div>
</header>