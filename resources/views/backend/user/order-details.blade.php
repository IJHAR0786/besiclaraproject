@extends('backend.user.layout.main')

@push('title')
<title>Order Details</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4 mt-4">

            <div class="card border-0 shadow-sm" style="border-radius:12px;">
                <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">

                    <h5 class="fw-bold mb-0">Order Details</h5>

                    <span class="badge bg-success px-3 py-2">Delivered</span>

                </div>

                <div class="card-body">

                    <!-- Order Info -->

                    <div class="row mb-4">

                        <div class="col-md-4">
                            <h6 class="text-muted">Order ID</h6>
                            <p class="fw-bold">#ORD-7721</p>
                        </div>

                        <div class="col-md-4">
                            <h6 class="text-muted">Order Date</h6>
                            <p>Oct 24, 2023</p>
                        </div>

                        <div class="col-md-4">
                            <h6 class="text-muted">Payment Method</h6>
                            <p>Credit Card</p>
                        </div>

                    </div>

                    <hr>

                    <!-- Product List -->

                    <h6 class="fw-bold mb-3">Products</h6>

                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead class="text-muted">

                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center gap-3">

                                            <img src="https://via.placeholder.com/60" style="border-radius:8px">

                                            <span>Premium Leather Watch</span>

                                        </div>
                                    </td>

                                    <td>$129</td>

                                    <td>1</td>

                                    <td class="fw-bold">$129</td>

                                </tr>

                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center gap-3">

                                            <img src="https://via.placeholder.com/60" style="border-radius:8px">

                                            <span>Wireless Earbuds Pro</span>

                                        </div>
                                    </td>

                                    <td>$89</td>

                                    <td>1</td>

                                    <td class="fw-bold">$89</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <hr>

                    <!-- Order Summary -->

                    <div class="row">

                        <div class="col-md-6">

                            <h6 class="fw-bold mb-3">Shipping Address</h6>

                            <p class="mb-1">Izahar Ahamad</p>
                            <p class="mb-1">Flat 201, Galaxy Apartment</p>
                            <p class="mb-1">Andheri East</p>
                            <p>Mumbai, Maharashtra</p>

                        </div>

                        <div class="col-md-6">

                            <h6 class="fw-bold mb-3">Order Summary</h6>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
                                <span>$218</span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Shipping</span>
                                <span>$10</span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Tax</span>
                                <span>$5</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between fw-bold">

                                <span>Total</span>

                                <span>$233</span>

                            </div>

                        </div>

                    </div>

                    <hr>

                    <!-- Order Timeline -->

                    <h6 class="fw-bold mb-3">Order Status</h6>

                    <div class="d-flex gap-4 flex-wrap">

                        <div class="text-center">

                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="fa fa-check"></i>
                            </div>

                            <p class="small mt-2">Order Placed</p>

                        </div>

                        <div class="text-center">

                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="fa fa-check"></i>
                            </div>

                            <p class="small mt-2">Packed</p>

                        </div>

                        <div class="text-center">

                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="fa fa-truck"></i>
                            </div>

                            <p class="small mt-2">Shipped</p>

                        </div>

                        <div class="text-center">

                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="fa fa-home"></i>
                            </div>

                            <p class="small mt-2">Delivered</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>
    @endsection