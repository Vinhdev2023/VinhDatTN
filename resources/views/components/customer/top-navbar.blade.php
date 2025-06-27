<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="/" class="header-logo">
                        <img src="/customer_plugin/images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                            <span class="text-primary text-uppercase">Nhà Sách Vinh Đạt</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navbar-breadcrumb">
{{--                <h5 class="mb-0">Trang Chủ</h5>--}}
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    @if (session()->get('cart'))
                    <li class="nav-item nav-icon dropdown">
                        <a href="/cart-page" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-shopping-cart-2-line"></i>
                            <span class="badge badge-danger count-cart rounded-circle">{{ sizeof(session()->get('cart')) }}</span>
                        </a>
                        @if (sizeof(session()->get('cart')) <= 5)
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">Giỏ Hàng<small class="badge  badge-light float-right pt-1">{{ sizeof(session()->get('cart')) }}</small></h5>
                                    </div>
                                    @foreach (session()->get('cart') as $item)
                                    <a href="/cart-page" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="rounded" src="/images/{{ $item->image }}" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">{{ $item->title }}</h6>
                                                <p class="mb-0">{{ number_format($item->price,0,',','.') }} đ</p>
                                            </div>
                                            <form action="/remove-in-cart/{{$item->id}}" method="get">
                                                <button class="btn btn-danger" onclick="return confirm('Bạn có muốn bỏ cuốn sách này khỏi giỏ hay không')">
                                                    <i class="ri-close-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </a>
                                    @endforeach
                                    <div class="d-flex align-items-center text-center p-3">
                                        <a class="btn btn-primary mr-2 iq-sign-btn" href="/cart-page" role="button">Giỏ Hàng</a>
                                        <a class="btn btn-primary iq-sign-btn" href="/checkout" role="button">Thanh Toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endif
                    <li class="line-height pt-3">
                        @if (auth()->guard('customers')->check())
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">

                            <div class="caption">
                                <h6 class="mb-1 line-height">{{auth()->guard('customers')->user()->name}}</h6>
                                @if (auth()->guard('customers')->check())
                                    <p class="mb-0 text-primary">Tài Khoản</p>
                                @endif
                            </div>
                        </a>

                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Xin Chào {{auth()->guard('customers')->user()->name}}</h5>
                                    </div>
                                    <a href="/profile-edit" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="/order-page" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-account-box-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Đơn hàng của tôi</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <form action="{{ route('customer.logout') }}" method="get">
                                            <button type="submit" class="btn btn-primary"><i class="ri-book-line"></i>Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <a href="/sign-in" class="d-flex align-items-center">
                            <div class="login-btn-container">
                                <a href="/sign-in" class="login-btn">
                                    <i class="ri-user-line"></i>
                                    <span>Đăng Nhập Tài Khoản</span>
                                </a>
                            </div>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
