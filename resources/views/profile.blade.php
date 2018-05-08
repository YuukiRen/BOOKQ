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

  </head>
  <body>
    <!-- Navigation -->
    @include('layouts.partial.header')
    <br>
     <!-- Page Content -->
    <div class="container">
      <div class="row"> 
        <div class="center card col-lg-10"> 
          <div class="row">
            <div class="col-md-3 mt-4">
            {{-- <img align=center class="img-responsive" src="{{asset($books->image)}}" alt=""> --}}Foto User
            </div>
            <div class="card-body mt-4 col-md-9">
                <h3 class="card-title">{{$users->name}}</h3>
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
                                @if ( !empty ( $users->alamat ) ) 
                                    <td valign="top"> Address </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->alamat}} </td>
                                @else
                                    <td valign="top"> Address </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                @endif
                            </tr> 
                            <tr>
                                @if ( !empty ( $users->id_line ) )
                                    <td valign="top"> Line ID </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->id_line}} </td>
                                @else
                                    <td valign="top"> Line ID </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                @endif
                            </tr> 
                            <tr>
                                @if ( !empty ( $users->nomor_hp) )
                                        <td valign="top"> Phone No. </td> <td valign="top">&nbsp;:&nbsp;</td> <td> {{$users->nim}} </td>
                                @else
                                    <td valign="top"> Phone No. </td> <td valign="top">&nbsp;:&nbsp;</td> <td> - </td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col"> <br>
                        <h4 class="card-title">About Me</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis deserunt adipisci aliquam praesentium, consectetur impedit iste ipsum deleniti, neque voluptate suscipit. Placeat, porro praesentium? Illum debitis adipisci doloribus consectetur ad!</p>
                    </div>
                </div>
             </div>
         </div> <br>
            </div>
          </div>
        </div>
        <br>
          <!-- /.card -->
          <div class="row">
            <div class="card col-11 center">
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
                            <p><small class="text-muted">3/1/17 </small>Borrowed a book from (user)</p>
                            <hr>
                            <p><small class="text-muted">3/1/17 </small>Lended a book to (user)</p>
                            <hr>
                            <p><small class="text-muted">3/1/17 </small>Added (book) to the database!</p>
                            <hr>
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="borrow" role="tabpanel" aria-labelledby="borrow-tab">
                        <div class="card-body">
                            {{-- @if($transaction->status==0)
                                <p><small class="text-muted">5/1/17 </small>Sent Request to {{$books->user_id->name}} to borrow {{$books->title}}</p>
                            @if($transaction->status==1)
                                <p><small class="text-muted">6/1/17 </small>{{$books->user_id->name}} accepted your request!</p>
                            @if($transaction->status==2)
                                <p><small class="text-muted">7/1/17 </small>You have returned {{$books->user_id->name}}'s book</p>
                            @endif --}}
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="lend" role="tabpanel" aria-labelledby="lend-tab">
                        <div class="card-body">
                            {{-- @if($transaction->status==0)
                                <p><small class="text-muted">5/1/17 </small>{{$books->user_id->name}} wants to borrow "{{$books->title}}"</p>
                                <button>See Details</button>
                                @include('layouts.partial.transactionlend')
                            @if($transaction->status==1)
                                 <p><small class="text-muted">6/1/17 </small>You lended "{{$book->name}}" to {{lender}}</p>
                            @if($transaction->status==2)
                                <p><small class="text-muted">7/1/17 </small>{{lender}} have returned your "{{$books->user_id->name}}"</p>
                            @endif --}}
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


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery_search/jquery.min.js"></script>
    <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
