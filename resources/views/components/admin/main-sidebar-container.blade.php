<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/admin_plugin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin_plugin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.showAccountSetting')}}" class="d-block">{{auth()->guard('admins')->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item @if($path == 'admin.index') {{' menu-open'}} @endif">
                    <a href="{{route('admin.index')}}" class="nav-link @if($path == 'admin.index') {{' active'}} @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        {{-- <i class="nav-icon fas fa-truck"></i> --}}
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($path == 'admin.statistics' || $path == 'admin.statistics.data'){{'open-menu'}}@endif">
                    <a href="{{ route('admin.statistics') }}" class="nav-link @if($path == 'admin.statistics' || $path == 'admin.statistics.data'){{'active'}}@endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Statistics
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($path == 'admin.orders.index' || $path == 'admin.orders.show' || $path == 'admin.orders.filter') {{'menu-open'}} @endif">
                    <a href="{{ route('admin.orders.index') }}" class="nav-link @if($path == 'admin.orders.index' || $path == 'admin.orders.show' || $path == 'admin.orders.filter') {{'active'}} @endif">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($path == 'admin.account.add' || $path == 'admin.account.index' || $path == 'admin.account.trashed') {{' menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.account.add' || $path == 'admin.account.index' || $path == 'admin.account.trashed') {{' active'}} @endif">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>
                            Admins
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (auth()->guard('admins')->user()->role == 'admin')
                            <li class="nav-item @if($path == 'admin.account.add') {{' menu-open'}} @endif">
                                <a href="{{route('admin.account.add')}}" class="nav-link @if($path == 'admin.account.add') {{' active'}} @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add A Employee</p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item @if($path == 'admin.account.index') {{' menu-open'}} @endif">
                            <a href="{{route('admin.account.index')}}" class="nav-link @if($path == 'admin.account.index') {{' active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employees and Admins</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.account.trashed') {{' menu-open'}} @endif">
                            <a href="{{route('admin.account.trashed')}}" class="nav-link @if($path == 'admin.account.trashed') {{' active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employees are Trashed</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.customer.index' || $path == 'admin.customer.trashed') {{' menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.customer.index' || $path == 'admin.customer.trashed') {{' active'}} @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Customers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.customer.index') {{' menu-open'}} @endif">
                            <a href="{{route('admin.customer.index')}}" class="nav-link @if($path == 'admin.customer.index') {{' active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customers</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.customer.trashed') {{' menu-open'}} @endif">
                            <a href="{{route('admin.customer.trashed')}}" class="nav-link @if($path == 'admin.customer.trashed') {{' active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customers are Trashed</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.books.index' || $path == 'admin.books.create' || $path == 'admin.books.edit' || $path == 'admin.books.trashed' || $path == 'admin.books.checked') {{'menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.books.index' || $path == 'admin.books.create' || $path == 'admin.books.edit' || $path == 'admin.books.trashed' || $path == 'admin.books.checked') {{'active'}} @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Books
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.books.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.books.create') }}" class="nav-link @if($path == 'admin.books.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Book</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.books.index' || $path == 'admin.books.edit') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.books.index') }}" class="nav-link @if($path == 'admin.books.index' || $path == 'admin.books.edit') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Books</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.books.trashed' || $path == 'admin.books.checked') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.books.trashed') }}" class="nav-link @if($path == 'admin.books.trashed' || $path == 'admin.books.checked') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Books are Trashed</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.categories.index' || $path == 'admin.categories.create' || $path == 'admin.categories.edit') {{'menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.categories.index' || $path == 'admin.categories.create' || $path == 'admin.categories.edit') {{'active'}} @endif">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.categories.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.categories.create') }}" class="nav-link @if($path == 'admin.categories.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Category</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.categories.index' || $path == 'admin.categories.edit') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link @if($path == 'admin.categories.index' || $path == 'admin.categories.edit') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.authors.index' || $path == 'admin.authors.create' || $path == 'admin.authors.edit') {{'menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.authors.index' || $path == 'admin.authors.create' || $path == 'admin.authors.edit') {{'active'}} @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Authors
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.authors.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.authors.create') }}" class="nav-link @if($path == 'admin.authors.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Author</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.authors.index' || $path == 'admin.authors.edit') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.authors.index') }}" class="nav-link @if($path == 'admin.authors.index' || $path == 'admin.authors.edit') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Authors</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  @if($path == 'admin.publishers.index' || $path == 'admin.publishers.create' || $path == 'admin.publishers.edit') {{'menu-open'}} @endif">
                    <a href="#" class="nav-link @if($path == 'admin.publishers.index' || $path == 'admin.publishers.create' || $path == 'admin.publishers.edit') {{'active'}} @endif">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Publishers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.publishers.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.publishers.create') }}" class="nav-link @if($path == 'admin.publishers.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Publisher</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.publishers.index' || $path == 'admin.publishers.edit') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.publishers.index') }}" class="nav-link @if($path == 'admin.publishers.index' || $path == 'admin.publishers.edit') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Publishers</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
