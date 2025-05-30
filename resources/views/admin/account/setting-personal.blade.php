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
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                </ul>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <form action="" method="post" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputOldPassword" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="" class="form-control" id="inputOldPassword" placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputOldPassword" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="" class="form-control" id="inputOldPassword" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputOldPassword" class="col-sm-2 col-form-label">Confirm New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="" class="form-control" id="inputOldPassword" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </x-admin.card-body>
                        </x-admin.card>
                    </div>
                </div>
            </div>
            
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
    <x-admin.script>
        <script>
        </script>
    </x-admin.script>
</x-admin.layout>