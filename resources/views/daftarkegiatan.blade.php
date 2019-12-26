

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>D-VOL</title>

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
         <a class="navbar-brand js-scroll-trigger" href="{{ route('homekoor') }}">D-vol </br><h6 style="color:#e87b07;">Disaster Volunteer</h6> </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('homekoor')}}">Home</a>
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
</br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Data Kegiatan</h2>
        
        </br>
</br>
</br>
</br>
</br>

</br>
</br>

          
     <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Kegiatan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
      <th><h1>ID Kegiatan</h1></th>
      <th><h1>Judul Kegiatan</h1></th>
      <th><h1>Jenis Kegiatan</h1></th>
      <th><h1>Lokasi</h1></th>
      <th><h1>Tanggal</h1>
      <th><h1>Waktu</h1></th>
      <th><h1>Keterangan</h1></th>
    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th><h1>ID Kegiatan</h1></th>
      <th><h1>Judul Kegiatan</h1></th>
      <th><h1>Jenis Kegiatan</h1></th>
      <th><h1>Lokasi</h1></th>
      <th><h1>Tanggal</h1>
      <th><h1>Waktu</h1></th>
      <th><h1>Keterangan</h1></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($kegiatan as $key => $datas)
                    <tr>
      <td>{{ $datas->id_keg }}</td>
      <td>{{ $datas->nama_keg}}</td>
      <td>{{$datas->jenisKeg}}</td>
      <td>{{$datas->alamat}}</td>
      <td>{{$datas->tanggal_keg}}</td>
      
      <td>{{$datas->waktu}}</td>
      <td>{{$datas->keterangan}}</td>
     
                  
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </section>

    </div>
  </li>
</ul>
</div>
</div>
</nav>
</body>
</html>

