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
                        <h1>Add Employee or Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Add Employee or Admin</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <form action="{{route('admin.account.store')}}" method="post">
                            @csrf
                            <x-admin.card-header>
                                <h3 class="card-title">Form Add A New Employee</h3>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Name of Employee</label>
                                            <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" placeholder="Enter name of Employee" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Email of Employee</label>
                                            <input type="text" name="email" id="" value="{{ old('name') }}" class="form-control" placeholder="Enter email of Employee" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Role of Employee</label>
                                            <select name="role" id="" class="form-control select2" required>
                                                <option value="employee" selected>Employee</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
            </div>
            @if ($errors->any())
                <x-admin.alert-danger>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-admin.alert-danger>
            @endif
            @if (session('success'))
                <x-admin.alert-success>
                    {{ session('success') }}
                </x-admin.alert-success>
            @endif
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
    <x-admin.script>
        <script>
            //Initialize Select2 Elements
            $('.select2').select2()
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        </script>
    </x-admin.script>
</x-admin.layout>