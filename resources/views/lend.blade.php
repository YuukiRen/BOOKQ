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
                                                    <input type="file" name="image" id="pic">
                                                    <div class="form-group wrap-input100 validate-input" data-validate = "Valid Title is required" has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                                            <label for="">Title</label>
                                                            <input type="text"  class="form-control input100" required autofocus name="title">
                                                                {{-- @if($errors->has('title'))
                                                                    <span style="color:red" class="help-block">
                                                                    <p>{{ $errors->first('title') }}</p>
                                                                    </span>
                                                                @endif --}}
                                                    </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <!-- <label for="">Category</label>
                                                            <input type="text" class="form-control" name="category"> -->
                                                            <label for="genre">Category :</label>
                                                            <select name="category" id="" class="form-control center">
                                                                @foreach ($category as $categories)
                                                                <option value="{{ $categories->id }}"> {{ $categories->name }}</option>
                                                                @endforeach
                                                            </select> 
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid Year is required">
                                                            <label for="genre">Year</label>
                                                            <input type="number" min="0" max="2100" class="form-control" name="year">
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                            <div class="form-group">
                                                                <label for="genre">Tag</label>
                                                                <input type="text" class="form-control" name="tag">
                                                            </div>
                                                        </div>
                                                </div>
                                        
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid author is required" has-feedback{{ $errors->has('author') ? 'has-error' : '' }}">
                                            <label for="">Author</label>
                                            <input type="text" class="input100 form-control" required autofocus name="author">
                                                {{-- @if($errors->has('title'))
                                                    <span style="color:red" class="help-block">
                                                    <p>{{ $errors->first('title') }}</p>
                                                    </span>
                                                @endif --}}
                                        </div>
                                      
                                        <div class="form-group wrap-input100 validate-input" data-validate = "Valid Publisher is required" has-feedback{{ $errors->has('publisher') ? 'has-error' : '' }}">
                                            <label for="">Publisher</label>
                                            <input type="text" class="input100 form-control" required autofocus name="publisher">
                                                {{-- @if($errors->has('title'))
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error)
                                                    <span style="color:red" class="help-block">
                                                    <p>{{ $errors->first('title') }}</p>    
                                                    </span>
                                                    @endforeach
                                                @endif
                                                @endif --}}
                                        </div>
                                        <div class="form-group wrap-input100 validate-input" has-feedback{{ $errors->has('description') ? 'has-error' : '' }}">
                                            <label for="Content">Description</label>
                                            <textarea name="description" rows="10" class="form-control"></textarea>
                                            {{-- @if($errors->has('content'))
                                                <span style="color:red" class="help-block">
                                                    <p>{{ $errors->first('content') }}</p>
                                                </span>
                                            @endif --}}
                                        </div>
                                        <div class="form-group wrap-input100 validate-input" has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                                            <label for="Content">Review</label>
                                            <textarea name="review" rows="5" class="form-control"></textarea>
                                            {{-- @if($errors->has('content'))
                                                <span style="color:red" class="help-block">
                                                    <p>{{ $errors->first('content') }}</p>
                                                </span>
                                            @endif --}}
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