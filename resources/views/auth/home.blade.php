@include('layouts.partial.head')

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
            <a href="lend">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x homeicon"></i>
            <i class="fa fa-book fa-stack-1x fa-inverse" ></i>
          </span>
        </a>
          <h4 class="service-heading">Lender</h4>
          <ul class="" style="list-style-type:none">
              <li> Take a role as a lender. </li>
              <li> Enlist your book to our database, so others can see!</li>
              <li> Let them gain the knowledge and experience you had!</li>
          </ul>
        </div>
        <div class="col-md-6">
        <a href="search">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x homeicon"></i>
            <i class="fas fa-people-carry fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <h4 class="service-heading">Borrower</h4>
        <ul class="" style="list-style-type:none">
                <li> Take a role as a borrower. </li>
                <li> Pick a book from our database, then connect to the owner.</li>
                <li> Gain the knowledge and experience they had!</li>
            </ul>
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

</html>
