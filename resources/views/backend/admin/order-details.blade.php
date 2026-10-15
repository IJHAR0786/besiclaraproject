@extends('backend.admin.layout.main')

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
                     <div class="row">

                        <div class="col-md-6">

                            <h6 class="fw-bold mb-3">Customer Information</h6>

                            <p class="mb-1"> Name: Izahar Ahamad</p>
                            <p class="mb-1">Email: raju123@gmail.com</p>
                            <p class="mb-1">Phone : 5656564543</p>
                            <p class="mb-1">Addres :Flat 201, Galaxy Apartment</p>
                            <p class="mb-1">Andheri East
                            Mumbai, Maharashtra</p>

                        </div>

                        <div class="col-md-6">

                            <h6 class="fw-bold mb-3">Order Summary</h6>
                             <div class="d-flex justify-content-between mb-2">
                                <span>Order Id: </span>
                                <span>001</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Payment Method</span>
                                <span>Cash On Delivery</span>
                            </div>
                              <div class="d-flex justify-content-between mb-2">
                                <span>Payment Status</span>
                                <span class="badge bg-success px-2 "> Completed</span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
                                <span>1499.00</span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Discount</span>
                                <span>5%</span>
                            </div>
                             <div class="d-flex justify-content-between mb-2">
                                <span>Shipping Free</span>
                                <span>Free</span>
                            </div>
                             

                            <hr>

                            <div class="d-flex justify-content-between fw-bold">

                                <span>Total</span>

                                <span>1499.00</span>

                            </div>

                        </div>

                    </div>

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
                                    <th>Status</th>
                                   
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
                                    <td><span class="badge bg-success px-2 "> Completed</span></td>
                                  

                                </tr>

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
                                     <td><span class="badge bg-warning px-2 "> Shipping</span></td>
                                   

                                </tr>

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
                                     <td><span class="badge bg-danger px-2 "> Cancel</span></td>
                                  

                                </tr>
                                

                               

                            </tbody>

                        </table>

                    </div>

                    <hr>

                    <!-- Order Summary -->

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