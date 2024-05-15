<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay Admin Dashboard</title>
    <Style>        
    .mcst{
        margin-top: -59% !important;
    }
    </Style>
</head>

<body>

@include("admin.adminnavbar")
    
<!--  Content Area Starts  -->
<div id="content NewAdjustClass" class="main-content mcst">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('login') }}">Dashboards</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                        <li class="nav-item more-dropdown">
                            <div class="input-group input-group-sm">
                                <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary" id="basic-addon2">
                                        <i class="lar la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item more-dropdown">
                            <a href="javascript: void(0);" data-original-title="Reload Data" data-placement="bottom" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-sync"></i>
                            </a>
                        </li>
                        <li class="nav-item custom-dropdown-icon">
                            <a href="javascript: void(0);" data-original-title="Filter" data-placement="bottom" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-filter"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);">Filter 1</a>
                                <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);">Filter 2</a>
                                <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);">Filter 3</a>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-primary rounded-circle">
                                    <i class="las la-shopping-cart"></i>
                                </span>
                                <div class="ml-auto">
                                </div>
                            </div>
                            <div class="quick-category-content">
                                @php
                                $count8 = App\Models\Order::all();
                                $totalCount1 = count($count8);
                                @endphp
                                <h3>{{ $totalCount1 }}</h3>
                                <p class="font-17 text-primary mb-0">Products Sold</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-warning rounded-circle">
                                    <i class="las la-box"></i>
                                </span>
                                <div class="ml-auto">
                                </div>
                            </div>
                            <div class="quick-category-content">
                            @php
                            $nullStatusOrders = App\Models\Order::whereNull('delivery_status')->get();
                            $totalCount11 = $nullStatusOrders->count();
                            @endphp
                            <h3>{{ $totalCount11 }}</h3>
                            <p class="font-17 text-warning mb-0">Pending Orders</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-secondary rounded-circle">
                                    <i class="las la-hand-holding-usd"></i>
                                </span>
                                <div class="ml-auto">
                                </div>
                            </div>
                            <div class="quick-category-content">

                            @php
                                $deliveredOrders = App\Models\Order::where('delivery_status', 'delivered')->get();
                                $deliveredCount = $deliveredOrders->count();
                            @endphp
                                <h3>{{ $deliveredCount }}</h3>                                
                                <p class="font-17 text-secondary mb-0">Delivered</p>
                            </div>
                        </a>
                    </div>

                    <!-- Calling Live Chart For Orders -->
                    
                    <iframe src="{{ route('chart') }}" frameborder="0" width="100%" height="500"></iframe>

                    
                </div>
            </div>
            <!-- Main Body Ends -->
            <!-- Copyright Footer Starts -->
            
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->

</body>
</html>