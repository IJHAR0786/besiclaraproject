@extends('backend.vender.layout.main')

@push('title')
<title>Settings</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4 mt-4">

            <h4 class="mb-4 fw-bold">Add Products</h4>

            <div class="row">

                <!-- PROFILE SETTINGS -->

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">

                        <div class="card-header bg-white border-0 p-4">
                            <h6 class="mb-0 fw-bold">Products Information</h6>
                        </div>

                        <div class="card-body p-4">

                            <form>

                                <div class="text-center mb-4">

                                    <img src="https://i.pravatar.cc/120"
                                        style="width:90px;height:90px;border-radius:50%;">

                                    <br>

                                    <button class="btn btn-light btn-sm mt-2 border">
                                        Products Image
                                    </button>

                                </div>

                             


                        </div>

                    </div>

                </div>

                <!-- PASSWORD SETTINGS -->

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">

                        

                       

                             <div class="mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" class="form-control" value="Oppo">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Price</label>
                                    <input type="text" class="form-control" value="25 $">
                                </div>

                                    <div class="mb-3">
                                    <label class="form-label">Product Category</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose products category</option>
                                        <option value="1">Oppo</option>
                                        <option value="2">Vivo</option>
                                        <option value="3">Apple</option>
                                        <option value="3">Nothing</option>
                                        <option value="3">Motorella</option>
                                        <option value="3">Redmi</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Stock Quantity</label>
                                    <input type="text" class="form-control" value="20 Pcs">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Products Description</label>
                                    <textarea type="text" class="form-control"
                                        value="Fill Product Description..."></textarea>
                                </div>

                                <button class="btn text-white px-4" style="background:#800000;border-radius:8px;">
                                    Publish Product
                                </button>

                            </form>

                     

                    </div>

                    <!-- NOTIFICATION SETTINGS -->

                </div>

            </div>

        </div>

    </main>
    @endsection