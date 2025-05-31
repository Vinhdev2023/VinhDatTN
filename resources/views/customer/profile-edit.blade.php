<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>NHASACHTV - Nhà sách trực tuyến</title>
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
<body class="sidebar-main-active right-column-fixed">
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
               <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                           <ul class="iq-edit-profile d-flex nav nav-pills">
                              <li class="col-md-4 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Thông tin cá nhân
                                 </a>
                              </li>
                              <li class="col-md-4 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Đổi mật khẩu
                                 </a>
                              </li>
                              <li class="col-md-4 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                    Quản lý liên hệ
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
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Thông tin cá nhân</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form>
                                    <div class="form-group row align-items-center">
                                       <div class="col-md-12">
                                          <div class="profile-img-edit">
                                             <img class="profile-pic" src="images/user/1.jpg" alt="profile-pic">
                                             <div class="p-image">
                                                <i class="ri-pencil-line upload-button"></i>
                                                <input class="file-upload" type="file" accept="image/*"/>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row align-items-center">
                                       <div class="form-group col-sm-6">
                                          <label for="fname">First Name:</label>
                                          <input type="text" class="form-control" id="fname" value="Ông">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="lname">Last Name:</label>
                                          <input type="text" class="form-control" id="lname" value="Trần Thuận">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="uname">Tên tài khoản:</label>
                                          <input type="text" class="form-control" id="uname" value="Thuangiaosu">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label class="d-block">Giới tính:</label>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                             <label class="custom-control-label" for="customRadio6"> Nam </label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                             <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                             <label class="custom-control-label" for="customRadio7"> Nữ </label>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label for="dob">Ngày sinh:</label>
                                          <input  class="form-control" id="dob" value="1984-01-24">
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Tuổi:</label>
                                          <select class="form-control" id="exampleFormControlSelect2">
                                             <option>12-18</option>
                                             <option>19-32</option>
                                             <option selected="">33-45</option>
                                             <option>46-62</option>
                                             <option>63 > </option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-6">
                                          <label>Tỉnh/Thành phố:</label>
                                          <select class="form-control" id="exampleFormControlSelect4">
                                             <option></option>
                                             <option>Hà Nội</option>
                                             <option selected="">Đà Nẵng</option>
                                             <option>HCM</option>
                                             <option>Buôn Ma Thuột</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-12">
                                          <label>Địa chỉ:</label>
                                          <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                             06 Nam Thành
                                             Đà Nãng, VA 23803
                                             Viet Nam
                                             Zip Code: 40001
                                          </textarea>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                                    <button type="reset" class="btn iq-bg-danger">Hủy bỏ</button>
                                 </form>
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
                                 <form>
                                    <div class="form-group">
                                       <label for="cpass">Mật khẩu hiện tại:</label>
                                       <a href="javascripe:void();" class="float-right">Quên mật khẩu</a>
                                       <input type="Password" class="form-control" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="npass">Mật khẩu mới:</label>
                                       <input type="Password" class="form-control" id="npass" value="">
                                    </div>
                                    <div class="form-group">
                                       <label for="vpass">Xác nhận lại mật khẩu:</label>
                                       <input type="Password" class="form-control" id="vpass" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                                    <button type="reset" class="btn iq-bg-danger">Hủy bỏ</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Quản lý liên hệ</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <form>
                                    <div class="form-group">
                                       <label for="cno">Số liên lạc:</label>
                                       <input type="text" class="form-control" id="cno" value="089">
                                    </div>
                                    <div class="form-group">
                                       <label for="email">Email:</label>
                                       <input type="text" class="form-control" id="email" value="tvtean@ttnm.com">
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
   <!-- Footer -->
   <footer class="iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a href="privacy-policy.html">Chính sách bảo mật</a></li>
                  <li class="list-inline-item"><a href="terms-of-service.html">Điều khoản sử dụng</a></li>
               </ul>
            </div>
            <div class="col-lg-6 text-right">
               Copyright 2020 <a href="#">TVteam</a> Đã đăng ký.
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer END -->
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
