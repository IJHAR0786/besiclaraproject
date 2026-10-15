@extends('frontend.layout.main')

@section('title', 'Product Details')

@section('content')

<section class="product-details-section">
    <div class="details-container">

        <!-- LEFT SIDE - IMAGE GALLERY -->
        <div class="product-gallery">

            <div class="main-image">
                <span class="discount-badge">-20%</span>
                <img id="mainProductImage" src="frontend/assets/images/mobile/opp.jpg" alt="Product">
            </div>

            <div class="thumbnail-images">
                <img src="frontend/assets/images/mobile/opp.jpg" onclick="changeImage(this)">
                <img src="frontend/assets/images/mobile/opp.jpg" onclick="changeImage(this)">
                <img src="frontend/assets/images/mobile/opp.jpg" onclick="changeImage(this)">
            </div>

        </div>

        <!-- RIGHT SIDE - PRODUCT INFO -->
        <div class="product-info-details">

            <h1>Premium Smartphone 2026</h1>

            <div class="rating">
                ★★★★★ <span>(4.9 Reviews)</span>
            </div>

            <div class="price-section">
                <span class="new-price">₹39,999</span>
                <span class="old-price">₹49,999</span>
            </div>

            <p class="product-description">
                Experience ultra-fast performance with cutting-edge technology.
                Premium build quality, stunning display, and powerful battery life.
            </p>

            <!-- Quantity -->
            <div class="quantity-box">
                <button onclick="decreaseQty()">-</button>
                <input type="text" id="quantity" value="1">
                <button onclick="increaseQty()">+</button>
            </div>

            <!-- Buttons -->
            <div class="details-buttons">
                <button class="add-cart-btn">Add to Cart</button>
                <button class="buy-now-btn">Buy Now</button>
            </div>

            <div class="key-features ">
                <h3>Key Features</h3>
                <ul class="features-list">
                    <li>
                        <span class="icon">🚀</span>
                        <div class="text"><strong>Octa-Core</strong> Processor</div>
                    </li>

                    <li>
                        <span class="icon">⚡</span>
                        <div class="text"><strong>8GB RAM</strong> LPDDR4X</div>
                    </li>

                    <li>
                        <span class="icon">📱</span>
                        <div class="text"><strong>6.7" AMOLED</strong> Display</div>
                    </li>

                    <li>
                        <span class="icon">🔌</span>
                        <div class="text"><strong>33W Fast</strong> Charging</div>
                    </li>
                </ul>
                <ul class="features-list">
                    <li>
                        <span class="icon">☝️</span>
                        <div class="text"><strong>Side-Fingerprint</strong> Sensor</div>
                    </li>

                    <li>
                        <span class="icon">📶</span>
                        <div class="text"><strong>5G Ready</strong> Network</div>
                    </li>

                    <li>
                        <span class="icon">🔊</span>
                        <div class="text"><strong>Dual Stereo</strong> Speakers</div>
                    </li>

                    <li>
                        <span class="icon">🤖</span>
                        <div class="text"><strong>Android 14</strong> Latest OS</div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>
<section class="product-description-section">

    <div class="tabs">

        <button class="tab-btn active" onclick="openTab(event, 'description')">
            Description
        </button>

        <button class="tab-btn" onclick="openTab(event, 'specifications')">
            Specifications
        </button>

        <button class="tab-btn" onclick="openTab(event, 'reviews')">
            Reviews
        </button>

    </div>

    <!-- Description -->
    <div id="description" class="tab-content active">
        <h3>Product Description</h3>
        <p>
            This premium smartphone is designed with cutting-edge technology
            and elegant craftsmanship. Featuring a high-resolution display,
            ultra-fast processor, and long-lasting battery life, it offers a
            seamless performance experience.
        </p>

        <p>
            Built with a premium metal finish and advanced AI camera system,
            this device is perfect for photography lovers, gamers, and
            professionals.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quasi voluptatum laborum accusantium
            consequatur officia, facere odio aliquam vitae quisquam accusamus vel, minima atque perspiciatis perferendis
            sit cum. Ad, fugiat?
            Officiis qui nostrum, minus rem atque quisquam a in doloribus, commodi repudiandae nam necessitatibus eius
            nisi facere sequi libero magnam ut optio! Necessitatibus ex est cum iusto sed distinctio harum?</p>
    </div>

    <!-- Specifications -->
    <div id="specifications" class="tab-content">
        <h3>Technical Specifications</h3>

        <table class="spec-table">
            <tr>
                <td>Display</td>
                <td>6.7" AMOLED Full HD+</td>
            </tr>
            <tr>
                <td>Processor</td>
                <td>Octa-Core 3.2GHz</td>
            </tr>
            <tr>
                <td>RAM</td>
                <td>8GB</td>
            </tr>
            <tr>
                <td>Storage</td>
                <td>128GB</td>
            </tr>
            <tr>
                <td>Battery</td>
                <td>5000mAh Fast Charging</td>
            </tr>
        </table>
    </div>

    <!-- Reviews -->
    <div id="reviews" class="tab-content">
        <h3>Customer Reviews</h3>

        <div class="review-item">
            <h4>⭐⭐⭐⭐⭐</h4>
            <p>Amazing performance and premium quality! Totally worth it.</p>
        </div>

        <div class="review-item">
            <h4>⭐⭐⭐⭐</h4>
            <p>Battery life is impressive and camera quality is excellent.</p>
        </div>

    </div>

