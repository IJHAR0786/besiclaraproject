@extends('backend.admin.layout.main')
@push('title')
<title>Order History</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-12 mt-4">
                <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                    <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #333;">Orders History</h5>
                        <!-- <a href="#" class="btn btn-sm text-white px-3"
                            style="background-color: #800000; border-radius: 8px;">View All</a> -->
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th class="border-0">Order ID</th>
                                    <th class="border-0">Customer Name</th>
                                    <th class="border-0">Total</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                     <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Ramesh</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">25.00</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2"
                                            style="font-weight: 500;">Delivered</span>
                                    </td>
                                    <td class="text-end">
                                        <!-- <a href="{{url('order-details')}}"class="btn btn-primary"><i class="fa-solid fa-truck"></i> </a>
                                        <a href="{{url('order-details')}}"class="btn  btn-success"><i class="fa-solid fa-check"></i> </a> -->
                                        <a href="{{url('admin/order-details')}}"class="btn btn-warning"><i class="fa-solid fa-eye"></i> </a>
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