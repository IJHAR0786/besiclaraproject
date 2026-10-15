@extends('backend.vender.layout.main')

@push('title')
<title>Vendor Profile</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">

            <h4 class="mb-4 fw-bold">Vendor Profile</h4>

            <form>

                <div class="row g-4">

                    <!-- LEFT SIDE -->
                    <div class="col-md-6">

                        <!-- BASIC INFO -->
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-header bg-white fw-bold">Basic Information</div>

                            <div class="card-body text-center">

                                <img src="https://i.pravatar.cc/120" class="rounded-circle mb-2" width="90" height="90">

                                <div>
                                    <button class="btn btn-light btn-sm border mb-3">
                                        Upload Image
                                    </button>
                                </div>

                                <div class="mb-3 text-start">
                                    <label class="form-label">Identification Number</label>
                                    <input type="text" class="form-control" placeholder="PAN / Aadhar">
                                </div>

                                <div class="mb-3 text-start">
                                    <label class="form-label">Business Name</label>
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>

                            </div>
                        </div>

                        <!-- BUSINESS INFO -->
                        <div class="card shadow-sm border-0 rounded-3 mt-4">
                            <div class="card-header bg-white fw-bold">Business Information</div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Business Type</label>
                                    <select class="form-select">
                                        <option selected>Select Type</option>
                                        <option>Partnership</option>
                                        <option>Corporation</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">GST Number</label>
                                    <input type="text" class="form-control" placeholder="GST Number">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Business Category</label>
                                    <select class="form-select">
                                        <option selected>Select Category</option>
                                        <option>Electronics</option>
                                        <option>Fashion</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- RIGHT SIDE -->
                    <div class="col-md-6">

                        <!-- USER INFO -->
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-header bg-white fw-bold">User Information</div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>

                            </div>
                        </div>

                        <!-- PAYMENT INFO -->
                        <div class="card shadow-sm border-0 rounded-3 mt-4">
                            <div class="card-header bg-white fw-bold">Payment Information</div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Bank Account No</label>
                                    <input type="text" class="form-control" placeholder="Account Number">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Preferred Payment Method</label>
                                    <select class="form-select">
                                        <option selected>Select Method</option>
                                        <option>Bank Transfer</option>
                                        <option>UPI</option>
                                        <option>E-Wallet</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- BUTTON -->
                <div class="text-end mt-4">
                    <button class="btn px-4 text-white" style="background:#800000; border-radius:8px;">
                        Save Profile
                    </button>
                </div>

            </form>

        </div>
    </main>


@endsection