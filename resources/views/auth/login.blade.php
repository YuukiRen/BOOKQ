<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>Login V1</title>
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
<!--===========================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" background="bookwall.jpg">
                <div class="wrap-login100">
                    
                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf
                        <h1 style=" text-align:center; "> Join Us! </h1><br>
                        <span class="login100-form-title">
                            Create Account
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="r_name" class="input100" type="text" name="r_name" placeholder="Your Name?">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>

                            @if ($errors->has('r_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('r_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="r_email" class="input100" type="text" name="r_email" placeholder="Your Email?">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('r_email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('r_email') }}</strong>
                                    </span>
                            @endif
                            
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required!">
                            <input class="input100" type="password" name="pass" placeholder="Give it a unique password!">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            @if ($errors->has('pass'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pass') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Password is required!">
                            <input class="input100" type="password" name="pass" placeholder="Confirm Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Create My Account!
                            </button>
                        </div>
                    </form>
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
