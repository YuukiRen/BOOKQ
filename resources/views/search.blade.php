<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Your Book</title>

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

      <!-- Page Heading -->
      <h1 class="my-4">Choose Your Book
        <font size=3>Explore The World!</font>
      </h1>
  <div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
          <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Category
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#Business">Business</a>
                      <a href="#Novel">Novel</a>
                      <a href="#Comic">Comic </a>
                      <a href="#Health">Health </a>
                      <a href="#Lifestyle">Lifestyle </a>
                      <a href="#Education">Education </a>
                      <a href="#Technology">Technology  </a>
                      <a href="#Religion">Religion  </a>
                      <a href="#History">History</a>
                    </div>
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
        <div class="row">
        @foreach($books->all() as $book)
        <div class="col-lg-2 col-md-3 col-sm-4 portfolio-item">
          <div class="card h-100" >
            <div>
            <a href="viewbook/{{$book->book_id}}"><img class="card-img-top cover" src="images/{{$book->image}}" alt=""></a>
          </div>
            <div class="card-body">
              <a href="viewbook/{{$book->book_id}}"> <font size=2 class="card-title text-dark"> <b> {{str_limit($book->title, 70, '...')}} </b></font></a> <br> </a>
                <table>
                    <tr>
                        <td><font size=1 class="text-muted">{{$book->author}}</font></td>
                      </tr> 
                </table>
            </div>
          </div>
        </div>
        @endforeach  
      
    </div>
    <div class="text-justify-center">
        {{$books->links()}}  
    </div> 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery_search/jquery.  js"></script>
    <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
