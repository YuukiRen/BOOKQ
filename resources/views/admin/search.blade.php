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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- search -->
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

  </head>

  <body>

    <!-- Navigation -->
    @include('layouts.partial.header')

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col">
      <!-- Page Heading -->
      <h1 class="my-4"><span class="title px-2">Choose your Book
        <font size=3>Explore the World!</font>
    </span></h1>
  </div>
   <div id="example1_filter" class="dataTables_filter">
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group my-4">
          <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#Business">Business</a>
              <a class="dropdown-item" href="#Novel">Novel</a>
              <a class="dropdown-item" href="#Comic">Comic </a>
              <a class="dropdown-item" href="#Health">Health </a>
              <a class="dropdown-item" href="#Lifestyle">Lifestyle </a>
              <a class="dropdown-item" href="#Education">Education </a>
              <a class="dropdown-item" href="#Technology">Technology  </a>
              <a class="dropdown-item" href="#Religion">Religion  </a>
              <a class="dropdown-item" href="#History">History</a>
          </div>
        </div>
                <input type="search" name="search_param" id="search_param" class="form-control" placeholder="Search Book" aria-controls="example1">  
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> Search <span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div>
            </div>
        </div>


<br>
        <div id="example1" class="row">
        @foreach($books->all() as $book)
        @if(($book->show==1))
          <div class="col-lg-2 col-md-3 col-sm-4 portfolio-item">
            <div class="card h-100" >
              <div class="img-frame center">
              <a href="viewbook/{{$book->id}}"><img class="card-img-top img-responsive img-cover" src="{{asset($book->image)}}" alt=""></a>
              
            </div>
              <div class="card-body">
               </a>
                  <table id="example1">
                    <tr>
                     <td><a href="viewbook/{{$book->id}}"> <font size=2 class="card-title text-dark"> <b> {{str_limit($book->title, 70, '...')}} </b></font></a></td>
                   </tr>
                      <tr>
                          <td><font size=1 class="text-muted">{{$book->author}}</font></td>
                        </tr> 
                  </table>
              </div>
            </div>
          </div>
        @endif
        @endforeach  
      
    </div>
    <div class="text-justify-center">
        {{$books->links()}}  
    </div> 
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery_search/jquery.  js"></script>
    <script src="../vendor/bootstrap_search/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
<!-- jQuery -->
<script src="../vendor/datatables/jquery/jquery.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

  </body>

</html>
