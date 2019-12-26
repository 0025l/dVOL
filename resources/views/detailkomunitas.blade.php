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

    </br>
  </br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edit Data Komunitas</h2>
        
        </br>
</br>
<?php
foreach($data as $dataa){
  $ha = $dataa->id_kom; }
$relawan = DB::table('relawans')
              ->select('relawans.*')
              ->where('id_kom', $ha )
                              
            ->get();

?>


</br>
 @foreach($data as $datas)
    

</br>
   
  
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="id_relawan">ID Komunitas:</label>
                    <label >{{ $datas->id_kom }}</label>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Komunitas:</label>
                    <label>{{ $datas->nama_kom }}</label>
                </div>
                <div class="form-group">
                    <label for="email">Nama Ketua:</label>
                    <label>{{ $datas->nama_ketua }}</label>
                </div>
                 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Relawan pada Komunitas {{$datas->komunitas}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>JK</th>
                      <th>Umur</th>
                      <th>SK</th>
                      <th>Email</th>
                      <th>NO HP</th>
                      <th>Alamat</th>
                      <th>Komunitas</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>ID</th>
                      <th>Nama</th>
                       <th>JK</th>
                       <th>Umur</th>
                      <th>SK</th>
                      <th>Email</th>
                      <th>NO HP</th>
                      <th>Alamat</th>
                      <th>Komunitas</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($relawan as $rel)
                    <tr>
                         <td>{{ $rel->id_rel }}</td>
                        <td>{{ $rel->nama }}</td>
                        <td>{{ $rel->jenisKel }}</td>
                        <?php 
                        $dob = new DateTime($rel->tl);
                        $now = new DateTime();
                        $difference = $now->diff($dob);
                        $age = $difference->y; ?>
                        <td>{{ $age }}</td>
                        <td>{{ $rel->skala_kec }}</td>
                        <td>{{ $rel->email }}</td>
                        <td>{{ $rel->noHP }}</td>
                        <td>{{ $rel->alamat }}</td>
                        <td>{{ $rel->nama_kom }}</td>
                       
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            @endforeach
          </div>
</div></section></li></ul>
</div>
</div></nav></body></html>

   
   
                 