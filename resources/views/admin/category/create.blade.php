@extends('layouts.admin.admin_app')
@section('admin_content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">All Expense Category</a></li>
                            <li class="breadcrumb-item active">Expense Category</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.category.index') }}" class="mb-sm-0 font-size-18 btn btn-primary">All Expense Category</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">Add Expense Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <form method="post" action="{{ route('admin.category.store') }}">
                                                @csrf
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter Title" required/>
                                                        @error('title')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option value>---Select Status---</option>
                                                            <option value="Active">Active</option>
                                                            <option value="InActive">InActive</option>
                                                        </select>
                                                        @error('status')
                                                            <span class="text text-danger">{{ $message }}</span>
                                                        @enderror
                                                     </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

    @section('admin_scripts')
        @if (Session::has('alert-success'))
        <script>
            toastr.success("{!! Session::get('alert-success') !!}");
        </script>
        @endif
    @endsection

@endsection
