@extends('backend.user.layout.main')

@push('title')
<title>Settings</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4 mt-4">

            <h4 class="mb-4 fw-bold">Account Settings</h4>

            <div class="row">

                <!-- PROFILE SETTINGS -->

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">

                        <div class="card-header bg-white border-0 p-4">
                            <h6 class="mb-0 fw-bold">Profile Information</h6>
                        </div>

                        <div class="card-body p-4">

                            <form>

                                <div class="text-center mb-4">

                                    <img src="https://i.pravatar.cc/120"
                                        style="width:90px;height:90px;border-radius:50%;">

                                    <br>

                                    <button class="btn btn-light btn-sm mt-2 border">
                                        Change Photo
                                    </button>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" value="Izahar Ahamad">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="example@email.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+91 9876543210">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control">Mumbai, Maharashtra</textarea>
                                </div>

                                <button class="btn text-white px-4" style="background:#800000;border-radius:8px;">
                                    Update Profile
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

                <!-- PASSWORD SETTINGS -->

                <div class="col-md-6">

                    <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">

                        <div class="card-header bg-white border-0 p-4">
                            <h6 class="mb-0 fw-bold">Change Password</h6>
                        </div>

                        <div class="card-body p-4">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <button class="btn text-white px-4" style="background:#800000;border-radius:8px;">
                                    Update Password
                                </button>

                            </form>

                        </div>

                    </div>

                    <!-- NOTIFICATION SETTINGS -->

                    <div class="card border-0 shadow-sm" style="border-radius:12px;">

                        <div class="card-header bg-white border-0 p-4">
                            <h6 class="mb-0 fw-bold">Notification Settings</h6>
                        </div>

                        <div class="card-body p-4">

                            <div class="form-check form-switch mb-3">

                                <input class="form-check-input" type="checkbox" checked>

                                <label class="form-check-label">
                                    Email Notifications
                                </label>

                            </div>

                            <div class="form-check form-switch mb-3">

                                <input class="form-check-input" type="checkbox" checked>

                                <label class="form-check-label">
                                    Order Updates
                                </label>

                            </div>

                            <div class="form-check form-switch">

                                <input class="form-check-input" type="checkbox">

                                <label class="form-check-label">
                                    Promotional Offers
                                </label>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>
    @endsection