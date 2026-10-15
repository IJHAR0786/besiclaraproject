@extends('frontend.layout.main')

@section('title', 'Checkout')

@section('content')

<section class="checkout-section">

    <div class="checkout-container">

        <!-- LEFT SIDE - BILLING DETAILS -->
        <div class="billing-details">

            <h2>Billing Details</h2>

            <form action="#" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" required>
                        <label>First Name</label>
                    </div>

                    <div class="form-group">
                        <input type="text" required>
                        <label>Last Name</label>
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" required>
                    <label>Email Address</label>
                </div>

                <div class="form-group">
                    <input type="text" required>
                    <label>Phone Number</label>
                </div>

                <div class="form-group">
                    <input type="text" required>
                    <label>Street Address</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" required>
                        <label>City</label>
                    </div>

                    <div class="form-group">
                        <input type="text" required>
                        <label>Postal Code</label>
                    </div>
                </div>

            </form>

        </div>

        <!-- RIGHT SIDE - ORDER SUMMARY -->
        <div class="order-summary">

            <h2>Your Order</h2>

            <div class="summary-item">
                <span>Premium Smartphone</span>
                <span>₹39,999</span>
            </div>

            <div class="summary-item">
                <span>Wireless Headphones</span>
                <span>₹7,499</span>
            </div>

            <div class="summary-item">
                <span>Shipping</span>
                <span>₹499</span>
            </div>

            <hr>

            <div class="summary-total">
                <span>Total</span>
                <span>₹47,997</span>
            </div>

            <!-- Coupon -->
            <div class="coupon-box">
                <input type="text" placeholder="Coupon Code">
                <button>Apply</button>
            </div>

            <!-- Payment Methods -->
            <div class="payment-method">
                <h4>Payment Method</h4>

                <label>
                    <input type="radio" name="payment" checked>
                    Cash on Delivery
                </label>

                <label>
                    <input type="radio" name="payment">
                    Credit / Debit Card
                </label>

                <label>
                    <input type="radio" name="payment">
                    UPI / Net Banking
                </label>
            </div>

            <!-- Place Order Button -->
            <button class="place-order-btn">
                Place Order
            </button>

        </div>

    </div>

</section>
<style>
    /* ===========================
   CHECKOUT PAGE
=========================== */

.checkout-section {
    padding: 80px 5%;
    background: #f9f9f9;
}

.checkout-container {
    max-width: 1300px;
    margin: auto;
    display: flex;
    gap: 50px;
    flex-wrap: wrap;
}

/* Billing Details */

.billing-details {
    flex: 1.5;
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
}

.billing-details h2 {
    margin-bottom: 30px;
    color: #800000;
}

.form-row {
    display: flex;
    gap: 20px;
}

.form-group {
    position: relative;
    margin-bottom: 25px;
    flex: 1;
}

.form-group input {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: 1px solid #ddd;
    outline: none;
    background: transparent;
    transition: 0.3s;
}

.form-group label {
    position: absolute;
    top: 14px;
    left: 15px;
    font-size: 14px;
    color: #777;
    background: white;
    padding: 0 5px;
    transition: 0.3s;
    pointer-events: none;
}

.form-group input:focus {
    border-color: #800000;
}

.form-group input:focus + label,
.form-group input:valid + label {
    top: -8px;
    font-size: 12px;
    color: #800000;
}

/* Order Summary */

.order-summary {
    flex: 1;
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
}

.order-summary h2 {
    margin-bottom: 25px;
    color: #800000;
}

.summary-item,
.summary-total {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    color: #555;
}

.summary-total {
    font-size: 18px;
    font-weight: 700;
    color: #800000;
}

/* Coupon */

.coupon-box {
    display: flex;
    margin: 20px 0;
}

.coupon-box input {
    flex: 1;
    padding: 10px;
    border-radius: 8px 0 0 8px;
    border: 1px solid #ddd;
    outline: none;
}

.coupon-box button {
    padding: 10px 20px;
    border: none;
    background: #800000;
    color: white;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
}

/* Payment */

.payment-method {
    margin-top: 20px;
}

.payment-method h4 {
    margin-bottom: 10px;
}

.payment-method label {
    display: block;
    margin-bottom: 10px;
    cursor: pointer;
}

/* Button */

.place-order-btn {
    width: 100%;
    padding: 15px;
    margin-top: 25px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(135deg, #800000, #b00000);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.place-order-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(128,0,0,0.3);
}

/* Responsive */

@media (max-width: 992px) {
    .checkout-container {
        flex-direction: column;
    }

    .form-row {
        flex-direction: column;
    }
}
</style>
@endsection