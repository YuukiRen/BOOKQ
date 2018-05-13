@include('layouts.partial.head')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BookQ</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  </head>
  <body>
    @include('layouts.partial.header')
    <div class="container" style="margin-top: 50px;margin-bottom: 30px;">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">What do you want to do?</h2>
          <h5 class="section-subheading text-muted">Choose your role!</h5>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <a href="control">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x homeicon"></i>
            <i class="fa fa-book fa-stack-1x fa-inverse" ></i>
          </span>
        </a>
          <h4 class="service-heading">Report</h4>
         
        </div>
        <div class="col-md-6">
        <a href="search">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x homeicon"></i>
            <i class="fas fa-people-carry fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <h4 class="service-heading">Delete</h4>
        </div>
      </div>
      <br>
      <hr style="border-color:black;margin:7px 0px"/>
    </div>
    <!-- Footer -->
    <!-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
        </div>
      </div>
    </footer> -->

   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>
  {{-- @include('layouts.partial.footer') --}}
</html>
