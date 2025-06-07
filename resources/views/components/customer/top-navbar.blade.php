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
                            <span class="text-primary text-uppercase">BOOKSTORE</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navbar-breadcrumb">
                <h5 class="mb-0">Trang Chủ</h5>
            </div>
            <div class="iq-search-bar">
                <form action="#" class="searchbox">
                    <input type="text" class="text search-input" placeholder="Tìm kiếm sản phẩm...">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item nav-icon search-content">
                        <a href="/" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-search-line"></i>
                        </a>
                        <form action="#" method="get" class="search-box p-0">
                            @csrf
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <button class="search-link btn-primary btn" href="#"><i class="ri-search-line"></i></button>
                        </form>
                    </li>
                    @if (session()->get('cart'))
                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-shopping-cart-2-line"></i>
                            @if (session()->get('cart'))
                            <span class="badge badge-danger count-cart rounded-circle">{{ sizeof(session()->get('cart')) }}</span>
                            @endif
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">Giỏ Hàng<small class="badge  badge-light float-right pt-1">{{ sizeof(session()->get('cart')) }}</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="rounded" src="/customer_plugin/images/cart/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Night People book</h6>
                                                <p class="mb-0">$32</p>
                                            </div>
                                            <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="rounded" src="/customer_plugin/images/cart/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">The Sin Eater Book</h6>
                                                <p class="mb-0">$40</p>
                                            </div>
                                            <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                        </div>
                                    </a>
                                    <div class="d-flex align-items-center text-center p-3">
                                        <a class="btn btn-primary mr-2 iq-sign-btn" href="cart-page" role="button">Giỏ Hàng</a>
                                        <a class="btn btn-primary iq-sign-btn" href="checkout" role="button">Thanh Toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    <li class="line-height pt-3">
                        @if (auth()->guard('customers')->check())
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <img src="/customer_plugin/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
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
                                    <a href="profile-edit" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="profile-edit" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-profile-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Sổ địa chỉ</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card iq-bg-primary-hover">
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
                                        <form action="{{ route('customer.logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary"><i class="ri-book-line"></i>Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <div class="caption">
                                <h6 class="line-height">Đăng Nhập Tài Khoản</h6>
                            </div>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>