<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

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
                            <h1>Registration Form</h1>
                        </div>
                        <div class="login-form">
                            <form action="/registration" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="au-input au-input--full @error('name') is-invalid @enderror" type="text" name="name"  value="{{old('name')}}">
                                </div>
                                @error('name') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror" type="email" name="email"  value="{{old('email')}}">
                                </div>
                                @error('email') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" value="{{old('password')}}">
                                </div>
                                @error('password') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="au-input au-input--full @error('phone_number') is-invalid @enderror" type="Text" name="phone_number" value="{{old('phone_number')}}">
                                </div>
                                @error('phone_number') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="au-input au-input--full @error('address') is-invalid @enderror" type="textarea" name="address" value="{{old('address')}}"></textarea>
                                </div>
                                @error('address') {{$message}} @enderror
                                <div class="form-group">
                                    <label>Date Of birth</label>
                                    <input class="au-input au-input--full" type="date" name="date_of_birth" placeholder="Date Of Birth">
                                </div>
                                <div class="form-group">
                                    <label for="gender"> Gender</label>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <input type="radio" name="gender" id="gender1" value="male" class="form-check-input"> Male
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gender" id="gender2" value="female" class="form-check-input"> female
                                        </div>
                                    </div>
                                </div>
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
      <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
<!-- end document-->