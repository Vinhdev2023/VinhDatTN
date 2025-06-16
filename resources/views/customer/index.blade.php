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
                    @if (session('fail'))
                        <div class="col-12">
                            <x-admin.alert-danger>
                                <ul>
                                    <li>
                                        {{ session('fail') }}
                                    </li>
                                </ul>
                            </x-admin.alert-danger>
                        </div>
                    @endif
                      <div class="col-lg-12">
                          <div class="iq-card-transparent mb-0">
                              <div class="d-block text-center">
                                  <h2 class="mb-3">Tìm kiếm tên sách</h2>
                                  <div class="w-100 iq-search-filter">
                                      <form action="/search" method="get">
                                          <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                              <li class="search-menu-opt">
                                                  <div class="iq-search-bar search-book d-flex align-items-center">
                                                      <div class="searchbox">
                                                          <input type="text" name="search" value="{{ isset($search) ? $search : null }}" class="text search-input" placeholder="search here...">
                                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                                      </div>
                                                      <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                                                  </div>
                                              </li>
                                          </ul>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <div class="iq-card">
                              <div class="iq-card-body">
                                  <div class="row">
                                    @foreach ($books as $book)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                                <div class="iq-card-body p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src="/images/{{$book->image}}" alt=""></a>
                                                            <div class="view-book">
                                                                <a href="book-page/{{ $book->id }}" class="btn btn-sm btn-white">View Book</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <h6 class="mb-1">{{ $book->title }}</h6>
                                                                @foreach ($book->author as $key => $author)
                                                                    <p class="font-size-13 line-height mb-1">{{$author->name}}</p>
                                                                    @if ($key == 1)
                                                                    @break
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div class="price d-flex align-items-center">

                                                                <h6><b>{{number_format($book->price, 0,',','.')}} đ</b></h6>
                                                            </div>
                                                            <div class="iq-product-action">
                                                                <a href="/add-cart/{{ $book->id }}">
                                                                    <i class="ri-shopping-cart-2-fill text-primary"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @if ($flag == 0 )
                                        <div class="col-12">
                                            <x-admin.alert-danger>
                                                <ul>
                                                    <li>Xin lỗi chúng tôi tìm không thấy</li>
                                                </ul>
                                            </x-admin.alert-danger>
                                        </div>
                                    @endif
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-12">
                          {{ $books->links('customer.pagination') }}
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
