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
<body class="sidebar-main">
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
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="card-block show p-0 col-12">
                    <div class="row align-item-center">
                        <div class="col-lg-8">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Giỏ hàng</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="list-inline p-0 m-0">
                                        @if (session()->get('cart'))
                                            @foreach (session()->get('cart') as $item)
                                                <li class="checkout-product">
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-2">
                                                            <span class="checkout-product-img">
                                                                <a href="javascript:void();">
                                                                    <img class="img-fluid rounded" src="/images/{{$item->image}}" alt="">
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="checkout-product-details">
                                                                <h5>{{ $item->title }}</h5>
                                                                <p class="text-success">Còn {{ $item->quantityInStock }}</p>
                                                                <div class="price">
                                                                    <h5>Giá của 1 cuốn: {{ number_format($item->price,0,',','.') }} ₫</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-sm-10">
                                                                    <div class="row align-items-center mt-2">
                                                                        <div class="col-sm-7 col-md-6">
                                                                            <form action="/update-cart/{{ $item->id }}" method="post">
                                                                                @csrf
                                                                                <input type="number" name="quantity" oninput="this.value = Math.round(this.value);" max="{{$item->quantityInStock}}" onchange="this.value <= 0 ? this.value = 1 : this.value" min="1" value="{{$item->quantity}}" style="width: 50px" required>
                                                                                <button
                                                                                    type="submit"
                                                                                    class="ri-refresh-line qty-btn"
                                                                                    style="border: none; outline: none;">
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-sm-5 col-md-6">
                                                                            <span class="product-price text-dark">mua {{ number_format($item->quantity,0,',','.') }} cuốn này cần: <strong>{{ number_format($item->price * $item->quantity,0,',','.') }} ₫</strong></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <a href="/remove-in-cart/{{$item->id}}" onclick="return confirm('Bạn có muốn bỏ cuốn sách này khỏi giỏ hay không')" class="text-dark font-size-20">
                                                                        <i class="ri-delete-bin-7-fill"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @if ($errors->any())
                                <x-admin.alert-danger>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </x-admin.alert-danger>
                            @endif
                            @if (session('fail'))
                                <x-admin.alert-danger>
                                    {{ session('fail') }}
                                </x-admin.alert-danger>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <p>Tùy chọn</p>
                                    <hr>
                                    <p><b>Chi tiết</b></p>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Tổng</span>
                                        <span>{{ number_format(session()->get('cart_total'),0,',','.') }}đ</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-dark"><strong>Tổng</strong></span>
                                        <span class="text-dark"><strong>{{ number_format(session()->get('cart_total'),0,',','.') }}đ</strong></span>
                                    </div>
                                    <a href="/checkout" class="btn btn-primary d-block mt-3">Đặt hàng</a>
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
<x-customer.script/>
</body>
</html>
