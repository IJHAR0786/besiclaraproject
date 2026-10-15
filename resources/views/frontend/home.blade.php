@extends('frontend.layout.main')

@section('title', 'Home')

@section('content')
 <!-- hero section start  -->
<section class="hero-section">
    <div class="hero-container"> 
        <div class="hero-left">
            <span class="hero-badge">Premium Collection 2026</span>
            <h1>
                Discover Luxury <br>
                <span>Shopping Experience</span>
            </h1>
            <p>
                Shop the latest Mobile, Electronics, Fashion & Furniture
                with exclusive deals and premium quality.
            </p>

            <div class="hero-buttons">
                <a href="#" class="btn-primary">Shop Now</a>
                <a href="#" class="btn-outline">Explore Categories</a>
            </div>

            <div class="hero-stats">
                <div>
                    <h3>10K+</h3>
                    <span>Products</span>
                </div>
                <div>
                    <h3>5K+</h3>
                    <span>Happy Customers</span>
                </div>
                <div>
                    <h3>4.9★</h3>
                    <span>Ratings</span>
                </div>
            </div>
        </div>

        <div class="hero-right">
            <div class="glass-card">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"
                     alt="Mobile Product">
                <div class="product-tag">🔥 Trending</div>
            </div>
        </div>
    </div>
</section>
<!-- hero section end  -->

<!--Top deals products section start  -->
 <section class="product-section">

    <div class="section-header">
        <h2>Top Deals Products</h2>
        <p>Explore our premium and trending collection</p>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
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

<!--Recent Viewed products section start  -->
 <section class="product-section">

    <div class="section-header">
        <h2>Recent Viewed products</h2>
        <p>Explore our premium and trending collection</p>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
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
<!-- resently product section end -->

<!--Best of electronic products section start  -->
 <section class="product-section">

    <div class="section-header">
        <h2>Best Of Electronics Products</h2>
        <p>Explore our premium and trending collection</p>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
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
<!-- Best of Electronic products section end -->

<!--Popular products section start  -->
 <section class="product-section">

    <div class="section-header">
        <h2>Popular Categories</h2>
        <p>Explore our premium and trending collection</p>
    </div>

    <div class="product-grid">

        <!-- Product Card -->
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
<!--  popular products section end -->

@endsection