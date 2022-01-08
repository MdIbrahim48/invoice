<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>Dashboard Mastering</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin_assets') }}/images/favicon.png">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin_assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- toastr Css-->
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <!-- App Css-->
        <link href="{{ asset('admin_assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="{{ asset('admin_assets')}}/images/logo.png" alt="" height="28"> <span class="logo-txt"></span>
                                        </a>
                                    </div>

                                    @yield('admin_auth_content')

                                    <div class="mt-4 mt-md-5 text-center">
                                        <span>© <script>document.write(new Date().getFullYear())</script>  ALL RIGHTS RESERVED BY Bir Bazar || DEVELOPED BY <i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                                <a target="_blank" href="https://birit.xyz">
                                    BIRIT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7" style="background-color: #f0674c">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            {{-- <div class="bg-overlay"></div> --}}
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            {{-- <div class="row justify-content-center align-items-end">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators auth-carousel carousel-indicators-rounded justify-content-center mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                                    <img src="{{ asset('admin_assets')}}/images/users/avatar-1.jpg" class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                                </button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                                                    <img src="{{ asset('admin_assets')}}/images/users/avatar-2.jpg" class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                                </button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                    <img src="{{ asset('admin_assets')}}/images/users/avatar-3.jpg" class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                                </button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-center text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                        <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident
                                                            imposing change
                                                            on myself. It's a lot more progressing fun than looking back.
                                                            That's why
                                                            I ultricies enim
                                                            at malesuada nibh diam on tortor neaded to throw curve balls.”
                                                        </h4>
                                                        <div class="mt-4 pt-1 pb-5 mb-5">
                                                            <h5 class="font-size-16 text-white">Richard Drews
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Web Designer</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-center text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Our task must be to
                                                            free ourselves by widening our circle of compassion to embrace
                                                            all living
                                                            creatures and
                                                            the whole of quis consectetur nunc sit amet semper justo. nature
                                                            and its beauty.”</h4>
                                                        <div class="mt-4 pt-1 pb-5 mb-5">
                                                            <h5 class="font-size-16 text-white">Rosanna French
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Web Developer</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-center text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                        <h4 class="mt-4 fw-medium lh-base text-white">“I've learned that
                                                            people will forget what you said, people will forget what you
                                                            did,
                                                            but people will never forget
                                                            how donec in efficitur lectus, nec lobortis metus you made them
                                                            feel.”</h4>
                                                        <div class="mt-4 pt-1 pb-5 mb-5">
                                                            <h5 class="font-size-16 text-white">Ilse R. Eaton</h5>
                                                            <p class="mb-0 text-white-50">Manager
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin_assets')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('admin_assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('admin_assets')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('admin_assets')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('admin_assets')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('admin_assets')}}/libs/feather-icons/feather.min.js"></script>

            {{-- toaster --}}
            <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


        <!-- pace js -->
        <script src="{{ asset('admin_assets')}}/libs/pace-js/pace.min.js"></script>

        <script src="{{ asset('admin_assets')}}/js/pages/pass-addon.init.js"></script>

        <script src="{{ asset('admin_assets')}}/js/pages/feather-icon.init.js"></script>
        @yield('admin_scripts')
    </body>

</html>
