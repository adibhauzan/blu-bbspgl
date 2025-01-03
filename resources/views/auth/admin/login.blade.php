<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.header')
</head>

<body class="login-page" style="min-height: 495.6px;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('admin.dashboard') }}"><b>Admin</b>BBSPGL</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('admin.login.submit') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                
                <p class="mb-0">
                    <a href="{{route('admin.register')}}" class="text-center">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>
    @include('admin.partials.scriptjs')
</body>

</html>
