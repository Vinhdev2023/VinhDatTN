<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader></x-admin.preloader>
    <x-admin.navbar></x-admin.navbar>
    <x-admin.main-sidebar-container :path="$path"></x-admin.main-sidebar-container>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Books</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Books</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <x-admin.card-header>
                            <h3 class="card-title">Book data</h3>
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
                                            <td><img src="/images/{{ $book->image }}" alt="{{ $book->image }}" style="width: 200px"></td>
                                            <td>{{number_format($book->price, 0, ",", ".")}}</td>
                                            <td>{{number_format($book->quantity, 0, ",", ".")}}</td>
                                            <td>
                                                <a href="{{ route('admin.books.show', $book->id)}}" class="btn btn-primary">show</a>
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
                            <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add a new book</a>
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
                    "paging": true,
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