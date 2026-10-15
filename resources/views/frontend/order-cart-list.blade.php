@extends('frontend.layout.main')

@section('title', 'My Orders')

@section('content')

<section class="orders-section">

    <div class="orders-container">

        <h2 class="orders-title">My Orders</h2>

        <!-- Order Card 1 -->
        <div class="order-card">
            <div class="order-left">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9" alt="Product">
            </div>

            <div class="order-middle">
                <h4>Premium Smartphone</h4>
                <p><strong>Order ID:</strong> #ORD12345</p>
                <p><strong>Date:</strong> 04 March 2026</p>
                <p class="order-price">₹39,999</p>
            </div>

            <div class="order-right">
                <span class="status delivered">Delivered</span>
                <a href="{{route('ordercheck')}}" class="view-btn">View Details</a>
            </div>
        </div>

        <!-- Order Card 2 -->
        <div class="order-card">
            <div class="order-left">
                <img src="https://images.unsplash.com/photo-1585386959984-a4155223167f" alt="Product">
            </div>

            <div class="order-middle">
                <h4>Wireless Headphones</h4>
                <p><strong>Order ID:</strong> #ORD12346</p>
                <p><strong>Date:</strong> 02 March 2026</p>
                <p class="order-price">₹7,499</p>
            </div>

            <div class="order-right">
                <span class="status pending">Pending</span>
                <a href="#" class="view-btn">Track Order</a>
            </div>
        </div>

        <!-- Order Card 3 -->
        <div class="order-card">
            <div class="order-left">
                <img src="https://images.unsplash.com/photo-1503602642458-232111445657" alt="Product">
            </div>

            <div class="order-middle">
                <h4>Modern Sofa</h4>
                <p><strong>Order ID:</strong> #ORD12347</p>
                <p><strong>Date:</strong> 28 Feb 2026</p>
                <p class="order-price">₹29,999</p>
            </div>

            <div class="order-right">
                <span class="status cancelled">Cancelled</span>
                <a href="#" class="view-btn">Reorder</a>
            </div>
        </div>

    </div>

</section>

<style>
    /* ===========================
   ORDER LIST PAGE
=========================== */

.orders-section {
    padding: 80px 5%;
    background: #f9f9f9;
}

.orders-container {
    max-width: 1100px;
    margin: auto;
}

.orders-title {
    font-size: 32px;
    margin-bottom: 40px;
    color: #800000;
}

/* Order Card */

.order-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: white;
    padding: 25px;
    border-radius: 20px;
    margin-bottom: 25px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.05);
    transition: 0.4s ease;
    flex-wrap: wrap;
}

.order-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(128,0,0,0.15);
}

/* Left */

.order-left img {
    width: 110px;
    border-radius: 15px;
}

/* Middle */

.order-middle {
    flex: 1;
    padding: 0 30px;
}

.order-middle h4 {
    margin-bottom: 10px;
}

.order-middle p {
    margin-bottom: 5px;
    color: #666;
}

.order-price {
    font-size: 18px;
    font-weight: 700;
    color: #800000;
    margin-top: 10px;
}

/* Right */

.order-right {
    text-align: right;
}

.status {
    display: inline-block;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 13px;
    margin-bottom: 15px;
    font-weight: 600;
}

/* Status Colors */

.delivered {
    background: #e6f7ee;
    color: #1a7f37;
}

.pending {
    background: #fff4e5;
    color: #d97706;
}

.cancelled {
    background: #fdecea;
    color: #b91c1c;
}

/* Button */

.view-btn {
    display: inline-block;
    padding: 8px 20px;
    border-radius: 30px;
    text-decoration: none;
    background: linear-gradient(135deg, #800000, #b00000);
    color: white;
    font-size: 14px;
    transition: 0.3s;
}

.view-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(128,0,0,0.3);
}

/* Responsive */

@media (max-width: 768px) {

    .order-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .order-middle {
        padding: 20px 0;
    }

    .order-right {
        text-align: left;
    }
}
</style>
@endsection