
@include('layouts.partial.head')
<body>
    @include('layouts.partial.header')
    <div class="container-fluid thick">
        <div class="row">
            <div class="center col-md-8">
                <div class="panel panel-info" >
                    <h1 class="my-4">Lend a Book
                            <font size=3>Share your Knowledge!</font>
                            </h1>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST"  action="{{ url('/store') }}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                            <div class="form-group">
                                                 <label for="">   Book image : </label>
                                                    <input type="file" name="image" id="pic">
                                                    
                                                
                                        
                                        
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
</body>


<html></html>