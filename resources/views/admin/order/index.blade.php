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
                        <h1>List of Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item">Orders</li>
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
                            <h3 class="card-title">Orders data</h3>
                            <div class="card-tools">
                                <a href="" class="btn btn-danger">CANCELED</a>
                                <a href="" class="btn btn-primary">PENDING</a>
                                <a href="" class="btn btn-warning">CONFIRMED</a>
                                <a href="" class="btn btn-success">COMPLETED</a>
                            </div>
                        </x-admin.card-header>
                        <x-admin.card-body>
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
                                    @foreach ($orders as $item)
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
                                                <a href="{{ route('admin.orders.show',$item->id) }}" class="btn btn-primary">Show</a>
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
                        </x-admin.card-body>
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