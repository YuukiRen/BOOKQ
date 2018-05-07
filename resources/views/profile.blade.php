<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nama User</title>

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
                <h3 class="card-title">Nama User</h3>
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td valign="top"> NIM </td> <td valign="top">&nbsp;:&nbsp;</td> <td> NIM </td>
                            </tr>
                            <tr>
                                <td valign="top"> Adress </td> <td valign="top">&nbsp;:&nbsp;</td>  <td> - </td>
                            </tr> 
                            <tr>
                                <td valign="top"> LINE ID </td><td valign="top">&nbsp;:&nbsp;</td><td> - </td>
                            </tr> 
                            <tr>
                                <td valign="top"> Phone No. </td><td valign="top">&nbsp;:&nbsp;</td><td> - </td>
                            </tr>
                        </table>
                    </div>
                        {{-- <div id="rating" class="col-md-6">
                            <div class="row">
                            <div class="col-3">
                                <span class="fas fa-star fa-4x center checked" style="color:#FFDF00"></span>
                            </div>
                            <div class="col">            
                                <h1 style="margin-top:10px">&nbsp;X / 5</h1>
                            </div>                  
                            </div>
                        </div> --}}
                </div>
                <div class="row"> 
                    <div class="col"> <br>
                        <h4 class="card-title">About Me</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis deserunt adipisci aliquam praesentium, consectetur impedit iste ipsum deleniti, neque voluptate suscipit. Placeat, porro praesentium? Illum debitis adipisci doloribus consectetur ad!</p>
                    </div>
                </div>
             </div>
         </div> <br>
              {{-- <h4 class="card-title">Description</h4>
              <p class="card-text">{{$books->description}}</p>
                
              <br>
               <div class="card-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#borrowmodal">
                  Borrow this Book?
                </button>          
                @include('layouts.partial.borrowmodal')    
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportbookmodal">
                  Report this Book
                </button>          
                @include('layouts.partial.reportbookmodal')
            </div> --}}
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
                            <p><small class="text-muted">5/1/17 </small>Sent Request to (user) to borrow (book)</p>
                            <hr>
                            <p><small class="text-muted">6/1/17 </small>Sent Request to (user) to borrow (book)</p>
                            <hr>
                            <p><small class="text-muted">7/1/17 </small>Sent Request to (user) to borrow (book)</p>
                            <hr>
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="lend" role="tabpanel" aria-labelledby="lend-tab">
                        <div class="card-body">
                            <p><small class="text-muted">12/1/17 </small>(user) wants to borrow your (book)</p> 
                            <button>See Details</button>
                            <hr>
                            <p><small class="text-muted">14/1/17 </small>(user) wants to borrow your (book)</p>
                            <button>See Details</button>
                            <hr>
                            <p><small class="text-muted">15/1/17 </small>(user) wants to borrow your (book)</p>
                            <button>See Details</button>
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
