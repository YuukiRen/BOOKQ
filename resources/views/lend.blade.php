<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookQ Login Page</title>
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
                <form class="login100-form validate-form" method="POST" action="{{ url('/addbook') }}">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <h1 style=" text-align:center; "> Let's Start </h1>
                    <span class="login100-form-title"><h5>
                        Login</h5>
                    </span>
                          

                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="title" required autofocus placeholder="Title">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="isbn" required autofocus placeholder="Category">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="author" required autofocus placeholder="Author">
                            <span class="focus-input100"></span>
                        </div>
                        
                         <div class="form-group" >
                            <textarea type="text" class="input100" name="descripton" required autofocus placeholder="Description"></textarea>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <button type="submit" class = btn btn-primary>Submit</button>


                </form>
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
