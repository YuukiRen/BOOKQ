@include('layouts.partial.loginhead')
<body>
    <div class="bg">
        <div class="container-login100">
            <div class="container-login200">
            <div class="card">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <h1 style=" text-align:center; "> Let's Start </h1>
                    <span class="login100-form-title"><h5>
                        Login</h5>
                    </span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <h6 class="bold center">{{ $errors->first('email') }}</h6>
                                </span>
                        @endif
                    </div>

                    <div class="form-group row">

                        <div  class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input id="password" type="password" class="input100" name="password" required placeholder="Password">
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
                        <div class="col-md-6 center">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <b> Remember Me </b>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="{{route('password.request')}}">
                        <b>    Forgot Username / Password? </b>
                        </a>
                     </div>
                     <br>

                    </div>
                </form>
               <div class="row" style="position:relative; top:-30px;padding:7px;">
                        <h4 style=" text-align:center; "> Don't Have An Account? </h4>    
                        
                        <a type="button" class="login100-form-btn" href="register" style="text-decoration:none;background:blue"> Register Now 
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
