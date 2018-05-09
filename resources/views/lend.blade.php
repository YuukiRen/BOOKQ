@include('layouts.partial.head')
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
                        <form class="form-horizontal login100-form validate-form" method="POST"  action="{{ url('/save') }}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="">   Book image : </label>
                                            <input type="file" name="image" id="pic"    data-validate = "Valid Title is required">
                                            <div class="form-group wrap-input100 validate-input" data-validate = "Valid Title is required">
                                                    <label for="">Title</label>
                                                    <input type="text"  class="form-control input100" required autofocus name="title">
                                            </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="genre">Category :</label>
                                                    <select name="category" id="" class="form-control center">
                                                        @foreach ($category as $categories)
                                                        <option value="{{ $categories->name }}"> {{ $categories->name }}</option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group wrap-input100 validate-input" data-validate = "Valid Year is required">
                                                    <label for="genre">Year</label>
                                                    <input type="number" class="form-control" name="year" onkeydown="return ( event.ctrlKey || event.altKey 
                                                                                                                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                                                                                                                    || (95<event.keyCode && event.keyCode<106)
                                                                                                                        || (event.keyCode==8) || (event.keyCode==9) 
                                                                                                                    || (event.keyCode>34 && event.keyCode<40) 
                                                                                                                    || (event.keyCode==46) )" min=0 max=3000>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="genre">Tag</label>
                                                        <input type="text" class="form-control" name="tag">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid author is required">
                                            <label for="">Author</label>
                                            <input type="text" class="input100 form-control" required autofocus name="author">
                                        </div>
                                      
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid Publisher is required">
                                            <label for="">Publisher</label>
                                            <input type="text" class="input100 form-control" required autofocus name="publisher">
                                        </div>
                                        <div class="form-group wrap-input100 validate-input">
                                            <label for="Content">Review</label>
                                            <textarea name="review" rows="5" class="input100 form-control" required autofocus name="review"></textarea>
                                        </div>
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
<!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>