<style>
    .center-content {
        text-align: center;
        margin-bottom: 20px;
    }

    .center-content .brand-logo img {
        margin: 0 auto;
    }

    .right-button {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Admin</title>
    <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="center-content">
                                <div class="brand-logo">
                                    <img src="{{ asset('images/dashboard_logo.png') }}" alt="logo">
                                </div>
                                <h4>User Login</h4>
                            </div>
                            <form class="pt-3" action="{{ route('User.Login') }}" method="post">
                                @csrf
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Username" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        style="background-color: #ffd600; border:white; color:black; border-radius:10px">User Login</button>
                                </div>
                                <hr>
                                <div class="mt-3">
                                    <a href="{{ route('user.register') }}"
                                        class="btn btn-block btn-lg font-weight-medium auth-form-btn"
                                        style="background-color: red; color: white; border: 2px solid white; border-radius: 10px;">
                                        User Signup
                                    </a>
                                </div>

                                <p class="text-center" style="margin-top: 10px;">or</p>

                                <div class="mt-3">
                                    <a href="{{ route('login') }}"
                                        class="btn btn-block btn-lg font-weight-medium auth-form-btn"
                                        style="background-color: #1692e9; color: white; border: 2px solid white; border-radius: 10px;">
                                        Admin Sign In
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
</body>

</html>
