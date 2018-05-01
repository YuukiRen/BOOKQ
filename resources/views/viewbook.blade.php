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

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include('layouts.partial.searchheader')

     <!-- Page Content -->
    <div class="container">
      
      <div class="row">

     
        <div class="card col-lg-9"> 
          <div class="row">
        <div class="col-md-6 mt-4">
          <img class="card-body" width=75% height=100% align=center src="images/buku1.png" alt="">
        </div>

        <div class="card-body mt-4 col-md-6">
          <h3 class="card-title">{{$books->title}}</h3>
          <table class="table1">
            <tr>
              <td> Author </td> <td>  :  </td>  <td> {{$books->author}} </td>
            </tr> 
            <tr>
              <td> Penerbit </td><td>  :  </td><td> {{$books->publisher}} </td>
            </tr> 
            <tr>
              <td> Tahun </td><td>  :  </td><td> {{$books->year}} </td></tr>
              <tr>
              <td> Kategori </td> <td>  :  </td> <td> Lorem Ipsum </td>
            </tr>
        </table>
        </div>
      </div>
              <h3 class="card-title">Deskripsi</h3>
              <p class="card-text">{{$books->description}}
</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              <p>4.0 stars</p>
              <br>
               <div class="card-footer">
              <a class="btn btn-primary btn-lg" href="#">Borrow This Book</a>
              <a class="btn btn-primary btn-lg" href="#">Report This Book</a>
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
