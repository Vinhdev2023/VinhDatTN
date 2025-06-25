<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path"/>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Revenue statistics</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Revenue statistics</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            <div class="row">
                <div class="col">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">Date picker</h3>
                        </x-admin.card-header>
                        <form action="{{ route('admin.statistics.booksSold.data') }}" method="get">
                            <x-admin.card-body>
                                <!-- Date range -->
                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="FromDateToDate" value="{{$dateInput}}" class="form-control float-right" id="reservation">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Publishers</label>
                                                <select class="form-control select2" style="width: 100%;" name="publisher">
                                                    <option selected value="">Không chọn</option>
                                                    @foreach ($publishers as $item)
                                                        <option value="{{ $item->id }}" {{ isset($fillter_publisher) && $fillter_publisher == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control select2" style="width: 100%;" name="category">
                                                    <option {{ isset($fillter_category) ? '' : 'selected' }} value="">Không chọn</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}" {{ isset($fillter_category) && $fillter_category == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Author</label>
                                                <select class="form-control select2" style="width: 100%;" name="author">
                                                    <option selected value="">Không chọn</option>
                                                    @foreach ($authors as $item)
                                                        <option value="{{ $item->id }}" {{ isset($fillter_author) && $fillter_author == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <select class="form-control select2" style="width: 100%;" name="price">
                                                    <option selected value="">Không chọn</option>
                                                    <option {{ isset($fillter_price) && $fillter_price == '0-50000' ? 'selected' : '' }} value="0-50000">Duới 50.000</option>
                                                    <option {{ isset($fillter_price) && $fillter_price == '50000-100000' ? 'selected' : '' }} value="50000-100000">Trên 50.000 Dưới 100.000</option>
                                                    <option {{ isset($fillter_price) && $fillter_price == '100000-' ? 'selected' : '' }} value="100000-">Trên 100.000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <select class="form-control select2" style="width: 100%;" name="quantity">
                                                    <option selected value="">Không chọn</option>
                                                    <option {{ isset($fillter_quantity) && $fillter_quantity == '0-50' ? 'selected' : '' }} value="0-50">Duới 50</option>
                                                    <option {{ isset($fillter_quantity) && $fillter_quantity == '50-100' ? 'selected' : '' }} value="50-100">Trên 50 Dưới 100</option>
                                                    <option {{ isset($fillter_quantity) && $fillter_quantity == '100-' ? 'selected' : '' }} value="100-">Trên 100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Search</label>
                                        <input type="text" name="search" class="form-control float-right" id="" value="{{ isset($search) ? $search : null }}">
                                    </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">
                                    Thống Kê các cuốn sách bán được và số lượng ở trong kho
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                        </x-admin.card-header>
                        <x-admin.card-body>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Image</th>
                                        <th>trong kho</th>
                                        <th>Bán được</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->book_title }}</td>
                                            <td><img src="/images/{{ $book->book_image }}" alt="{{ $book->book_image }}" style="width: 100px"></td>
                                            <td>{{number_format($book->book_quantity_in_stock, 0, ",", ".")}}</td>
                                            <td>{{number_format($book->total_sold, 0, ",", ".")}}</td>
                                            <td>
                                                @if ($book->book_deleted_at != null)
                                                    <a href="{{ route('admin.statistics.books.checked', $book->book_id) }}" class="btn btn-primary">check</a>
                                                @else
                                                    <a href="{{ route('admin.statistics.books.show', $book->book_id)}}" class="btn btn-primary">show</a>
                                                    
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Image</th>
                                        <th>quantity in stock</th>
                                        <th>total sold</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </x-admin.card-body>
                    <x-admin.card-footer>
                        {{ $books->links('admin.paginate') }}
                    </x-admin.card-footer>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
    <x-admin.script>
        <script>
            $(function () {
                $('#example2').DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
                //Initialize Select2 Elements
                $('.select2').select2()
                //Date range picker
                $('#reservation').daterangepicker({
                    locale: {
                        format: 'DD-MM-YYYY'
                    }
                })
            })
            /*
             * Custom Label formatter
             * ----------------------
             */
            function labelFormatter(label, series) {
                return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                    + label
                    + '<br>'
                    + Math.round(series.percent) + '%</div>'
            }
        </script>
    </x-admin.script>
</x-admin.layout>