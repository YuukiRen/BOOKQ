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
        <div class="row">
        @foreach($books->all() as $book)
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100" style="border:1px solid grey">
            <div>
            <a href="viewbook/{{$book->book_id}}"><img height=350px class="card-img-top" src="images/{{$book->image}}" alt=""></a>
          </div>
            <center> <font size=1><u>Click the image to see the details</u></font></center>
            <div class="card-body">
              <div style="positon:relative;bottom:0px">
              <font size=3 class="card-title"> <b> {{$book->title}} </b></font></a> <br> 
              <table style="font-size:small">
                  <tr>
                      <td valign="top">Category</td>
                      <td valign="top">&nbsp;:&nbsp;</td>
                      <td>{{$book->category}}</td>
                    </tr>    
                <tr>
                  <td valign="top">Author</td>
                  <td valign="top">&nbsp;:&nbsp;</td>
                  <td>{{$book->author}}</td>
                </tr>
                <tr>
                    <td valign="top">Publisher</td>
                    <td valign="top">&nbsp;:&nbsp;</td>
                    <td>{{$book->publisher}}</td>
                  </tr>
                  <tr>
                      <td valign="top">Year</td>
                      <td valign="top">&nbsp;:&nbsp;</td>
                      <td>{{$book->year}}</td>
                    </tr>
              </table>
        </div>
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
