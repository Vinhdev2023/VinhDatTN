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
         <div class="content-page">
            <div class="container-fluid checkout-content">
               <div class="row">
                  <div class="card-block show p-0 col-12">
                     <div class="row align-item-center">
                        <div class="col-lg-8">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Thông tin đặt hàng</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form onsubmit="required()" action="/add-order" method="post">
                                    @csrf
                                    <div class="row mt-3">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Họ và tên: *</label>
                                             <input type="text" class="form-control" name="full_name" value="{{ auth('customers')->user()->full_name }}" required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Số điện thoại: *</label>
                                             <input type="number" class="form-control" name="phone" value="{{ auth('customers')->user()->phone }}" required>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Địa chỉ: *</label>
                                             <textarea name="address" id="" class="form-control">{{ auth('customers')->user()->address }}</textarea>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <button id="savenddeliver" onclick="return confirm('Bạn có muốn đặt mua hay không')" type="submit" class="btn btn-primary">Lưu và giao tại đây</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="iq-card">
                                <div class="iq-card-body">
                                    <p>Tùy chọn</p>

                                    <hr>
                                    <p><b>Chi tiết</b></p>
                                    @foreach (session()->get('cart') as $item)
                                        <div class="d-flex justify-content-between mb-1">
                                          <span>{{ $item->title }}</span>
                                          <span>{{ number_format($item->quantity,0,',','.') }}</span>
                                          <span>{{ number_format($item->quantity*$item->price,0,',','.') }}đ</span>
                                        </div>
                                    @endforeach
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-dark"><strong>Tổng</strong></span>
                                        <span class="text-dark"><strong>{{ number_format(session()->get('cart_total'),0,',','.') }}đ</strong></span>
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
