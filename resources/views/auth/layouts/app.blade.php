<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('auth/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('auth/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">

    <title>Login</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2 shadow-lg"
            style="background-image: url({{ asset('auth/images/new-login.jpg') }} );">
        </div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    @yield('login')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}"></script>
</body>

</html>
