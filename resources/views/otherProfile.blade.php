<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$users->name}}'s Profile</title>

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
            <div class="center card col-md-11 pb-2"> 
            <div class="row">
                <div class="col-md-3 mt-4">
                    <img class="img-responsive img-user img-center" src="{{asset($users->user_image)}}" alt="">
                    <div class="row">
                    
                    </div>
                </div>
                <div class="card-body mt-4 col-md-9">
                    <h3 class="card-title">{{$users->name}} <a href="{{url("/profile/{$users->id}/edit")}}" class="btn btn-primary btn-sm">Edit Profile</a></h3> <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        @if ( !empty ( $users->nim ) ) 
                                            <td valign="top"> NIM </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->nim}} </td>
                                        
                                        @else
                                            <td valign="top"> NIM </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if ( !empty ( $users->address ) ) 
                                            <td valign="top"> Address </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->address}} </td>
                                        @else
                                            <td valign="top"> Address </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                        @endif
                                    </tr> 
                                    <tr>
                                        @if ( !empty ($users->line_id) )
                                            <td valign="top"> Line ID </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->line_id}} </td>
                                        @else
                                            <td valign="top"> Line ID </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                        @endif
                                    </tr> 
                                    <tr>
                                        @if ( !empty ($users->phone_number) )
                                                <td valign="top"> Phone No. </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->phone_number}} </td>
                                        @else
                                            <td valign="top"> Phone No. </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if ( !empty ($users->fav_book) )
                                        <td valign="top"> Interest </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->fav_book}} </td>
                                    @else
                                        <td valign="top"> Interest </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                    @endif
                                    </tr>
                                </table>
                              </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">About Me</h5>
                                            @if(!empty($users->about_me))
                                                <p class="card-text">{{ $users->about_me }}</p>
                                            @else   
                                                <p class="card-text">-</p>
                                            @endif
                                </div> 
                                </div>
                            </div>
                        </div> <hr>
                        <h4 class="card-title text-center">Book's Owned</h4> 
                    <div class="row"> 
                            
                            @foreach($books->all() as $book)
                            @if(($book->show==1))
                            <div class="col-lg-2 col-md-3 col-sm-4 portfolio-item">
                                <div class="img-frame-profile">
                                <a href='{{ url("viewbook/{$book->id}") }}'><img class="card-img-top img-responsive img-cover-profile" src="{{asset($book->image)}}" alt=""></a>
                                </div>
                            </div>
                            @endif
                            @endforeach  
                        </div>
                    </div>
                </div> <br>
                    </div>
                </div>
            </div>
        <br>
          <!-- /.card -->
          <div class="row">
            <div class="card col-9 center">
                <ul class="nav nav-tabs" id="userTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="true">Recent Activities(history)</a>
                    </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                        <div class="card-body">
                        
                            @foreach($activities->all() as $activity)
                                @if($activity->status==0)
                                <p><small class="text-muted">{{ $activity->request_date }} </small>{{App\User::find($activity->id_booker)->name}} have sent request to {{App\User::find($activity->id_lender)->name}} to borrow {{ App\Book::find($activity->book_id)->title }}</p>
                                @endif
                                @if($activity->status==1)
                                <p><small class="text-muted">{{ $activity->lend_date }} </small>{{App\User::find($activity->id_lender)->name}} accepted {{App\User::find($activity->id_borrow)->name}} request for borrowing "{{ App\Book::find($activity->book_id)->title }}"!</p>
                                @endif
                                @if($activity->status==2)
                                <p><small class="text-muted">{{ $activity->return_date }} </small>{{App\User::find($activity->id_booker)->name}} have returned {{App\User::find($activity->id_lender)->name}}'s "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                @endif
                                @if($activity->status==3 )
                                <p><small class="text-muted">{{ $activity->reject_date }} </small>{{App\User::find($activity->id_booker)->name}} request have been rejected by {{App\User::find($activity->id_lender)->name}}'s request for "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                @endif
                            @endforeach
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
