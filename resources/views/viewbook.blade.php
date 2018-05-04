<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$books->title}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> 

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include('layouts.partial.header')

     <!-- Page Content -->
    <div class="container">
      
      <div class="row">

     
        <div class="center card col-lg-10"> 
          <div class="row">
        <div class="col-md-6 mt-4">
        <img width=75% height=100% align=center src="images/book2.jpg">
        </div>

        <div class="card-body mt-4 col-md-6">
          <h3 class="card-title">{{$books->title}}</h3>
          <table class="table1">
              <tr>
                  <td> Category </td> <td>&nbsp;:&nbsp;</td> <td> {{$books->category}} </td>
                </tr>
            <tr>
              <td> Author </td> <td>&nbsp;:&nbsp;</td>  <td> {{$books->author}} </td>
            </tr> 
            <tr>
              <td> Publisher </td><td>&nbsp;:&nbsp;</td><td> {{$books->publisher}} </td>
            </tr> 
            <tr>
              <td> Published </td><td>&nbsp;:&nbsp;</td><td> {{$books->year}} </td></tr>
        </table>
        </div>
      </div>
              <h3 class="card-title">Description</h3>
              <p class="card-text">{{$books->description}}</p>
                
                <h3 class="card-title">Rating</h3>
                <div class="row">
                <div class="col-1">
                <span class="fas fa-star fa-3x center checked text-warning"></span>
                </div>
                <div class="col">             
                <h4 class="center">(NilaiFloating) / 10</h4>
                </div>                  
              </div>
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
            </div>
            </div>
          </div>
        </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Book Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
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
