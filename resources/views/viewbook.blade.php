<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$books->title}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/agency.css')}}" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation -->
    @include('layouts.partial.header')
    <br>
     <!-- Page Content -->
    <div class="container">
      <div class="row"> 
        <div class="center card col-lg-10 px-2 py-2"> 
          <div class="row">
        <div class="col-md-4 mt-4">
        <img class="img-responsive img-book img-center" src="{{asset($books->image)}}" alt="">
        <div class="row center" style="margin-top:10px">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#borrowmodal">
            Borrow this Book
          </button> 
          <button type="button" class="btn btn-danger btn-block " data-toggle="modal" data-target="#reportbookmodal">
              Report this Book
            </button>          
            @include('layouts.partial.reportbookmodal')     
        </div>   
                  <!-- Modal -->
          <div class="modal fade" id="borrowmodal" tabindex="-1" role="dialog" aria-labelledby="borrowmodalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="borrowmodalLongTitle">Owner's Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <table>
                      <tr>
                        <td valign="top">Name </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{App\User::find($books->user_id)->name}} </td>
                      </tr>
                      <tr>
                        <td valign="top"> Phone No. </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> {{App\User::find($books->user_id)->phone_number}} </td>
                      </tr> 
                      <tr>
                        <td valign="top"> LINE ID </td><td valign="top">&nbsp;:&nbsp;</td><td> {{App\User::find($books->user_id)->line_id}} </td>
                      </tr> 
                      <tr>
                        <td valign="top"> Address </td><td valign="top">&nbsp;:&nbsp;</td><td> {{App\User::find($books->user_id)->address}} </td>
                      </tr> 
                  </table>
                </div>
                <div class="modal-footer">
                  <a href='{{ url("/request/$books->id") }}' class="btn btn-primary">Send Request</a>
                </div>
              </div>
            </div>
          </div>

          <script>
              $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
                })
          </script>
        </div>

        <div class="card-body mt-4 col-md-8">
          
          <h3 class="card-title">{{$books->title}}</h3>
          <div class="row">
              <div class="col-md-6">
          <table>
              <tr>
                  <td valign="top"> Category </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$books->category}} </td>
                </tr>
            <tr>
              <td valign="top"> Author </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> {{$books->author}} </td>
            </tr> 
            <tr>
              <td valign="top"> Publisher </td><td valign="top">&nbsp;:&nbsp;</td><td> {{$books->publisher}} </td>
            </tr> 
            <tr>
              <td valign="top"> Published </td><td valign="top">&nbsp;:&nbsp;</td><td> {{$books->year}} </td></tr>
        </table>
      </div>
      <div id="rating" class="col-md-6">
        <div class="row">
          <div class="col-3">
            <span class="fas fa-star fa-4x center checked" style="color:#FFDF00"></span>
          </div>
          <div class="col">            
            <h1 style="margin-top:10px">&nbsp;@if($ratings){{$ratings}}@else{{0}}@endif / 5</h1>
          </div>                  
        </div>
      </div>
      </div>
      <div class="row"> 
          <div class="col"> <br>
            <h5 class="card-title">Book Owner's Review</h5>
            <p class="card-text">{{$books->review}}</p>
          </div>
      </div>
      {{-- <div class="row py-2">
        <div class="col"> 
              <h5 class="card-title">Description</h5>
              <p class="card-text">{{$books->description}}</p>
            </div>              
      </div> --}}
        </div>
      </div> 
            </div>
          </div>
        </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4 col-9 center">
            <div class="card-header">
           <label for="" class="thick"> Book Reviews </label>  
            </div>
            <div class="card-body">
              @foreach($comments->all() as $comment)
              <p>{{$comment->comment}}</p>
              <small class="text-muted">Posted by {{App\User::find($comment->user_id)->name}} on {{$comment->updated_at}}</small>
              <hr>
              @endforeach
              <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Leave a Review
                </button> 
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form class="form-horizontal" method="POST"  action='{{ url("/post/{$books->id}") }}' >
                          {{csrf_field()}}
                          <div class="row">
                            @if( !( App\Comment::where([['user_id', $users],['book_id', $books->id]])->first() ) )
                            <div class="col-10">
                              <div class="form-group  has-feedback{{ $errors->has('review') ? 'has-error' : '' }}">
                                  <label for="Content" class="thick">Review</label>
                                  <textarea name="review" rows="5" class="form-control"></textarea>
                                  {{-- @if($errors->has('content'))
                                      <span style="color:red" class="help-block">
                                          <p>{{ $errors->first('content') }}</p>
                                      </span>
                                  @endif --}}
                              </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="rating" class="thick">Rating</label>
                                    <select name="rating" id="" class="form-control center">
                                        <option value="5"> &#9733;&#9733;&#9733;&#9733;&#9733; </option>
                                        <option value="4"> &#9733;&#9733;&#9733;&#9733; </option>
                                        <option value="3"> &#9733;&#9733;&#9733; </option>
                                        <option value="2"> &#9733;&#9733; </option>
                                        <option value="1"> &#9733; </option> 
                                    </select> 
                                </div>
                            </div>
                            @else
                            <div class="col-12">
                                <div class="form-group  has-feedback{{ $errors->has('review') ? 'has-error' : '' }}">
                                    <label for="Content" class="thick">Review</label>
                                    <textarea name="review" rows="5" class="form-control"></textarea>
                                    {{-- @if($errors->has('content'))
                                        <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('content') }}</p>
                                        </span>
                                    @endif --}}
                                </div>
                              </div>
                            {{-- <label for="" class="thick">Rating</label> --}}
                            @endif


                          </div>
                            <div class="row">
                              <div class="center col-md-10">
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
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery_search/jquery.min.js"></script>
    <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
