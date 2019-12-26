<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
$bencana = DB::table('bencanas')->get();

$kegiatan = DB::table('kegiatans')->get();
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('indexpengelola')}}">
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
        <a class="nav-link" href="{{ route('chart') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Bencana per Kecamatan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('chart2') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Bencana per Jenis</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('chartkeg') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Kegiatan</span></a>
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
            

            <!-- Nav Item - Alerts 
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                  <img style="margin-top: 0px;" src="/assets/notification.png"-->
                <!-- Counter - Alerts --
                <span class="badge badge-danger badge-counter"><h5>!</h5></span>
              </a-->
              <!-- Dropdown - Alerts -->
              <!--div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifikasi
                </h6>
                @foreach($bencana as $datas)
                @if($datas->status = "Baru")
                <a class="dropdown-item d-flex align-items-center" href="{{ route('bencana.edit2', $datas->id_benc) }}">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">{{ $datas->created_at }}</div>
                    <span class="font-weight-bold">{{ $datas->nama_bencana }}</span>
                  </div>
                </a>
                @endif
                @endforeach
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li -->
            <!-- Nav Item - Kegiatan 
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                  <img style="margin-top: 0px;" src="/assets/event.png" -->
                <!-- Counter - Alerts >
                <span class="badge badge-danger badge-counter"><h5>!</h5></span>
              </a-->
              <!-- Dropdown - Alerts 
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Kegiatan
                </h6>
                @foreach($kegiatan as $datas)
                @if($datas->status = "Baru")
                <a class="dropdown-item d-flex align-items-center" href="{{ route('kegiatan.edit', $datas->id_keg) }}">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">{{ $datas->created_at }}</div>
                    <span class="font-weight-bold">{{ $datas->nama_keg }}</span>
                  </div>
                </a>
                @endif
                @endforeach
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li -->




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
                <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Grafik tingkat kejadian bencana berdasarkan lokasi bencana</h1>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas width="300" height="100" id="myChart"></canvas>
                  </div>
                </div>
              </div>

            </div>

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
          <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <script src="assets/teslg.js"></script>
    <script type="text/javascript" src="assets/Chart.js"></script>
  <script src="assets/1.js"></script>
  <script src="assets/2.js"></script>
  <script src="assets/3.js"></script>
  <script>
var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Sleman", "Berbah", "Cangkringan", "Pakem", "Turi", "Ngemplak", "Depok", "Gamping", "Godean", "Kalasan", "Minggir", "Mlati", "Moyudan", "Ngaglik","Prambanan", "Seyegan", "Tempel"],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_sleman = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','1')
                        ->get();
                $num_rows = count($jumlah_sleman);


          echo "$num_rows";
          ?>, 
          <?php 
          $jumlah_ngaglik =DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','2')
                        ->get();
          echo count($jumlah_ngaglik);
          ?>,
          <?php 
          $jumlah_turi = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','3')
                        ->get();
          echo count($jumlah_turi);
          ?>,
          <?php 
          $jumlah_ngemplak = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','4')
                        ->get();
          echo count($jumlah_ngemplak);
          ?>,
          <?php 
          $jumlah_berbah = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','5')
                        ->get();
          echo count($jumlah_berbah);
          ?>,
          <?php 
          $jumlah_cangkringan = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','6')
                        ->get();
          echo count($jumlah_cangkringan);
          ?>,
          <?php 
          $jumlah_depok = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','7')
                        ->get();
          echo count($jumlah_depok);
          ?>,
          <?php 
          $jumlah_gamping = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','8')
                        ->get();
          echo count($jumlah_gamping);
          ?>,
          <?php 
          $jumlah_godean = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','9')
                        ->get();
          echo count($jumlah_godean);
          ?>,
          <?php 
          $jumlah_kalasan = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','10')
                        ->get();
          echo count($jumlah_kalasan);
          ?>,
          <?php 
          $jumlah_minggir = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','11')
                        ->get();
          echo count($jumlah_minggir);
          ?>,
          <?php 
          $jumlah_mlati = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','12')
                        ->get();
          echo count($jumlah_mlati);
          ?>,
          <?php 
          $jumlah_moyudan = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','13')
                        ->get();
          echo count($jumlah_moyudan);
          ?>,
          <?php 
          $jumlah_pakem = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','14')
                        ->get();
          echo count($jumlah_pakem);
          ?>,
          <?php 
          $jumlah_prambanan = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','15')
                        ->get();
          echo count($jumlah_prambanan);
          ?>,
          <?php 
          $jumlah_seyegan = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','16')
                        ->get();
          echo count($jumlah_seyegan);
          ?>,
          <?php 
          $jumlah_tempel = DB::table('bencanas')
                        ->select('bencanas.*')
                        ->where('id_daerah','17')
                        ->get();
          echo count($jumlah_tempel);
          ?>,
          
          ],
          backgroundColor: [
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)',
          'rgba(50, 195, 178, 0.5)'
          ],
          borderColor: [
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>


</body>

</html>
