@extends('frontend.layout.main')

@section('title', 'Categories')

@section('content')

<!--Top deals products section start  -->
 <section class="product-section">

    <div class="section-header">
        <h2>Categories</h2>
        <p>Explore our premium and trending collection</p>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
         <a href="{{route('subcategories')}}">
        <div class="product-card">
            <div class="product-img">
                <span class="discount">-20%</span>
                <img src="frontend/assets/images/mobile/opp.jpg" alt="Product">
                <div class="wishlist"><i class="fas fa-heart"></i></div>
            </div>

            <div class="product-info">
                <h4>Premium Smartphone</h4>
                <div class="rating">
                    ★★★★★
                </div>
                <div class="price">
                    <span class="new-price">₹39,999</span>
                    <span class="old-price">₹49,999</span>
                </div>
                <button class="cart-btn">Add to Cart</button>
            </div>
        </div>
        </a>

        <!-- Product 2 -->
        <div class="product-card">
            <div class="product-img">
                <span class="discount">-15%</span>
                <img src="frontend/assets/images/electronic/hea1.jpg" alt="Product">
                <div class="wishlist"><i class="fas fa-heart"></i></div>
            </div>

            <div class="product-info">
                <h4>Wireless Headphones</h4>
                <div class="rating">★★★★☆</div>
                <div class="price">
                    <span class="new-price">₹7,499</span>
                    <span class="old-price">₹8,999</span>
                </div>
                <button class="cart-btn">Add to Cart</button>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-img">
                <span class="discount">-30%</span>
                <img src="frontend/assets/images/mobile/wat2.jpg" alt="Product">
                <div class="wishlist"><i class="fas fa-heart"></i></div>
            </div>

            <div class="product-info">
                <h4>Luxury Watch</h4>
                <div class="rating">★★★★★</div>
                <div class="price">
                    <span class="new-price">₹12,999</span>
                    <span class="old-price">₹18,999</span>
                </div>
                <button class="cart-btn">Add to Cart</button>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <div class="product-img">
                <span class="discount">-25%</span>
                <img src="frontend/assets/images/furniture/sho1.jpg" alt="Product">
                <div class="wishlist"><i class="fas fa-heart"></i></div>
            </div>

            <div class="product-info">
                <h4>Modern Sofa</h4>
                <div class="rating">★★★★☆</div>
                <div class="price">
                    <span class="new-price">₹29,999</span>
                    <span class="old-price">₹39,999</span>
                </div>
                <button class="cart-btn">Add to Cart</button>
            </div>
        </div>

    </div>

</section>
<!-- products section end -->
@endsection