<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path" :numbook="$num_book" :numcategory="$num_category" :numauthor="$num_author" :numpublisher="$num_publisher"/>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List of Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Categories</li>
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
                <div class="col-12">
                    <x-admin.card>
                        <x-admin.card-header>
                            <h3 class="card-title">Book data</h3>
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
                                        <th>Category's name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Update</a>
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('You want to delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Category's name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </x-admin.card-body>
                        <x-admin.card-footer>
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add a new category</a>
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