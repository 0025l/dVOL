<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MOCCA - Edit Data Komunitas</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MOCCA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('indexpengelola')}}">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img style="margin-top: 5px;" src="/assets/user.png">
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
            </div>
        </li>

           
          </ul>
        </div>
      </div>
    </nav>

   <br />
   <br />
   <br />

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edit Data Komunitas</h2>
        
        <br />
   <br />
<?php
foreach($data as $dataa){
  $ha = $dataa->id_benc; }
$relawan = DB::table('laprel')
              ->select('laprel.*')
              ->where('id_benc', $ha )
                              
            ->get();

?>


</br>
 @foreach($data as $datas)
<form method="POST" action="{{ route('bencana.update', $datas->id_benc) }}">
    

</br>
   
  
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                  <div id="myHeader">
                    <label for="id_relawan">ID Laporan:</label>
                    <label >{{ $datas->id_benc }}</label>
                <br />
                    <label for="nama">Judul Laporan:</label>
                    <label>{{ $datas->nama_bencana }}</label>
                    <br />
                    <label for="email">Jenis Bencana:</label>
                    <label>{{ $datas->jenis }}</label>
                    <br />
                    <label for="status">Lokasi:</label>
                    <label>{{ $datas->daerah }}"</label>
                    <br />
                    <label for="email">Skala:</label>
                    <label>{{ $datas->skala }}</label>
                    <br />
                    <label for="nohp">Deskripsi:</label>
                    <label>{{ $datas->deskripsi}}</label>
                </div>
</div>

                 <div class="form-group">
                   <div id="myHeader2">
                    <label for="nohp">Relawan:</label><br>
                    @foreach($relawan as $rel)
                    <label>{{ $rel->nama_rel }}</label><br>
                    @endforeach
                </div>
</div>
   
   
                 

                <tr>
                
                <div class="form-group">

                </div>
          <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-md" name="Mobilisasi">
                   
                </div>
          </tr>
        </div>
</form>
          @endforeach
      </div>
    </section>

  

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
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
