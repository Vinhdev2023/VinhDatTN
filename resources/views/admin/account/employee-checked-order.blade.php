<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path"/>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $admin->role }}: {{ $admin->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.account.index') }}">Employees and Admins</a></li>
                            <li class="breadcrumb-item">{{ $admin->role }}</li>
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
                                        <th>Tên Khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Trạng thái</th>
                                        <th>Địa chỉ</th>
                                        @if (auth()->guard('admins')->user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admin->order as $order)
                                        <tr>
                                            <td>{{$order->customer_name}}</td>
                                            <td>{{$order->customer_phone}}</td>
                                            <td>
                                                @if ($order->status == 'PENDING')
                                                    Chờ xác nhận
                                                @elseif ($order->status == 'CONFIRMED')
                                                    Đã xác nhận
                                                @elseif ($order->status == 'COMPLETED')
                                                    Đã hoàn thành
                                                @elseif ($order->status == 'CANCELED')
                                                    Đã hủy
                                                @endif
                                            </td>
                                            <td>{{ $order->ship_to_address }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        @if (auth()->guard('admins')->user()->role == 'admin' && ($order->status == 'CONFIRMED' || $order->status == 'PENDING'))
                                                            <a href="{{ route('admin.account.orderChange', $order->id) }}" class="btn btn-danger" onclick="return confirm('Bạn muốn có quyền cập nhật lại đơn này')">Lấy đơn</a>
                                                        @endif
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">Xem đơn</a>
                                                    </div>
                                                </div>
                                                
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