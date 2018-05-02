@include('layouts.partial.head')
<body>
    @include('layouts.partial.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <div class="panel panel-info" style="border-color:black">
                            <h1 class="my-4">Lend a Book
                                    <font size=3>Share your Knowledge!</font>
                                  </h1>
                        <div class="panel-body">
                            <form class="" action="" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                    <div class="col-4">
                                            Book image: <br>
                                            <div style="border:1px solid black;height:200px;width:140px"></div>
                                            <input type="file" name="pic" id="pic"> <br><br>
                                            <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                                    <label for="">Tag</label>
                                                    <input type="text" class="form-control" name="title">
                                                        {{-- @if($errors->has('title'))
                                                            <span style="color:red" class="help-block">
                                                            <p>{{ $errors->first('title') }}</p>
                                                            </span>
                                                        @endif --}}
                                            </div> 
                                            <div class="form-group">
                                                <label for="genre">Category :</label>
                                                <select name="categories_id" id="" class="form-control" style="width:auto;overflow:hidden" >
                                                    @foreach ($category as $categories)
                                                    <option value="{{ $categories->id }}"> {{ $categories->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title">
                                        {{-- @if($errors->has('title'))
                                            <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('title') }}</p>
                                            </span>
                                        @endif --}}
                                    </div>
                                    <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                        <label for="">Author</label>
                                        <input type="text" class="form-control" name="title">
                                            {{-- @if($errors->has('title'))
                                                <span style="color:red" class="help-block">
                                                <p>{{ $errors->first('title') }}</p>
                                                </span>
                                            @endif --}}
                                        </div>
                                        
                                    {{--                                
                                    <div class="form-group">
                                        <label for="genre">Choose your topic :</label>
                                        <select name="categories_id" id="" class="form-control" style="width: 150px;height: 30px" >
                                            @foreach ($categories as $categories)
                                            <option value="{{ $categories->id }}"> {{ $categories->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                         --}}       
                                    <div class="form-group  has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                                        <label for="Content">Description</label>
                                        <textarea name="content" rows="10" class="form-control"></textarea>
                                        {{-- @if($errors->has('content'))
                                            <span style="color:red" class="help-block">
                                                <p>{{ $errors->first('content') }}</p>
                                            </span>
                                        @endif --}}
                                    </div>
                                    <div class="form-group  has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                                    <label for="Content">Review</label>
                                    <textarea name="content" rows="5" class="form-control"></textarea>
                                    {{-- @if($errors->has('content'))
                                        <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('content') }}</p>
                                        </span>
                                    @endif --}}
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" style="border-color:black;" value="SUBMIT" >
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>

       
    </div>
</body>