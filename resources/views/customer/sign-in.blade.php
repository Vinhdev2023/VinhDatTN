<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
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
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container p-0">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <ul class="">
                            @foreach ($errors->all() as $error)
                                <li class="">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row no-gutters height-self-center">
                  <div class="col-sm-12 align-self-center page-content rounded">
                    <div class="row m-0">
                      <div class="col-sm-12 sign-in-page-data">
                          <div class="sign-in-from bg-primary rounded">
                              <h3 class="mb-0 text-center text-white">Sign in</h3>
                              <p class="text-center text-white">Enter your email address and password to access admin panel.</p>
                              <form class="mt-4 form-text" action="{{ route('customer.sign_in') }}" method="post">
                                @csrf
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      {{-- <a href="#" class="float-right text-dark">Forgot password?</a> --}}
                                      <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="sign-info text-center">
                                      <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign in</button>
                                      <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="{{route('customer.sign_up.show')}}" class="text-white">Sign up</a></span>
                                  </div>
                              </form>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
         <!-- color-customizer -->

       <!-- color-customizer END -->
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
      <!-- lottie JavaScript -->
      <script src="/customer_plugin/js/lottie.js"></script>
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
      <!-- Style Customizer -->
      <script src="/customer_plugin/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="/customer_plugin/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="/customer_plugin/js/custom.js"></script>
   </body>
</html>
