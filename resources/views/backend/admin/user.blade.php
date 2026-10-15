@extends('backend.admin.layout.main')
@push('title')
<title>All Users</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-12 mt-4">
                <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                    <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #333;">All Users</h5>
                        <!-- <a href="#" class="btn btn-sm text-white px-3"
                            style="background-color: #800000; border-radius: 8px;">View All</a> -->
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th class="border-0">Order ID</th>
                                    <th class="border-0">Customer Name</th>
                                    <th class="border-0">Phone No.</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Address</th>
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
                                    <td class="text-muted">+91 5625358965</td>
                                    <td class="text-muted">reju123@gmail.com</td>
                                    <td class="text-muted">
                                        Mumbai, Maharashtra
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-success px-3 py-2"
                                            style="font-weight: 500;">Unblock</span>
                                    </td>
                                    <td class="text-end">

                                        <a href="{{url('vender/order-details')}}" class="btn btn-success"><i
                                                class="fa-solid fa-key"></i></a>
                                        <a href="{{url('vender/order-details')}}" class="btn btn-danger"><i
                                                class="fa-solid fa-ban"></i> </a>
                                    </td>
                                </tr>

                              

                                 <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Ramesh</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">+91 5625358965</td>
                                    <td class="text-muted">reju123@gmail.com</td>
                                    <td class="text-muted">
                                        Mumbai, Maharashtra
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-danger px-3 py-2"
                                            style="font-weight: 500;">block</span>
                                    </td>
                                    <td class="text-end">

                                        <a href="{{url('vender/order-details')}}" class="btn btn-success"><i
                                                class="fa-solid fa-key"></i></a>
                                        <a href="{{url('vender/order-details')}}" class="btn btn-danger"><i
                                                class="fa-solid fa-ban"></i> </a>
                                    </td>
                                </tr>

                                   <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <span>Ramesh</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">+91 5625358965</td>
                                    <td class="text-muted">reju123@gmail.com</td>
                                    <td class="text-muted">
                                        Mumbai, Maharashtra
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-success px-3 py-2"
                                            style="font-weight: 500;">Unblock</span>
                                    </td>
                                    <td class="text-end">

                                        <a href="{{url('vender/order-details')}}" class="btn btn-success"><i
                                                class="fa-solid fa-key"></i></a>
                                        <a href="{{url('vender/order-details')}}" class="btn btn-danger"><i
                                                class="fa-solid fa-ban"></i> </a>
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