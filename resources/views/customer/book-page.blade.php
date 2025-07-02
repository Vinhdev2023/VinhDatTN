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
                  @if (session('fail'))
                     <div class="col-12">
                           <x-admin.alert-danger>
                              {{ session('fail') }}
                           </x-admin.alert-danger>
                     </div>
                  @endif
                  @if ($book->quantityInStock <= 0)
                      <div class="col-12">
                           <x-admin.alert-danger>
                              Cuốn sách này đã hết
                           </x-admin.alert-danger>
                     </div>
                  @endif
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
                                          @foreach ($book->author as $key => $author)
                                             <span class="text-body">{{ $author->name }}{{ $key == sizeof($book->author)-1 ? '. ' : ', ' }}</span>
                                          @endforeach
                                       </div>
                                       <div class="text-primary mb-4">Thể loại:
                                          @foreach ($book->category as $key => $category)
                                             <span class="text-body">{{ $category->name }}{{ $key == sizeof($book->category)-1 ? '. ' : ', ' }}</span>
                                          @endforeach
                                       </div>
                                       <div class="text-primary mb-4">Nhà xuất bản:
                                          <span class="text-body">{{ $book->publisher->name }}{{ '. ' }}</span>
                                       </div>
                                       <div class="mb-4 d-flex align-items-center">
                                          <a href="/add-cart/{{ $book->id }}" @disabled($book->quantityInStock <= 0 ? true : false) class="btn btn-primary view-more mr-2">Thêm vào giỏ hàng</a>
                                          <a href="/buy-now/{{ $book->id }}" @disabled($book->quantityInStock <= 0 ? true : false) class="btn btn-primary view-more mr-2">Mua ngay</a>
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
      <x-customer.script/>
   </body>
</html>
