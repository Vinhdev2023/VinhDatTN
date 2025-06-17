<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nhà Sách Vinh Đạt - Nhà sách trực tuyến</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/customer_plugin/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/customer_plugin/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/customer_plugin/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/customer_plugin/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/customer_plugin/css/responsive.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <x-customer.sidebar/>
    <!-- TOP Nav Bar -->
    <x-customer.top-navbar/>
    <!-- TOP Nav Bar END -->
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid checkout-content">
            <div class="row">
                @if (session('fail'))
                <div class="col-12">
                    <x-admin.alert-danger>
                        {{ session('fail') }}
                    </x-admin.alert-danger>
                </div>
                @endif
                <div class="card-block show p-0 col-12">
                    <div class="row align-item-center">
                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Danh sách đơn hàng</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="list-inline p-0 m-0">
                                        @foreach ($order_details as $key => $item)
                                            <li class="checkout-product">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-2">
                                                <span class="checkout-product-img">
                                                    <img class="img-fluid rounded" src="/images/{{ $item->book->image }}" alt="">
                                                </span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="checkout-product-details">
                                                            <h5>{{ $item->book->title }}</h5>
                                                            {{-- <p class="text-success">Còn hàng</p> --}}
                                                            <div class="price">
                                                                <h5>{{ number_format($item->price,0,',','.') }} ₫</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="row align-items-center mt-2">
                                                                    <div class="col-sm-7 col-md-6">
                                                                        <span class="product-price">{{ number_format($item->quantity,0,',','.') }}</span>
                                                                    </div>
                                                                    <div class="col-sm-5 col-md-6">
                                                                        <span class="product-price">{{ number_format($item->quantity*$item->price,0,',','.') }} ₫</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <p><b>Chi tiết</b></p>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Tổng</span>
                                        <span>{{ number_format($order->total,0,',','.') }}đ</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Trạng thái</span>
                                        <span>
                                            @if ($order->status == 'PENDING')
                                                Chờ xác nhận
                                            @elseif ($order->status == 'CONFIRMED')
                                                Đã xác nhận
                                            @elseif ($order->status == 'COMPLETED')
                                                Đã hoàn thành
                                            @elseif ($order->status == 'CANCELED')
                                                Đã hủy
                                            @endif
                                        </span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-dark"><strong>Tổng</strong></span>
                                        <span class="text-dark"><strong>{{ number_format($order->total,0,',','.') }}đ</strong></span>
                                    </div>
                                    @if ($order->status == 'PENDING')
                                        <a href="/update-status/CANCELED/{{ $order->id }}" class="btn btn-danger d-block mt-3">Hủy</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/customer_plugin/js/jquery.min.js"></script>
<script src="/customer_plugin/js/popper.min.js"></script>
<script src="/customer_plugin/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="/customer_plugin/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="/customer_plugin/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="/customer_plugin/js/waypoints.min.js"></script>
<script src="/customer_plugin/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="/customer_plugin/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="/customer_plugin/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="/customer_plugin/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="/customer_plugin/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="/customer_plugin/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="/customer_plugin/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="/customer_plugin/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="/customer_plugin/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="/customer_plugin/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="/customer_plugin/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="/customer_plugin/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="/customer_plugin/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="/customer_plugin/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="/customer_plugin/js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="/customer_plugin/js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="/customer_plugin/js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="/customer_plugin/js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="/customer_plugin/js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="/customer_plugin/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="/customer_plugin/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="/customer_plugin/js/custom.js"></script>
</body>
</html>
