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
                        <h1>List of Books are Trashed</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Books are Trashed</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            @if (session('success'))
                <x-admin.alert-success>
                    {{ session('success') }}
                </x-admin.alert-success>
            @endif
            @if (session('fail'))
                <x-admin.alert-warning>
                    {{ session('fail') }}
                </x-admin.alert-warning>
            @endif
            <div class="row">
                <div class="col">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">Filter</h3>
                        </x-admin.card-header>
                        <form action="{{ route('admin.books.trashed.search') }}" method="get">
                            <x-admin.card-body>
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
                                    <input type="search" name="search" class="form-control float-right" id="" value="{{ isset($search) ? $search : null }}">
                                </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
                <div class="col-12">
                    <x-admin.card>
                        <x-admin.card-header>
                            <h3 class="card-title">Book trashed data</h3>
                        </x-admin.card-header>
                        <x-admin.card-body>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->title }}</td>
                                            <td><img src="/images/{{ $book->image }}" alt="{{ $book->image }}" style="width: 100px"></td>
                                            <td>{{number_format($book->price, 0, ",", ".")}}</td>
                                            <td>{{number_format($book->quantity, 0, ",", ".")}}</td>
                                            <td>
                                                <a href="{{ route('admin.books.checked', $book->id) }}" class="btn btn-primary">check</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
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
    <x-admin.footer></x-admin.footer>
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
            });
        </script>
    </x-admin.script>
</x-admin.layout>