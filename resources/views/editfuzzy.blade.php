<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
$bencana = DB::table('bencanas')->get();

$kegiatan = DB::table('kegiatans')->get();

$skalakec = DB::table('skala_kec')->get();
$skalaben = DB::table('skala_ben')->get();
$usia = DB::table('umur')->get();

?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>D-VOL</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/tesaja.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('homekoor')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">D-VOL <br><sup>Disaster Volunteer</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('aturan') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Aturan Fuzzy</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Edit Variabel Fuzzy</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-grey topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
           



            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="/assets/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edit Nilai Variabel Fuzzy</h2>
        
        </br>
</br>
</br>

</br>

        @foreach($skalakec as $datas)
        <fieldset>
        <legend>Variabel Skala Kecakapan Relawan</legend>
            <form action="{{ route('skala_kec1.update', $datas->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Domain skala kecakapan relawan biasa:</label>
                    <input type="number" name="bbBiasa" value="{{$datas->bbBiasa }}"> - <input type="number"  name="baBiasa" value="{{$datas->baBiasa }}">
                </div>
                <div class="form-group">
                    <label for="nama">Domain skala kecakapan relawan ahli :</label>
                    <input type="number"   name="bbAhli" value="{{$datas->bbAhli }}"> - <input type="number"    name="baAhli" value="{{$datas->baAhli }}">
                </div>
                 <div class="form-group">
                    <label for="nama">Domain skala kecakapan relawan sangat ahli:</label>
                    <input type="number"   name="bbSAhli" value="{{$datas->bbSAhli }}"> - <input type="number"   name="baSAhli" value="{{$datas->baSAhli }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Reset</button>
                </div>
              </form>
              </fieldset>
              @endforeach
               @foreach($usia as $datass)
               <fieldset>
        <legend>Variabel Umur Relawan</legend>
            <form action="{{ route('umur1.update', $datass->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                 <div class="form-group">
                    <label for="nama">Domain usia relawan remaja:</label>
                    <input type="number"   id="id_relawan" name="bbRemaja" value="{{$datass->bbRemaja }}"> - <input type="number"   id="id_relawan" name="baRemaja" value="{{$datass->baRemaja }}">
                </div>
                 <div class="form-group">
                    <label for="nama">Domain usia relawan dewasa:</label>
                    <input type="number"   id="id_relawan" name="bbDewasa" value="{{$datass->bbDewasa }}"> - <input type="number"   id="id_relawan" name="baDewasa" value="{{$datass->baDewasa }}">
                </div>
                <div class="form-group">
                    <label for="nama">Domain usia relawan tua:</label>
                    <input type="number"   id="id_relawan" name="bbTua" value="{{$datass->bbTua }}"> - <input type="number"   id="id_relawan" name="baTua" value="{{$datass->baTua }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
              </form>
              </fieldset>
              @endforeach
                 @foreach($skalaben as $datasss)
                 <fieldset>
        <legend>Variabel Skala Bencana</legend>
            <form action="{{ route('skala_ben1.update', $datasss->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Domain skala bencana rendah:</label>
                    <input type="number"   id="id_relawan" name="bbRendah" value="{{$datasss->bbRendah }}"> - <input type="number"   id="id_relawan" name="baRendah" value="{{$datasss->baRendah }}">
                </div>
                <div class="form-group">
                    <label for="nama">Domain skala bencana sedang:</label>
                    <input type="number"   id="id_relawan" name="bbSedang" value="{{$datasss->bbSedang }}"> - <input type="number"   id="id_relawan" name="baSedang" value="{{$datasss->baSedang }}">
                </div>
                <div class="form-group">
                    <label for="nama">Domain skala bencana tinggi:</label>
                    <input type="number"   id="id_relawan" name="bbTinggi" value="{{$datasss->bbTinggi }}"> - <input type="number"   id="id_relawan" name="baTinggi" value="{{$datasss->baTinggi }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
              </form>
              </fieldset>
              @endforeach

               

                <tr>
                
                
            </form>
      </div>
    </section>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; D-VOL 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="assets/teslg.js"></script>
    <script type="text/javascript" src="assets/Chart.js"></script>
  <script src="assets/1.js"></script>
  <script src="assets/2.js"></script>
  <script src="assets/3.js"></script>
  


</body>

</html>
