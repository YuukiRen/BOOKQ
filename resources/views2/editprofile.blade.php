<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

  </head>
<body>
    @include('layouts.partial.header')
    <div class="container-fluid thick">
        <div class="row">
            <div class="center col-md-8">
                <div class="panel panel-info" >                
                    <h1 class="my-4"><span class="title px-3">Edit Profile</h1>                    
                    <div class="panel-body">
                        <form class="form-horizontal login100-form needs-validation" novalidate method="POST"  action="{{ url('/profile/edit/save') }}" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="">   User image : </label>
                                <input type="file" name="user_image" id="pic" value="{{$users->user_image}}">
                                    <div class="form-group wrap-input100 validate-input">
                                            <label for="">Full Name</label>
                                            <input type="text"  class="form-control input100" required name="complete_name" value="{{$users->complete_name}}">
                                            <div class="invalid-feedback">
                                                Please enter your full name
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nim">NIM</label>
                                                    <input type="text" class="form-control" name="nim" value="{{$users->nim}}" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your NIM
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="fav_book">Favorite Book Category :</label>
                                                <select name="fav_book" id="" class="form-control center" required>
                                                    <option value="" disabled selected hidden>Select your option</option> 
                                                    @foreach ($category as $categories)
                                                    @if($categories->name == $users->fav_book){
                                                        <option value="{{ $categories->name }}" selected> {{ $categories->name }}</option>
                                                    }
                                                    @else{
                                                        <option value="{{ $categories->name }}" > {{ $categories->name }}</option>
                                                    }
                                                    @endif
                                                    
                                                    @endforeach
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone_number">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone_number" required value="{{$users->phone_number}}">
                                                        <div class="invalid-feedback">
                                                            Please enter your phone number
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="line_id">Line ID</label>
                                                    <input type="text" class="form-control" name="line_id" value="{{$users->line_id}}"> 
                                                    <div class="invalid-feedback">
                                                        Please enter your LINE ID
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group wrap-input100 validate-input" data-validate = "Valid address is required">
                                        <label for="address">Address</label>
                                        <input type="text" class="input100 form-control" required name="address" value="{{$users->address}}">
                                        <div class="invalid-feedback">
                                            Please enter your address
                                        </div>
                                    </div>
                                    <div class="form-group wrap-input100 validate-input" onclick="myFunction()" data-validate = "Valid about_me is required">
                                        <label for="about_me">About Me</label>
                                        <textarea type="text" id="about_me" rows=5 class="input100 form-control" name="about_me">{{$users->about_me}}</textarea>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter your bio
                                    </div>
                                    <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-block" value="SAVE" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--===============================================================================================-->  
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>