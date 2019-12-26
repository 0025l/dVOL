<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MOCCA - Masuk</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
         <a class="navbar-brand js-scroll-trigger" href="#page-top">D-vol </br><h6 style="color:#e87b07;">Disaster Volunteer</h6> </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="div-dolanan "></div>
    <header class="masthead bg-primary2 text-white text-center" >
      <div class="container">
         <div class="container">
    <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Masuk</h3>
      </div>
      <div class="card-body">
        @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
        <form action="{{ url('/loginPost') }}" method="post">
           {{ csrf_field() }}
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="/assets/close-envelope.png"></span>
            </div>
            <input type="email" class="form-control" placeholder="Masukkan email Anda" id="email" name="email">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="/assets/key-silhouette-security-tool-interface-symbol-of-password.png"></span>
            </div>
            <input type="password" class="form-control" placeholder="Masukkan kata sandi Anda" id="password" name="password">
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-md btn-lia">Masuk</button>
          </div>
        </form>
      </div>
      <div class="card-footer">
      
        <div class="d-flex justify-content-center">
          <a href="#">Lupa kata sandi?</a>
        </div>
        <div class="div-dolanan "></div>
      </div>
    </div>
  </div>
</div>
      </div>
      
    </header>

    <!-- Portfolio Grid Section -->
    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
   

    <!-- Portfolio Modals -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/jquery.js"></script>
    <script src="/assets/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/jquery.easing.js"></script>
    <script src="/assets/jquery.magnific-popup.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/jqBootstrapValidation.js"></script>


    <script src="/js/lokasi.js"></script>
    <!-- Custom scripts for this template -->
    <script src="/assets/freelancer.js"></script>

  </body>

</html>
