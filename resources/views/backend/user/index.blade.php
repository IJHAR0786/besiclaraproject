@extends('backend.user.layout.main')
@push('title')
<title>User-Dashboard</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body mx-auto">
                            <img src="{{asset('dashboard/assets/img/user.jpg')}}" alt=""
                                style="width:200px;border-radius:100px;">
                        </div>
                        <div class="mb-2">
                            <h5 class="text-center">Izahar Hashami</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card border-0 shadow-sm mb-4"
                        style="border-top: 4px solid #800000 !important; border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-light p-2 rounded-circle me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#800000"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div>
                                <h5 class="card-title mb-0 fw-bold" style="color: #333;">Billing Address</h5>
                            </div>

                            <div class="text-muted" style="line-height: 1.6;">
                                <p class="mb-1"><strong class="text-dark">John Doe</strong></p>
                                <p class="mb-1">123 Business Avenue, Suite 450</p>
                                <p class="mb-1">New York, NY 10001</p>
                                <p class="mb-3">United States</p>

                                <div class="small border-top pt-3">
                                    <p class="mb-1"><i class="bi bi-telephone"></i> +1 (555) 000-1234</p>
                                    <p class="mb-0"><i class="bi bi-envelope"></i> john.doe@email.com</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="#" class="btn btn-sm btn-outline-secondary px-3 rounded-pill">Edit Address</a>
                            </div>
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
                                        <a href="{{url('order-history')}}">
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
                                        <a href="{{url('order-history')}}">
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
                                        <a href="{{url('order-history')}}">
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