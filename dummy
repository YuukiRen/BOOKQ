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
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

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
        <div class="col-xl-4 mt-4">
        <img class="img-responsive img-book img-center" src="{{asset($books->image)}}" alt="">
        @if(!App\Book::where([['user_id', $users],['id', $books->id]])->first())
        <div class="row center" style="margin-top:10px">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#borrowmodal">
            Borrow this Book
          </button> 
          <button type="button" class="btn btn-danger btn-sm center mt-2" data-toggle="modal" data-target="#reportbookmodal">
              Report this Book
            </button>          
            @include('layouts.partial.reportbookmodal')     
        </div>
        @endif
        @if(( App\Book::where([['user_id', $users],['id', $books->id]])->first() ))<a href="{{url("/viewbook/{$books->id}/edit")}}" class="btn btn-primary btn-block mt-2">Edit Book</a>@endif
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
                        <td valign="top"><h5>Name </h5> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h5> {{App\User::find($books->user_id)->name}} </h5> </td>
                      </tr>
                      <tr>
                        <td valign="top"><h5> Phone Number </h5> </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> <h5>{{App\User::find($books->user_id)->phone_number}} </h5></td>
                      </tr> 
                      <tr>
                        <td valign="top"><h5> LINE ID </h5> </td><td valign="top">&nbsp;:&nbsp;</td><td> <h5> {{App\User::find($books->user_id)->line_id}} </h5> </td>
                      </tr> 
                      <h5>
                        <td valign="top"><h5> Address </h5> </td><td valign="top">&nbsp;:&nbsp;</td><td> <h5> {{App\User::find($books->user_id)->address}} </h5> </td>
                      </tr> 
                  </table>
                </div>
                <div class="modal-footer">
                @if(( App\Book::where([['user_id', $users],['id', $books->id]])->first() ))
                  <a class="disabled">Cannot Lend your own book :)</a>
                @elseif( !( App\Transaction::where([['id_booker', $users],['book_id', $books->id]])->first() )  )
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href='{{ url("/request/$books->id") }}' class="btn btn-primary">Send Request</a>
                @elseif(( App\Transaction::where([['id_booker', $users],['book_id', $books->id]])->first() ))
                  <a class="disabled">Request Sent</a>
                @else
                 <a class="disabled">SOMETHING WRONG, CONTACT THE ADMIN</a>
                @endif
                <!-- Experimental -->
                <form class="form-horizontal" id="send" method="POST"  action='{{ url("/messages/send") }}' >
                {{csrf_field()}}  
                <input type="hidden" name="other_id" value="{{App\User::find($books->user_id)->id}}">
                <input type="hidden" name="message" value="Apakah buku ''{{$books->title}}'' anda mau dipinjamkan?">
                <button class="btn btn-info" type="submit">Messages</input>
                </form>
                 <!-- /Experimental -->
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

        <div class="card-body mt-4 px-4 col-xl-8">
          
          <h2 class="card-title">{{$books->title}}     </h2>
         <span class="thick">by <span style="color:grey">{{$books->author}}</span></span>
         <div><font size=2 class="thick">Published in {{$books->year}} by {{$books->publisher}}</font><span>
        <div class="row">
          <div class="col">
              @include('layouts.partial.rating')  
          </div>         
        </div>
        
      <hr>
      <div class="row py-2">
        <div class="col"> 
          <font size=3 class="show-read-more">{{$books->description}}</font>
        </div>              
      </div> <hr>
      <div class="row"> 
          <div class="col">
            <h4>Book Owner's Review</h4>
            <font size=3>{{$books->review}}</font>
          </div>
      </div>
      <hr>
        </div>
      </div> 
            </div>
          </div>
        </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4 col-md-11 center">
            <div class="card-body">
              <h4 for="Content" class="thick">Review  <a href="#comment" class=" btn btn-info btn-sm"> <u> <i class="fa fa-plus"></i> Leave a Review </u> </a></h4>
              <hr>  
              
              @foreach($comments->all() as $comment)
                <div class="row">
                  <div class="col-md-1">
                    <img class="img-responsive img-user-comment" src="{{asset(App\User::find($comment->user_id)->user_image)}}" alt=""> 
                  </div>
                  <div class="col-md-11">
                    <p>{{$comment->comment}}</p>
                    <small class="text-muted">Posted by {{App\User::find($comment->user_id)->name}} on {{$comment->updated_at->format('l, d F Y [H:i:s]')}}</small>
                  </div>
                </div>
                <hr>
                @endforeach
                    <form class="form-horizontal" method="POST"  action='{{ url("/post/{$books->id}") }}' >
                      {{csrf_field()}}
                  <div class="row">
                    @if( !( App\Comment::where([['user_id', $users],['book_id', $books->id]])->first() ) )
                    <div class="col-md-10">
                      <div class="form-group  has-feedback{{ $errors->has('review') ? 'has-error' : '' }}">
                          <textarea id="comment" name="review" rows="5" class="form-control"></textarea>
                          {{-- @if($errors->has('content'))
                              <span style="color:red" class="help-block">
                                  <p>{{ $errors->first('content') }}</p>
                              </span>
                          @endif --}}
                      </div>
                    </div>
                    <div class="col-md-2">
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
                            <textarea name="review" id="comment" rows="5" class="form-control"></textarea>
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
                          <div class="center col-md-10 ">
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
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      var maxLength = 300;
      $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
          var newStr = myStr.substring(0, maxLength);
          var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
          $(this).empty().html(newStr);
          $(this).append('<span class="read-more">.... <a href="javascript:void(0);" class="text-primary">(read more)</a></span>');
          $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
      });
      $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
      });
    });
    </script>
  </body>
</html>
