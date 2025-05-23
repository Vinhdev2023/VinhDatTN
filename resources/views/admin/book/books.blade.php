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
                        <h1>Lists Books</h1>
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
                                        <th>Book title</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>abc</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000000, 0, ",", ".")}}</td>
                                        <td>not selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>dfg</td>
                                        <td>{{number_format(100000)}}</td>
                                        <td>{{number_format(1000)}}</td>
                                        <td>are selling</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
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
        <!-- DataTables  & Plugins -->
        <script src="/admin_plugin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="/admin_plugin/plugins/jszip/jszip.min.js"></script>
        <script src="/admin_plugin/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="/admin_plugin/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="/admin_plugin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="/admin_plugin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <script>
            $(function () {
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </x-admin.script>
</x-admin.layout>