<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path"/>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employees and Admins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Employees and Admins</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            @if (session('success'))
                <x-admin.alert-success>
                    {{session('success')}}
                </x-admin.alert-success>
            @endif
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <x-admin.card-header>
                            <h3 class="card-title">Admin table data</h3>
                        </x-admin.card-header>
                        <x-admin.card-body>
                            <table class="table table-bordered table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        @if (auth()->guard('admins')->user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{$employee->name}}</td>
                                            <td>{{$employee->email}}</td>
                                            <td>{{$employee->role}}</td>
                                            @if (auth()->guard('admins')->user()->role == 'admin')
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            @if ($employee->role != 'admin')
                                                                <form action="{{route('admin.account.destroy', $employee->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('You want to lock this employee now?')">Lock</button>
                                                                    
                                                                </form>
                                                            @endif
                                                        </div>
                                                        <div class="col">
                                                            <a href="{{ route('admin.account.showOrderChecked', $employee->id) }}" class="btn btn-primary">Show orders checked</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        @if (auth()->guard('admins')->user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </tfoot>
                            </table>
                        </x-admin.card-body>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
    <x-admin.script>
        <script>
            $(function () {
                $('#example').DataTable({
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