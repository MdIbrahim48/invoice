@extends('layouts.frontend.frontend_app')
@section('frontend_content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Welcome !</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Super Admin</h5>
                                <h6 class="mb-3">
                                    {{-- <span>{{ $superAdmin }}</span> --}}
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-user-shield" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
    
        </div><!-- end row-->
    </div>
    <!-- container-fluid -->
</div>
@endsection
