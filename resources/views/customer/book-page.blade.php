<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>NHASACHTV - Pay Back Time</title>
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
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <h4 class="card-title mb-0">Thông tin</h4>
                        </div>
                        <div class="iq-card-body pb-0">
                           <div class="description-contens align-items-top row">
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <div class="row align-items-center">
                                          <div class="col">
                                             <ul id="description-slider" class="list-inline p-0 m-0  d-flex nav justify-content-center">
                                                <li>
                                                   <a href="javascript:void(0);">
                                                   <img src="/images/{{$book->image}}" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <h3 class="mb-3">{{$book->title}}</h3>
                                       <div class="price d-flex align-items-center font-weight-500 mb-2">
                                          <span class="font-size-24 text-dark">{{number_format($book->price, 0,',','.')}} ₫</span>
                                       </div>
                                       <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">{{$book->description}}</span>
                                       <div class="text-primary mb-4">Tác giả: 
                                          @foreach ($book->author as $author)
                                             <span class="text-body">{{$author->name}}</span>,
                                          @endforeach
                                       </div>
                                       <div class="mb-4 d-flex align-items-center">
                                          <a href="/add-cart/{{ $book->id }}" class="btn btn-primary view-more mr-2">Thêm vào giỏ hàng</a>
                                          <a href="#" class="btn btn-primary view-more mr-2">Mua ngay</a>
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
