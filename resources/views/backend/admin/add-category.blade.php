@extends('backend.admin.layout.main')

@push('title')
<title>Settings</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-4">
            <h4 class="mb-4 fw-bold">Add Category</h4>
            <form action="">


                <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" value="Category Name">
                    </div>
                    <button class="btn text-white px-4" style="background:#800000;border-radius:8px;">
                        Add Category
                    </button>
                </div>
            </form>
        </div>
</div>

</main>
@endsection