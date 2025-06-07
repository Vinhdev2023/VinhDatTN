<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="/" class="header-logo">
            <img src="/customer_plugin/images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">BOOKSTORE</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                {{-- <li class="active active-menu">
                    <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span>
                        <i class="las la-home iq-arrow-left"></i>
                        <span>Trang Chủ</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li><a href="/"><i class="las la-house-damage"></i>Home Page</a></li>
                        <li><a href="/category"><i class="ri-function-line"></i>Category Page</a></li>
                        <li><a href="/book-page"><i class="ri-book-line"></i>Book Page</a></li>
                        <li><a href="/checkout"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                        <li><a href="/cart-page"><img src="/customer_plugin/images/cart-icon-png-12.jpg" style="width: 25px">Cart</a></li>
                        <li><a href="/order-page"><img src="/customer_plugin/images/order-icon-png-12.jpg" style="width: 25px">Orders</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="/">
                        <i class="las la-house-damage"></i>
                        <span>Trang Chủ</span>
                    </a>
                </li>
                <li>
                    <a href="/category">
                        <i class="ri-function-line"></i>
                        <span>Danh Mục Sách</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/book-page">
                        <i class="ri-book-line"></i>
                        <span>Book Page</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="/checkout">
                        <i class="ri-checkbox-multiple-blank-line"></i>
                        <span>Checkout</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/cart-page">
                       <i class="ri-shopping-cart-line"></i>
                        <span>Giỏ Hàng</span>
                    </a>
                </li>
                @if (auth()->guard('customers')->check())
                    <li>
                        <a href="/order-page">
                          <i class="ri-article-line"></i>
                            <span>Đơn Hàng</span>
                        </a>

                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
