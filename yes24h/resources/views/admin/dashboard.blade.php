@extends('admin.layouts.master')

@section('breadcrumb')
    Bảng điều khiển
@endsection

@section('content')
<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Stats -->
       
        <!-- .row -->
        <!-- End stats -->
       
        <!-- .row -->
       
        <!-- .row -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Yearly summary widget -->
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Yearly summary
                        </h4>
                        <ul class="card-actions">
                            <li class="dropdown">
                                <button data-toggle="dropdown" type="button">
                                    <i class="ion-more">
                                    </i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        Profile
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" tabindex="-1">
                                            <span class="badge pull-right">
                                                3
                                            </span>
                                            News
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" tabindex="-1">
                                            <span class="badge pull-right">
                                                1
                                            </span>
                                            Messages
                                        </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li class="dropdown-header">
                                        More
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" tabindex="-1">
                                            Edit Profile..
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .card-actions -->
                    </div>
                    <!-- .card-header -->
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="h6 small text-muted">
                                    Yearly change
                                </p>
                                <p class="h3 m-t-0">
                                    +214.22
                                </p>
                                <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples please check http://www.chartjs.org/docs/ -->
                                <div style="height: 120px;">
                                    <canvas class="js-chartjs-lines4">
                                    </canvas>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p class="h6 small text-muted">
                                    Shares trade
                                </p>
                                <p class="h3 m-t-0">
                                    $28.74M
                                </p>
                                <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples please check http://www.chartjs.org/docs/ -->
                                <div style="height: 120px;">
                                    <canvas class="js-chartjs-lines5">
                                    </canvas>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p class="h6 small text-muted">
                                    Yearly change
                                </p>
                                <p class="h3 m-t-0">
                                    +74%
                                </p>
                                <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples please check http://www.chartjs.org/docs/ -->
                                <div style="height: 120px;">
                                    <canvas class="js-chartjs-lines6">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- .card -->
                <!-- End Yearly summary widget -->
            </div>
            <!-- .col-lg-8 -->
            <!-- Server load Widget -->
            <!-- End Server load Widget // .col-lg-4 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->
</main>
@endsection

@section('javascript')

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/app-custom.js') }}"></script>

    <!-- Page Plugins -->
    <script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/js/pages/index.js') }}"></script>
    <script>
        $(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>

@endsection