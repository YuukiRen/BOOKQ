<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Your Book</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap_search/css/bootstrap.min.css" rel="stylesheet">
    <link href="netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BOOKQ</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Choose Your Book
        <small>Explore The World</small>
      </h1>
  <div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Kategori</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#Business">Business</a></li>
                      <li><a href="#Novel">Novel</a></li>
                      <li><a href="#Comic">Comic </a></li>
                      <li><a href="#Health">Health </a></li>
                      <li><a href="#Lifestyle">Lifestyle </a></li>
                      <li><a href="#Education">Education </a></li>
                      <li><a href="#Technology">Technology  </a></li>
                      <li><a href="#Religion">Religion  </a></li>
                      <li class="divider"></li>
                      <li><a href="#History">History</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search Book">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> Search <span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
  </div>
</div>
<br>
      <?php $counter=0; ?>
      @if(count($books)>0)
        @foreach($books->all() as $book) <?php $counter++;?> 
      
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/buku1.png" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">
                <a href="viewbook">{{$book->title}}</h5></a>
              <p class="card-text">{{$book->description}}
            </p>
         <a href="#" class="btn btn-success"  >Borrow This Book</a>
            </div>
          </div>
        </div>
        @endforeach  
      @endif
        
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery_search/jquery.min.js"></script>
    <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
