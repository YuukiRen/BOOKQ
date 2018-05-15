@include('layouts.partial.head')

  <body id="page-top">
    @include('layouts.partial.header')
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <h4 > <span style="background-color: black; border-radius: 15px;padding: 5px 20px; opacity: 0.8; filter: alpha(opacity=80);"> Having trouble finding books that you want to read? </span></h4>
          <div class="intro-heading text-uppercase" style="-webkit-text-stroke: 3px black;">BookQ</div>
          <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href='{{url("/login")}}' style="border: 5px solid black">Go to Homepage</a>
        </div>
      </div>
    </header>
    <!-- Services -->
    <div class="container" style="margin-top: 50px;margin-bottom: 30px;">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">What can you do?</h2>
          <h5 class="section-subheading text-muted">Users can act either as a lender or a borrower</h5>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-book fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Lend a Book</h4>
          <p class="text-muted">Users can lend their books so that it can be borrowed by another user. The books that are lended by the user is added to our database.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x "></i>
            <i class="fas fa-people-carry fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Borrow a Book</h4>
          <p class="text-muted">Users can borrow a book that are available in our database. Lenders will be connected to borrower, make an agreement, and then lend the book.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-star fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Rate a Book</h4>
          <p class="text-muted">Users can give their thoughts on the book that are available in our database.</p>
        </div>
      </div>
      <br>
      <hr style="border-color:black;margin:7px 0px"/>
    </div>
    

    <!-- Services -->
    
      <div class="container">
          
        <div class="row">
          <div class="col-lg-12 text-center"><br>
            <h2 class="section-heading text-uppercase">What can we do?</h2>
            <h5 class="section-subheading text-muted">BookQ connecting lenders and borrowers</h5>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-link fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Connect</h4>
            <p class="text-muted">BookQ connects you to another user who wants to borrow your book, or lend you a book.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x "></i>
              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Control</h4>
            <p class="text-muted">We control the flow. Maintaining the availabilty of the books, act as a supervisor, and keeping you comfortable with optimal user experience.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x"></i>
             <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Secure</h4>
            <p class="text-muted">We protect user's information and make sure the transaction is safe and secured.</p>
          </div>
        </div>
      </div>
      <br>
      <hr style="border-color:black;margin:7px 0px"/>

    <!-- Team -->
    
      <div class="container" style="margin-top: 30px;">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Team</h2>
            <h3 class="section-subheading text-muted">Bogor Agricultural University Student</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member">
              <a href="admin"><img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="" style="border: 3px solid black"></a>
              <h4>Alvin<br>Reinaldo</h4>
              <p> G64160065 </p>
              <p class="text-muted">Back-End</p>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <a href="admin"><img class="mx-auto rounded-circle" src="img/team/3.png" alt=""></a>
              <h4>Maulvi<br>Alfansuri</h4>
              <p> G64160087 </p>
              <p class="text-muted">Back-End</p>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
             <a href="admin"> <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="" style="border: 3px solid black"> </a>
              <h4>Rheisa<br>Gusmendasari</h4>
              <p> G64160035 </p>
              <p class="text-muted">Front-End</p>

            </div>
          </div>
        <div class="col-sm-3">
            <div class="team-member">
             <a href="admin"> <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="" style="border: 3px solid black"> </a>
              <h4>Faldi<br>Sulistiawan</h4>
              <p> G64160068 </p>
              <p class="text-muted">Front-End</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Our team consists of students who are still learning about web development. We are Bogor Agricultural University Student, Department of Computer Science.</p>
          </div>
        </div>
      </div>

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
