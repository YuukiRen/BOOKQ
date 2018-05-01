<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookQ Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <form class="form-horizontal" method ="POST" action="{{ url('/insert') }}">
					{{csrf_field()}}
				  <fieldset>
				    <legend>Database Application</legend>
				    @if(count($errors)>0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-dismissible alert-danger">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  {{$error}}
							</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="exampleInputEmail1">Title</label>
				      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Description</label>
				    	<textarea name="description" class="form-control" placeholder="Description"></textarea>
				    </div>
				    <button type="submit" class="btn btn-primary">Submit</button>
				    <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
				  </fieldset>
				</form>
</body>
</html>
