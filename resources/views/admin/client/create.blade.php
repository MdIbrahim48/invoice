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
                            <li class="breadcrumb-item"><a href="{{ route('admin.client.index') }}">All Client</a></li>
                            <li class="breadcrumb-item active">Client</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.client.index') }}" class="mb-sm-0 font-size-18 btn btn-primary">All Client</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">Add Client</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <form method="post" action="{{ route('admin.client.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" required/>
                                                        @error('name')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">User name</label>
                                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Enter User Name" required/>
                                                        @error('username')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter Email" required/>
                                                        @error('email')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required/>
                                                        @error('password')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Confirm password" required/>
                                                        @error('password_confirmation')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Phone</label>
                                                        <input type="number" name="phone" class="form-control" placeholder="Enter phone"/>
                                                        @error('phone')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Shop name</label>
                                                        <input type="text" name="shop_name" class="form-control" value="{{old('shop_name')}}" placeholder="Enter shop Name"/>
                                                        @error('shop_name')
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

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Address</label>
                                                        <textarea class="form-control" name="address" id="" cols="40" rows="4">{{ old('address') }}</textarea>
                                                         @error('address')
                                                            <span class="text text-danger">{{$message}}</span>
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
