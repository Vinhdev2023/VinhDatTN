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
                        <h1>Manage your account</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Manage your account</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <x-admin.card :class="'card-primary card-outline'">
                            <x-admin.card-body :class="'box-profile'">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="/admin_plugin/dist/img/user2-160x160.jpg"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{auth()->guard('admins')->user()->name}}</h3>

                                <p class="text-muted text-center">{{auth()->guard('admins')->user()->role}}</p>

                                <p class="text-muted text-center">{{auth()->guard('admins')->user()->email}}</p>

                                <form action="{{route('admin.logout')}}" method="post" class="nav justify-content-center">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        Logout
                                    </button>
                                </form>
                            </x-admin.card-body>
                        </x-admin.card>
                    </div>
                    <div class="col-md-9">
                        <x-admin.card>
                            <x-admin.card-header :class="'p-2'">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#chg-pw" data-toggle="tab">Change password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#orders" data-toggle="tab">orders</a>
                                    </li>
                                </ul>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="chg-pw">
                                        <form action="{{route('admin.updatePassword', auth()->guard('admins')->user()->id)}}" method="post" class="form-horizontal">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group row">
                                                <label for="inputOldPassword" class="col-sm-2 col-form-label">Old Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="old_password" class="form-control" id="inputOldPassword" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputOldPassword" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control" id="inputOldPassword" placeholder="New Password" required minlength="8">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputOldPassword" class="col-sm-2 col-form-label">Confirm New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password_confirmation" class="form-control" id="inputOldPassword" placeholder="Confirm New Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="orders">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tên Khách hàng</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Trạng thái</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Show</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($admin->order as $item)
                                                    <tr>
                                                        <td>{{ $item->customer_name }}</td>
                                                        <td>{{ $item->customer_phone }}</td>
                                                        <td>
                                                            @if ($item->status == 'PENDING')
                                                                Chờ xác nhận
                                                            @elseif ($item->status == 'CONFIRMED')
                                                                Đã xác nhận
                                                            @elseif ($item->status == 'COMPLETED')
                                                                Đã hoàn thành
                                                            @elseif ($item->status == 'CANCELED')
                                                                Đã hủy
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->ship_to_address }}</td>
                                                        <td>
                                                            <form action="{{route('admin.customer.destroy', $item->customer_id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('admin.orders.show',$item->id) }}" class="btn btn-primary">Show</a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Tên Khách hàng</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Trạng thái</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Show</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </x-admin.card-body>
                        </x-admin.card>
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
                    </div>
                </div>
            </div>
            
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
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