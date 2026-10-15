@extends('backend.admin.layout.main')

@push('title')
<title>Category</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4 mt-4">

            <div class="col-12 mt-4">
                <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                    <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold" style="color: #333;">All Category</h5>
                        <!-- <a href="#" class="btn btn-sm text-white px-3"
                            style="background-color: #800000; border-radius: 8px;">View All</a> -->
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th class="border-0"> Sr No.</th>
                                    <th class="border-0"> Category Name</th>
                                    <th class="border-0 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="fw-bold">#ORD-7721</td>
                                    <td class="text-muted">Apple</td>
                                    <td class="text-end">

                                        <a class="btn btn-primary" href="{{url('admin/update-category')}}" role="button"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger" href="#" role="button"> <i
                                                class="fa-solid fa-trash"></i></a>


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