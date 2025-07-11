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
               @if ($errors->any())
                  <div class="col-12">
                        <x-admin.alert-danger>
                           <ul>
                              @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </x-admin.alert-danger>
                  </div>
               @endif
               @if (session('success'))
                  <div class="col-12">
                     <x-admin.alert-success>
                        <ul>
                           <li>
                              {{ session('success') }}
                           </li>
                        </ul>
                     </x-admin.alert-success>
                  </div>
               @endif
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-md p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#info">
                                    thông tin cơ bản
                                 </a>
                              </li>
                              <li class="col-md p-0">
                                 <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Đổi mật khẩu
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="iq-edit-list-data">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="info" role="tabpanel">
                           <div class="row profile-content">
                              <div class="col-12 col-md-12 col-lg-4">
                                 <div class="iq-card">
                                    <div class="iq-card-body profile-page">
                                       <div class="profile-header">
                                          <div class="cover-container text-center">
                                             <div class="profile-detail mt-3">
                                                <h3>{{auth()->guard('customers')->user()->name}}</h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                       <div class="iq-header-title">
                                          <h4 class="card-title mb-0">Thông tin cá nhân cơ bản</h4>
                                       </div>
                                    </div>
                                    <div class="iq-card-body">
                                       <ul class="list-inline p-0 mb-0">
                                          <li>
                                             <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                   <h6>Tên tài khoản</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                   <p class="mb-0">{{auth()->guard('customers')->user()->name }}</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                   <h6>Tên đầy đủ</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                   <p class="mb-0">{{ auth()->guard('customers')->user()->full_name == null ? 'chưa có tên đầy đủ' : auth()->guard('customers')->user()->full_name }}</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                   <h6>Địa chỉ</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                   <p class="mb-0">{{auth()->guard('customers')->user()->address == null ? 'chưa có địa chỉ' : auth()->guard('customers')->user()->address}}</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                   <h6>Số điện thoại</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                   <p class="mb-0">{{auth()->guard('customers')->user()->phone == null ? 'chưa có số điện thoại' : auth()->guard('customers')->user()->phone}}</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="row align-items-center justify-content-between mb-3">
                                                <div class="col-sm-6">
                                                   <h6>Email</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                   <p class="mb-0">{{auth()->guard('customers')->user()->email}}</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-12 col-lg-8">
                                 <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                       <div class="iq-header-title">
                                          <h4 class="card-title mb-0">danh sách đơn hàng đã đặt</h4>
                                       </div>
                                    </div>
                                    <div class="iq-card-body">
                                       <ul class="perfomer-lists m-0 p-0">
                                          @foreach ($orders as $item)
                                             <li class="d-flex mb-4 align-items-center">
                                                <div class="media-support-info ml-3">
                                                   <h5>đơn hàng đặt vào ngày {{ $item->created_at_date }} lúc {{ $item->created_at_time }}</h5>
                                                   <span class="text-dark">
                                                      <b>total: {{ number_format($item->total,0,',','.') }}đ</b>
                                                   </span>
                                                </div>
                                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                                   <a href="/order-detail/{{ $item->id }}" class="btn btn-primary">chi tiết</a>
                                                </div>
                                             </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Đổi mật khẩu</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form action="{{ route('customer.chgpw') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                       <label for="cpass">Mật khẩu hiện tại:</label>
                                       <input type="Password" class="form-control" id="cpass" value="" name="old_password">
                                    </div>
                                    <div class="form-group">
                                       <label for="npass">Mật khẩu mới:</label>
                                       <input type="Password" class="form-control" id="npass" value="" name="password">
                                    </div>
                                    <div class="form-group">
                                       <label for="vpass">Xác nhận lại mật khẩu:</label>
                                       <input type="Password" class="form-control" id="vpass" value="" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                                    <button type="reset" class="btn iq-bg-danger">Hủy bỏ</button>
                                 </form>
                              </div>
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
<!-- Style Customizer -->
<script src="/customer_plugin/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="/customer_plugin/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="/customer_plugin/js/custom.js"></script>
</body>
</html>
