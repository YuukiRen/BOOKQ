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
                    <h1 class="card-title">{{$users->complete_name}} </h1>
                    <h3 class="card-title">{{$users->name}} 
                     </h3><a href="{{url("/profile/{$users->id}/edit")}}" class="btn btn-primary btn-sm">Edit Profile</a> <hr>
                    
                        <div class="row">
                            <div >
                                <table>
                                    <tr>
                                        @if ( !empty ( $users->nim ) ) 
                                            <td valign="top"><h4> NIM </h4></td> <td valign="top">&nbsp;:&nbsp;</td> <td><h4> {{$users->nim}} </h4></td>
                                        
                                        @else
                                            <td valign="top"><h4> NIM </h4></td> <td valign="top">&nbsp;:&nbsp;</td> <td><h4> - </h4> </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if ( !empty ( $users->address ) ) 
                                            <td valign="top"><h4> Address </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h4> {{$users->address}} </h4></td>
                                        @else
                                            <td valign="top"><h4> Address </h4></td> <td valign="top">&nbsp;:&nbsp;</td> <td><h4> -</h4> </td>
                                        @endif
                                    </tr> 
                                    <tr>
                                        @if ( !empty ($users->line_id) )
                                            <td valign="top"> <h4> Line ID </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h4> {{$users->line_id}} </h4></td>
                                        @else
                                            <td valign="top"> <h4>Line ID </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h4> - </h4> </td>
                                        @endif
                                    </tr> 
                                    <tr>
                                        @if ( !empty ($users->phone_number) )
                                                <td valign="top"><h4> Phone Number </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td><h4> {{$users->phone_number}} </h4></td>
                                        @else
                                            <td valign="top"> <h4>Phone Number </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h4> - </h4> </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if ( !empty ($users->fav_book) )
                                        <td valign="top"><h4> Interest </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td><h4> {{$users->fav_book}}</h4> </td>
                                    @else
                                        <td valign="top"><h4> Interest </h4> </td> <td valign="top">&nbsp;:&nbsp;</td> <td> <h4> - </h4> </td>
                                    @endif
                                    </tr>
                                </table>
                                <br>
                                    <h3 class="card-title">About Me</h3>
                                            @if(!empty($users->about_me))
                                                <p class="card-text">{{ $users->about_me }}</p>
                                            @else   
                                                <p class="card-text">-</p>
                                            @endif
                                </div> 
                                </div>
                                <hr>
                            </div>
                        </div> 
                        <h4 class="card-title text-center">Book's Owned</h4> 
                    <div class="row"> 
                            @foreach($books->all() as $book)
                            @if(($book->show==1))
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                <div class="img-frame-profile">
                                  <a href='{{ url("viewbook/{$book->id}") }}'><img class="img-responsive img-cover-profile" src="{{asset($book->image)}}" alt=""></a>
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
            <!-- /.card -->
            <div class="row">
                <div class="card col-9 center pb-2">
                    <ul class="nav nav-tabs" id="userTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="true">Recent Activities(history)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="borrow-tab" data-toggle="tab" href="#borrow" role="tab" aria-controls="borrow" aria-selected="false">Borrow</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lend-tab" data-toggle="tab" href="#lend" role="tab" aria-controls="lend" aria-selected="false">Lend</a>
                        </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                            <div class="card-body">
                                @foreach($activities->all() as $activity)
                                    @if(App\User::find($activity->id_booker) == $users)
                                        @if($activity->status==0)
                                        <p><small class="text-muted">{{ $activity->request_date }} </small>You have sent request to {{App\User::find($activity->id_lender)->name}} to borrow "{{ App\Book::find($activity->book_id)->title }}"</p>
                                        @endif
                                        @if($activity->status==1)
                                        <p><small class="text-muted">{{ $activity->lend_date }} </small>{{App\User::find($activity->id_lender)->name}} accepted your request for borrowing "{{ App\Book::find($activity->book_id)->title }}"!</p>
                                        @endif
                                        @if($activity->status==2)
                                        <p><small class="text-muted">{{ $activity->return_date }} </small>You have returned {{App\User::find($activity->id_lender)->name}}'s "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                        @endif
                                        @if($activity->status==3 )
                                        <p><small class="text-muted">{{ $activity->reject_date }} </small>Your request have been rejected by {{App\User::find($activity->id_lender)->name}}'s request for "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                        @endif
                                    @elseif(App\User::find($activity->id_lender) == $users)
                                        @if($activity->status==0)
                                        <p><small class="text-muted">{{ $activity->request_date }} </small>{{App\User::find($activity->id_booker)->name}} have sent request to you to borrow "{{ App\Book::find($activity->book_id)->title }}"</p>
                                        @endif
                                        @if($activity->status==1)
                                        <p><small class="text-muted">{{ $activity->lend_date }} </small>You accepted {{App\User::find($activity->id_booker)->name}} request for borrowing "{{ App\Book::find($activity->book_id)->title }}"!</p>
                                        @endif
                                        @if($activity->status==2)
                                        <p><small class="text-muted">{{ $activity->return_date }} </small>{{App\User::find($activity->id_booker)->name}} have returned your's "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                        @endif
                                        @if($activity->status==3 )
                                        <p><small class="text-muted">{{ $activity->reject_date }} </small>You have rejected {{App\User::find($activity->id_booker)->name}}'s request for "{{ App\Book::find($activity->book_id)->title }}" book</p>
                                        @endif
                                    @endif
                                @endforeach
                                <hr>
                                
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="borrow" role="tabpanel" aria-labelledby="borrow-tab">
                            <div class="card-body">
                                    @foreach($requests_borrow->all() as $request_b)
                                    @if($request_b->status==0)
                                        <p><small class="text-muted">{{ $request_b->request_date }} </small>Sent request to {{App\User::find($request_b->id_lender)->name}} to borrow "{{ App\Book::find($request_b->book_id)->title }}"</p>
                                    @endif
                                    @if($request_b->status==1)
                                        <p><small class="text-muted">{{ $request_b->lend_date }} </small>{{App\User::find($request_b->id_lender)->name}} accepted your request for borrowing "{{ App\Book::find($request_b->book_id)->title }}"!</p>
                                    @endif
                                    @if($request_b->status==2)
                                    <p><small class="text-muted">{{ $request_b->return_date }} </small>You have returned {{App\User::find($request_b->id_lender)->name}}'s "{{ App\Book::find($request_b->book_id)->title }}" book</p>
                                    @endif
                                    @if($request_b->status==3)
                                    <p><small class="text-muted">{{ $request_b->reject_date }} </small>{{App\User::find($request_b->id_lender)->name}} have declined your request for "{{ App\Book::find($request_b->book_id)->title }}"</p>
                                    @endif
                                    
                                    @endforeach
                                    <hr>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="lend" role="tabpanel" aria-labelledby="lend-tab">
                            <div class="card-body">
                                    @foreach($requests_lend->all() as $request_l) 
                                    @if($request_l->status==0)
                                        <p><small class="text-muted">{{ $request_l->request_date }} </small>{{App\User::find($request_l->id_booker)->name}} wants to borrow "{{ App\Book::find($request_l->book_id)->title }}" 
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#b_notif_modal">
                                                See Details
                                            </button> 
                                        </p>
                                        @include('layouts.partial.b_notif_modal')
                                    @endif
                                    @if($request_l->status==1)
                                    <p><small class="text-muted">{{ $request_l->lend_date }} </small>You lended "{{ App\Book::find($request_l->book_id)->title }}" to {{App\User::find($request_l->id_booker)->name}} <a href='{{ url("/return/{$request_l->id}") }}' class="btn btn-primary pull-right">I have Received my Book back</a></p>
                                    
                                    @endif
                                    @if($request_l->status==2)
                                    <p><small class="text-muted">{{ $request_l->return_date }} </small>{{App\User::find($request_l->id_booker)->name}} have returned your "{{ App\Book::find($request_l->book_id)->title }}"</p>
                                    @endif
                                    @if($request_l->status==3)
                                    <p><small class="text-muted">{{ $request_l->reject_date }} </small>You have declined {{App\User::find($request_l->id_booker)->name}}'s request for "{{ App\Book::find($request_l->book_id)->title }}"</p>
                                    @endif
                                    @endforeach
                                    
                                <hr>
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


        <!-- Bootstrap core JavaScript 
        <script src="../vendor/jquery_search/jquery.min.js"></script>
        <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>-->

    </body>

    </html>
