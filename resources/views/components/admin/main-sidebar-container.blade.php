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
                <a class="d-block">vinh</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item @if($path == '/admin') {{' menu-open'}} @endif">
                    <a href="/admin" class="nav-link @if($path == '/admin') {{' active'}} @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        {{-- <i class="nav-icon fas fa-truck"></i> --}}
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($path == '/admin/orders' || $path == '/admin/order/detail') {{'menu-open'}} @endif">
                    <a href="/admin/orders" class="nav-link @if($path == '/admin/orders' || $path == '/admin/order/detail') {{'active'}} @endif">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                            <span class="right badge badge-danger">0 News</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item @if($path == 'admin.books.index' || $path == 'admin.books.create') {{'menu-open'}} @endif">
                    <a href="{{ route('admin.books.index') }}" class="nav-link @if($path == 'admin.books.index' || $path == 'admin.books.create') {{'active'}} @endif">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Books
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.books.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.books.create') }}" class="nav-link @if($path == 'admin.books.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Book</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.books.index') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.books.index') }}" class="nav-link @if($path == 'admin.books.index') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Books</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.categories.index' || $path == 'admin.categories.create' || $path == '/admin/category/edit-form') {{'menu-open'}} @endif">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link @if($path == 'admin.categories.index' || $path == 'admin.categories.create' || $path == '/admin/category/edit-form') {{'active'}} @endif">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.categories.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.categories.create') }}" class="nav-link @if($path == 'admin.categories.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Category</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.categories.index') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link @if($path == 'admin.categories.index') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == 'admin.authors.index' || $path == 'admin.authors.create' || $path == '/admin/category/edit-form') {{'menu-open'}} @endif">
                    <a href="{{ route('admin.authors.index') }}" class="nav-link @if($path == 'admin.authors.index' || $path == 'admin.authors.create' || $path == '/admin/category/edit-form') {{'active'}} @endif">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Authors
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if($path == 'admin.authors.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.authors.create') }}" class="nav-link @if($path == 'admin.authors.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Author</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.authors.index') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.authors.index') }}" class="nav-link @if($path == 'admin.authors.index') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Authors</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  @if($path == 'admin.publishers.index' || $path == 'admin.publishers.create' || $path == 'admin.publishers.edit') {{'menu-open'}} @endif">
                    <a href="{{ route('admin.publishers.index') }}" class="nav-link @if($path == 'admin.publishers.index' || $path == 'admin.publishers.create' || $path == 'admin.publishers.edit') {{'active'}} @endif">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Publishers
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if ($path == 'admin.publishers.edit')
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Edit A Publisher</p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item @if($path == 'admin.publishers.create') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.publishers.create') }}" class="nav-link @if($path == 'admin.publishers.create') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add A New Publisher</p>
                            </a>
                        </li>
                        <li class="nav-item @if($path == 'admin.publishers.index') {{'menu-open'}} @endif">
                            <a href="{{ route('admin.publishers.index') }}" class="nav-link @if($path == 'admin.publishers.index') {{'active'}} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Publishers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($path == '/admin/statistics' || $path == '/admin/statistics/data'){{'open-menu'}}@endif">
                    <a href="/admin/statistics" class="nav-link @if($path == '/admin/statistics' || $path == '/admin/statistics/data'){{'active'}}@endif">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Statistics
                        </p>
                    </a>
                </li>
                <li class="nav-item open-menu">
                    <form action="/admin/logout" method="post">
                        @csrf
                        <button type="submit" class="btn nav-link active">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>