</section>


<script>
function openTab(evt, tabName) {
    let contents = document.querySelectorAll(".tab-content");
    let buttons = document.querySelectorAll(".tab-btn");

    contents.forEach(content => content.classList.remove("active"));
    buttons.forEach(btn => btn.classList.remove("active"));

    document.getElementById(tabName).classList.add("active");
    evt.currentTarget.classList.add("active");
}
</script>

<style>
/* ===========================
   PRODUCT DESCRIPTION TABS
=========================== */

.product-description-section {
    padding: 0px 0%;
    background: #ffffff;
    max-width: 1200px;
    margin: auto;
}

/* Tabs */

.tabs {
    display: flex;
    gap: 20px;
    border-bottom: 2px solid #eee;
    margin-bottom: 40px;
}

.tab-btn {
    padding: 10px 25px;
    background: transparent;
    border: none;
    font-weight: 600;
    cursor: pointer;
    position: relative;
    color: #555;
    transition: 0.3s;
}

.tab-btn::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0%;
    height: 3px;
    background: #800000;
    transition: 0.3s ease;
}

.tab-btn.active {
    color: #800000;
}

.tab-btn.active::after {
    width: 100%;
}

/* Tab Content */

.tab-content {
    display: none;
    animation: fadeIn 0.4s ease-in-out;
}

.tab-content.active {
    display: block;
}

.tab-content h3 {
    margin-bottom: 20px;
    color: #800000;
}

.tab-content p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 15px;
}

/* Specification Table */

.spec-table {
    width: 100%;
    border-collapse: collapse;
}

.spec-table td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

.spec-table td:first-child {
    font-weight: 600;
    color: #333;
}

/* Reviews */

.review-item {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 15px;
    margin-bottom: 20px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

/* Animation */

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */

@media (max-width: 768px) {
    .tabs {
        flex-wrap: wrap;
    }
}
</style>


<style>
/* ===========================
   PRODUCT DETAILS PAGE
=========================== */

.product-details-section {
    padding: 80px 5%;
    background: #f9f9f9;
}

.details-container {
    max-width: 1300px;
    margin: auto;
    display: flex;
    gap: 60px;
    flex-wrap: wrap;
}

/* Gallery */

.product-gallery {
    flex: 1;
}

.main-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
}

.main-image img {
    width: 100%;
    height: 450px;
    transition: 0.4s ease;
}

.main-image:hover img {
    transform: scale(1.05);
}

.discount-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #800000;
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
}

/* Thumbnails */

.thumbnail-images {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.thumbnail-images img {
    width: 90px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.thumbnail-images img:hover {
    transform: scale(1.1);
}

/* Product Info */

.product-info-details {
    flex: 1;
}

.product-info-details h1 {
    font-size: 36px;
    margin-bottom: 15px;
}

.rating {
    color: gold;
    margin-bottom: 15px;
}

.rating span {
    color: #777;
    margin-left: 10px;
}

.price-section {
    margin-bottom: 20px;
}

.new-price {
    font-size: 28px;
    font-weight: 700;
    color: #800000;
    margin-right: 15px;
}

.old-price {
    text-decoration: line-through;
    color: #aaa;
}

.product-description {
    color: #555;
    margin-bottom: 25px;
}

/* Quantity */

.quantity-box {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
}

.quantity-box button {
    width: 35px;
    height: 35px;
    border: none;
    background: #800000;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

.quantity-box input {
    width: 50px;
    text-align: center;
    border: 1px solid #ddd;
    height: 35px;
}

/* Buttons */

.details-buttons {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.add-cart-btn {
    padding: 12px 30px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(135deg, #800000, #b00000);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.add-cart-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(128, 0, 0, 0.3);
}

.buy-now-btn {
    padding: 12px 30px;
    border-radius: 30px;
    border: 2px solid #800000;
    background: white;
    color: #800000;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.buy-now-btn:hover {
    background: #800000;
    color: white;
}

/* Features */

.features-list {
    display: flex;
    list-style: none;
    padding: 10px;
    color: #555;
}

.key-features {
    padding: 10px;
}

.features-list li {
    margin-bottom: 10px;
    padding-left: 15px;
}

/* Responsive */

@media (max-width: 992px) {
    .details-container {
        flex-direction: column;
    }

    .product-info-details h1 {
        font-size: 28px;
    }
}
</style>
<script>
function changeImage(element) {
    document.getElementById("mainProductImage").src = element.src;
}

function increaseQty() {
    let qty = document.getElementById("quantity");
    qty.value = parseInt(qty.value) + 1;
}

function decreaseQty() {
    let qty = document.getElementById("quantity");
    if (qty.value > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
}
</script>


@endsection