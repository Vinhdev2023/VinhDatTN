<x-admin.layout :page="'login-page'">
    <x-admin.preloader/>

    <div class="login-box">
        <div class="login-logo">
            <a ><b>Admin Portal</b></a>
        </div>

        <div class="card shadow border-0 rounded-lg">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                    <strong><i class="fas fa-exclamation-circle mr-2"></i>Error!</strong> Please check the form below:
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li class="small">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
            @endif

            <div class="card-body login-card-body px-4 py-4">
                <h4 class="text-center text-dark mb-3 font-weight-bold">Welcome Back!</h4>
                <p class="text-center text-muted mb-4">Sign in to continue to your dashboard</p>

                <form action="{{ route('admin.login') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email" class="text-muted small">Email Address</label>
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                            <div class="input-group-append">
                                <span class="input-group-text bg-white"><i class="fas fa-envelope text-primary"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="text-muted small">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                            <div class="input-group-append">
                                <span class="input-group-text bg-white"><i class="fas fa-lock text-primary"></i></span>
                            </div>
                        </div>
                    </div>

{{--                    <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--                        <div class="icheck-primary">--}}
{{--                            <input type="checkbox" id="remember" name="remember">--}}
{{--                            <label for="remember">Remember Me</label>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="small text-primary">Forgot Password?</a>--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-primary btn-block shadow-sm">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                    </button>
                </form>

{{--                <hr class="my-4">--}}
{{--                <p class="text-center small mb-0">Don't have an account?--}}
{{--                    <a href="#" class="text-primary">Register Now</a>--}}
{{--                </p>--}}
            </div>
        </div>
    </div>

    <x-admin.script/>
</x-admin.layout>
