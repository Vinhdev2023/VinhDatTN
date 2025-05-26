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
                        <h1>Create a new author</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.authors.index') }}">authors</a></li>
                            <li class="breadcrumb-item">Create a new author</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <form action="{{ route('admin.authors.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.card-header>
                                <h3 class="card-title">Form Add A New Author</h3>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <div class="form-group">
                                    <label for="">Name of Author</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Enter name of author">
                                </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="{{ route('admin.authors.index')}}" class="btn btn-danger">Cancel</a>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer></x-admin.footer>
    <x-admin.script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                })
            })
        </script>
    </x-admin.script>
</x-admin.layout>