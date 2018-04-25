<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookQ Register Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="bg">
        <div class="container-login100">
            <div class="container-login200">
                <div class="card">
                        <div class="form-group row">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 style=" text-align:center; "> Come Join Us! </h1>
                   <span class="login100-form-title"><h4>
                        Register</h4>
                    <div class="form-group row" style="position:relative;top:8px">
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input  id="name" type="text" class="input100" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </span>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="form-group row">

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required
                            placeholder="Email">
                            <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                    

                        <div class="wrap-input100 validate-input" data-validate = "Password is required!">
                            <input id="password" type="password" class="input100" name="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>


                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="wrap-input100 validate-input" data-validate = "Password is required!">
                            <input id="password-confirm" type="password" class="input100" name="password_confirmation"  placeholder="Confirm Password"required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Create My Account!
                    </button>
                        </div>
                    </div>
                   
                </form>    
                <div class="row" style="position:relative; top:0px;padding:7px;border:2px solid black;border-radius:20px">
                        <h4 style=" text-align:center; "> Already Have An Account? </h4>    
                        
                        <a type="button" class="login100-form-btn" href="login" style="text-decoration:none"> Login using existing account
                        </a>   
                    </div>
            </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
