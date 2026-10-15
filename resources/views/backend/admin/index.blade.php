@extends('backend.admin.layout.main')
@push('title')
<title>Admin-Dashboard</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>


            <!-- Row for the cards -->
            <div class="row g-3 justify-content-center text-center">

                <!-- Card 1 -->
                <div class="col-lg-3 col-md-3">
                    <div class="card border-0 shadow-sm bg-info">
                        <div class="card-body">
                            <h6 class="text-muted">Total Orders</h6>
                            <h3 class="fw-bold">1,250</h3>
                            <span class="badge bg-success">+5%</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-3">
                    <div class="card border-0 shadow-sm bg-info">
                        <div class="card-body">
                            <h6 class="text-muted">Total Sale</h6>
                            <h3 class="fw-bold">$12,400</h3>
                            <span class="badge bg-primary">Monthly</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
               <div class="col-lg-3 col-md-3">
                    <div class="card border-0 shadow-sm bg-info">
                        <div class="card-body">
                            <h6 class="text-muted">Total Vendors</h6>
                            <h3 class="fw-bold">42</h3>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </div>
                    </div>
                </div>

                  <!-- Card 4 -->
               <div class="col-lg-3 col-md-3">
                    <div class="card border-0 shadow-sm bg-info">
                        <div class="card-body">
                            <h6 class="text-muted">Total Users</h6>
                            <h3 class="fw-bold">42</h3>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </div>
                    </div>
                </div>

            </div>




            <div class="col-12 mt-4">
                <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                    <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #333;">Recent Orders</h5>
                        <a href="#" class="btn btn-sm text-white px-3"
                            style="background-color: #800000; border-radius: 8px;">View All</a>
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th class="border-0">Order ID</th>
                                    <th class="border-0">Product</th>
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Amount</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Premium Leather Watch</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">Oct 24, 2023</td>
                                    <td class="fw-bold text-dark">$129.00</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2"
                                            style="font-weight: 500;">Delivered</span>
                                    </td>
                                    <td class="text-end">
                                         <a href="{{url('admin/order-details')}}">
                                            <button class="btn btn-light btn-sm border">Details</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">#ORD-8812</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Wireless Earbuds Pro</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">Oct 26, 2023</td>
                                    <td class="fw-bold text-dark">$89.50</td>
                                    <td>
                                        <span class="badge rounded-pill bg-warning-subtle text-warning px-3 py-2"
                                            style="font-weight: 500;">Shipping</span>
                                    </td>
                                    <td class="text-end">
                                        <button class="btn btn-light btn-sm border">Track</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Premium Leather Watch</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">Oct 24, 2023</td>
                                    <td class="fw-bold text-dark">$129.00</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2"
                                            style="font-weight: 500;">Delivered</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{url('vender/order-history')}}">
                                            <button class="btn btn-light btn-sm border">Details</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Premium Leather Watch</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">Oct 24, 2023</td>
                                    <td class="fw-bold text-dark">$129.00</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2"
                                            style="font-weight: 500;">Delivered</span>
                                    </td>
                                    <td class="text-end">
                                         <a href="{{url('vender/order-history')}}">
                                            <button class="btn btn-light btn-sm border">Details</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </main>
    @endsection