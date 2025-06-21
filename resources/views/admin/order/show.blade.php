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
                            <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
                            <li class="breadcrumb-item">Order Detail</li>
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
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                                    <small class="float-right">Date: {{$order->created_at_date}}</small>
                                    <br>
                                    <small class="float-right">Time: {{$order->created_at_time}}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>Customer's Name: {{$order->customer_name}}</strong><br>
                                    Address: {{$order->ship_to_address}}<br>
                                    Phone: {{$order->customer_phone}}<br>
                                    Email: {{$order->customer->email}}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <br>
                                <b>Status:</b> {{$order->status}}
                            </div>
                            <!-- /.col -->
                            @if (@isset($order->admin))
                                <div class="col-sm-4 invoice-col">
                                Checked
                                    <address>
                                        <strong>{{$order->admin->role}}'s Name: {{$order->admin->name}}</strong><br>
                                        Role: {{$order->admin->role}}<br>
                                        Email: {{$order->admin->email}}
                                    </address>
                                </div>
                            @elseif($order->status == 'CANCELED' && $order->admin_id_confirmed == null)
                                <div class="col-sm-4 invoice-col">
                                Checked
                                    <address>
                                        <strong>canceled by: Customer</strong>
                                    </address>
                                </div>
                            @endif
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Book</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_details as $obj)
                                    <tr>

                                        <td>{{$obj->book->title}}</td>
                                        <td>{{$obj->book->id}}</td>
                                        <td><a href="{{ route('admin.books.show',$obj->book->id) }}">Description</a></td>
                                        <td>{{$obj->quantity}}</td>
                                        <td>{{number_format($obj->price)}}</td>
                                        <td>{{number_format($obj->price*$obj->quantity)}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-6"></div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Thay đổi vào ngày {{date_format(date_create($order->updated_at), "d/m/Y")}} lúc {{date_format(date_create($order->updated_at), "H:i:s")}}</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Total:</th>
                                            <td>{{number_format($order->total)}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                @if ($order->status == 'PENDING' && $order->admin_id_confirmed == auth('admins')->user()->id)
                                    <a href="{{ route('admin.orders.update',['status' => 'CANCELED','order' => $order->id]) }}" onclick="return confirm('You want to cancel this order now?')" type="button" class="btn btn-danger float-right">
                                        Cancel
                                    </a>
                                    <a href="{{ route('admin.orders.update',['status' => 'CONFIRMED','order' => $order->id]) }}" onclick="return confirm('You want to confirm this order now?')" type="button" class="btn btn-warning float-right" style="margin-right: 5px;">
                                        Confirm
                                    </a>
                                @elseif($order->status == 'CONFIRMED' && $order->admin_id_confirmed == auth('admins')->user()->id)
                                    <a href="{{ route('admin.orders.update',['status' => 'CANCELED','order' => $order->id]) }}" onclick="return confirm('You want to cancel this order now?')" type="button" class="btn btn-danger float-right">
                                        Cancel
                                    </a>
                                    <a href="{{ route('admin.orders.update',['status' => 'COMPLETED','order' => $order->id]) }}" onclick="return confirm('You want to complete this order now?')" type="button" class="btn btn-success float-right" style="margin-right: 5px;">
                                        Complete
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
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