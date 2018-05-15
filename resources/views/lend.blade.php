<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lend your Book!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
                    <h1 class="my-4"><span class="title px-3">Lend a Book
                            <font size=3>Share your Knowledge!</font>
                        </span></h1>
                    <div class="panel-body">
                        <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/save') }}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-dismissible alert-danger">
                                                  {{$error}}
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="form-group">
                                            <label for="">   Book image</label>
                                            <img class="img-responsive img-cover img-center mb-2" id="preview" src="" style="display:none;">
                                            <input type="file" class="form-control" name="image" id="img" required>
                                                    <div class="invalid-feedback">
                                                        Please insert the book's image
                                                    </div>

                                        </div>
                                        <div class="form-group">
                                            <label for=""> Title </label>
                                            <input type="text"  class="form-control" required name="title">
                                                <div class="invalid-feedback">
                                                    Please insert the book's title
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="genre">Category :</label>
                                                    <select name="category" id="" class="form-control center" required>
                                                        <option value="" disabled selected hidden>Select your option</option>                                                        
                                                        @foreach ($category as $categories)
                                                        <option value="{{ $categories->name }}"> {{ $categories->name }}</option>
                                                        @endforeach
                                                    </select> 
                                                    <div class="invalid-feedback">
                                                            Please choose the book's category
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group wrap-input100 validate-input" data-validate = "Valid Year is required">
                                                    <label for="genre">Year Published</label>
                                                    <input type="number" class="form-control" required name="year" max=2100 onkeydown="return ( event.ctrlKey || event.altKey 
                                                                                                                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                                                                                                                    || (95<event.keyCode && event.keyCode<106)
                                                                                                                        || (event.keyCode==8) || (event.keyCode==9) 
                                                                                                                    || (event.keyCode>34 && event.keyCode<40) 
                                                                                                                    || (event.keyCode==46) )" min=0 max=3000>
                                                        <div class="invalid-feedback">
                                                            Please input the proper year
                                                        </div>
                                                </div>                                      
                                            </div>
                                            <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="genre">Tag*</label>
                                                        <input type="text" class="form-control" name="tag">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid author is required">
                                            <label for="">Author</label>
                                            <input type="text" class="input100 form-control" required name="author">
                                                <div class="invalid-feedback">
                                                    Please input the book's author
                                                </div>
                                        </div>
                                      
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid Publisher is required">
                                            <label for="">Publisher</label>
                                            <input type="text" class="input100 form-control" required name="publisher">
                                                <div class="invalid-feedback">
                                                    Please input the book's publisher
                                                </div>  
                                        </div>
                                        <div class="form-group wrap-input100">
                                            <label for="Content">Review*</label>
                                            <textarea name="review" rows="5" class="input100 form-control" name="review"></textarea>
                                        </div>
                                        <div class="form-group wrap-input100">
                                            <label for="Content">Description*</label>
                                            <textarea name="description" rows="5" class="input100 form-control" name="description"></textarea>
                                        </div>
                                        <p>* : optional</p>
                                        <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block" value="SUBMIT" >
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
    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
            </script>
            <script type="text/javascript">
                function preview(input) {
                    if (input.files && input.files[0]) {
                        var freader = new FileReader();
                        freader.onload = function (e) {
                            $("#preview").show();
                            $('#preview').attr('src', e.target.result);
                        }
                        freader.readAsDataURL(input.files[0]);
                    }
                }
                
                $("#img").change(function(){
                    preview(this);
                });
            </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>