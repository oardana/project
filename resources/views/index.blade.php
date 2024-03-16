<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <!-- Vendor CSS-->
        <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    
        <!-- Main CSS-->
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h1>Form Login</h1>
                        </div>
                        @if(session()->has('error'))
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="login-form">
                            <form action="/login" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <label>Name Employee</label>
                                    <input class="au-input au-input--full @error('name') is-invalid @enderror" type="name" name="name" placeholder="Name" value="{{old('name')}}">
                                </div>
                                @error('name') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                </div>
                                @error('password'){{$message}} @enderror
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="/registration">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- Jquery JS-->
        <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/select2/select2.min.js')}}">
        </script>
    
        <!-- Main JS-->
        <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->


