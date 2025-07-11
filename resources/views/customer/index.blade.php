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
   <style>
       /* Thêm CSS mới vào */
       .search-bookcontent .image-overlap-shadow {
           height: 250px; /* Chiều cao cố định */
           overflow: hidden; /* Ẩn phần ảnh thừa */
       }

       .search-bookcontent .image-overlap-shadow img {
           width: 100%;
           height: 100%;
           object-fit: cover; /* Giữ tỉ lệ ảnh và lấp đầy khung */
       }


   </style>

   <body class="sidebar-main">
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
                                                <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                                    <li class="search-menu-opt">
                                                        <div class="iq-dropdown">
                                                            <div class="form-group mb-0">
                                                                <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1" name="price">
                                                                    <option selected value="">Không chọn</option>
                                                                    <option {{ isset($fillter_price) && $fillter_price == '0-50000' ? 'selected' : '' }} value="0-50000">Duới 50.000</option>
                                                                    <option {{ isset($fillter_price) && $fillter_price == '50000-100000' ? 'selected' : '' }} value="50000-100000">Trên 50.000 Dưới 100.000</option>
                                                                    <option {{ isset($fillter_price) && $fillter_price == '100000-' ? 'selected' : '' }} value="100000-">Trên 100.000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="search-menu-opt">
                                                            <div class="iq-dropdown">
                                                                <div class="form-group mb-0">
                                                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2" name="category">
                                                                        <option selected value="">Không chọn</option>
                                                                        @foreach ($categories as $item)
                                                                            <option 
                                                                            @if (@isset($fillter_category) && $fillter_category == $item->id)
                                                                                {{ 'selected' }}
                                                                            @endif
                                                                            value="{{ $item->id }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </li>
                                                    <li class="search-menu-opt">
                                                            <div class="iq-dropdown">
                                                                <div class="form-group mb-0">
                                                                    <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3" name="publisher">
                                                                        <option selected value="">Không chọn</option>
                                                                        @foreach ($publishers as $item)
                                                                            <option
                                                                            @if (@isset($fillter_publisher) && $fillter_publisher == $item->id)
                                                                                {{ 'selected' }}
                                                                            @endif
                                                                            value="{{ $item->id }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </li>
                                                    <li class="search-menu-opt">
                                                        <div class="iq-dropdown">
                                                            <div class="form-group mb-0">
                                                                <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4" name="author">
                                                                    <option selected value="">Không chọn</option>
                                                                    @foreach ($authors as $item)
                                                                        <option
                                                                        @if (@isset($fillter_author) && $fillter_author == $item->id)
                                                                            {{ 'selected' }}
                                                                        @endif
                                                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                <li class="search-menu-opt">
                                                    <div class="iq-search-bar search-book d-flex align-items-center">
                                                        <div class="searchbox">
                                                            <input type="search" name="search" value="{{ isset($search) ? $search : null }}" class="text search-input" placeholder="search here...">
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
                                                            <a href="#">
                                                                <img class="img-fluid rounded w-100" src="/images/{{$book->image}}" alt="">
                                                            </a>
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
                                                                @if ( $book->real_quantity == 0 )
                                                                <img src="/image-cant-buy.png" alt="" width="20px">
                                                                @else
                                                                    <a href="/add-cart/{{ $book->id }}">
                                                                        <i class="ri-shopping-cart-2-fill text-primary"></i>
                                                                    </a>
                                                                @endif

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
        <x-customer.script/>
   </body>
</html>
