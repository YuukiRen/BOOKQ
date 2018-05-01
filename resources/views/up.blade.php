<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookQ Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
                <form class="login100-form validate-form" method="POST" action="{{ url('/addbook') }}">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <h1 style=" text-align:center; "> Let's Start </h1>
                    <span class="login100-form-title"><h5>
                        Login</h5>
                    </span>
                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="isbn" value="{{ $books->isbn }}" required autofocus placeholder="isbn">
                            <span class="focus-input100"></span>
                        </div>  

                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="author" value="{{ $books->author }}" required autofocus placeholder="Author">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="title" value="{{ $books->text }}" required autofocus placeholder="Title">
                            <span class="focus-input100"></span>
                        </div>
                         <div class="form-group" >
                            <textarea type="text" class="input100" name="synopsis" required autofocus placeholder="Synopsis">{{ $books->synopsis }}</textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" >
                            <input type="number" class="input100" name="year" value="{{ $books->year }}" required autofocus placeholder="year">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" >
                            <input type="text" class="input100" name="publisher" value="{{ $books->publisher }}" required autofocus placeholder="publisher">
                            <span class="focus-input100"></span>
                        </div>
                        
                         <div class="form-group" >
                            <textarea type="text" class="input100" name="description" required autofocus placeholder="Description">{{ $books->description }}</textarea>
                            <span class="focus-input100"></span>
                        </div>
                        
                        
                    </div>
                    <button type="submit" class = btn btn-primary>Submit</button>


                </form>
    
    

    
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
