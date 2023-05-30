
<?php 
include "php/connect.php";
 
 session_start();
  
 if (!isset($_SESSION['name'])) {
     header("Location: index.php");
 }


 $pendapatan = 'SELECT SUM(jumlah) AS total_pendapatan FROM pendapatan';

 $result_pendapatan =  mysqli_fetch_assoc($conn->query($pendapatan) );
 $pdp = $result_pendapatan['total_pendapatan'];

 $pengeluaran = 'SELECT SUM(jumlah) AS total_pengeluaran FROM pengeluaran';
 $result_pengeluaran =  mysqli_fetch_assoc($conn->query($pengeluaran) );
 $pgl = $result_pengeluaran['total_pengeluaran'];
 
 $januari = 'SELECT SUM(IF( month(waktu) = 01, jumlah, 0)) AS total_jan FROM pendapatan';
 $pen_jan =  mysqli_fetch_assoc($conn->query($januari) );

 $februari = 'SELECT SUM(IF( month(waktu) = 02, jumlah, 0)) AS total_feb FROM pendapatan';
 $pen_feb =  mysqli_fetch_assoc($conn->query($februari) );

 $maret = 'SELECT SUM(IF( month(waktu) = 03, jumlah, 0)) AS total_mar FROM pendapatan';
 $pen_mar =  mysqli_fetch_assoc($conn->query($maret) );

 $april = 'SELECT SUM(IF( month(waktu) = 04, jumlah, 0)) AS total_apr FROM pendapatan';
 $pen_apr =  mysqli_fetch_assoc($conn->query($april) );

 $mei = 'SELECT SUM(IF( month(waktu) = 05, jumlah, 0)) AS total_mei FROM pendapatan';
 $pen_mei =  mysqli_fetch_assoc($conn->query($mei) );

 $juni = 'SELECT SUM(IF( month(waktu) = 06, jumlah, 0)) AS total_jun FROM pendapatan';
 $pen_jun =  mysqli_fetch_assoc($conn->query($juni) );

 $juli = 'SELECT SUM(IF( month(waktu) = 07, jumlah, 0)) AS total_jul FROM pendapatan';
 $pen_jul =  mysqli_fetch_assoc($conn->query($juli) );

 $agustus = 'SELECT SUM(IF( month(waktu) = 08, jumlah, 0)) AS total_agu FROM pendapatan';
 $pen_agu =  mysqli_fetch_assoc($conn->query($agustus) );

 $september = 'SELECT SUM(IF( month(waktu) = 09, jumlah, 0)) AS total_sep FROM pendapatan';
 $pen_sep =  mysqli_fetch_assoc($conn->query($september) );

 $oktober = 'SELECT SUM(IF( month(waktu) = 10, jumlah, 0)) AS total_okt FROM pendapatan';
 $pen_okt =  mysqli_fetch_assoc($conn->query($oktober) );

 $november = 'SELECT SUM(IF( month(waktu) = 11, jumlah, 0)) AS total_nov FROM pendapatan';
 $pen_nov =  mysqli_fetch_assoc($conn->query($november) );

 $desember = 'SELECT SUM(IF( month(waktu) = 12, jumlah, 0)) AS total_des FROM pendapatan';
 $pen_des =  mysqli_fetch_assoc($conn->query($desember) );

 $januari = 'SELECT SUM(IF( month(waktu) = 01, jumlah, 0)) AS total_jan FROM pengeluaran';
 $pgl_jan =  mysqli_fetch_assoc($conn->query($januari) );

 $februari = 'SELECT SUM(IF( month(waktu) = 02, jumlah, 0)) AS total_feb FROM pengeluaran';
 $pgl_feb =  mysqli_fetch_assoc($conn->query($februari) );

 $maret = 'SELECT SUM(IF( month(waktu) = 03, jumlah, 0)) AS total_mar FROM pengeluaran';
 $pgl_mar =  mysqli_fetch_assoc($conn->query($maret) );

 $april = 'SELECT SUM(IF( month(waktu) = 04, jumlah, 0)) AS total_apr FROM pengeluaran';
 $pgl_apr =  mysqli_fetch_assoc($conn->query($april) );

 $mei = 'SELECT SUM(IF( month(waktu) = 05, jumlah, 0)) AS total_mei FROM pengeluaran';
 $pgl_mei =  mysqli_fetch_assoc($conn->query($mei) );

 $juni = 'SELECT SUM(IF( month(waktu) = 06, jumlah, 0)) AS total_jun FROM pengeluaran';
 $pgl_jun =  mysqli_fetch_assoc($conn->query($juni) );

 $juli = 'SELECT SUM(IF( month(waktu) = 07, jumlah, 0)) AS total_jul FROM pengeluaran';
 $pgl_jul =  mysqli_fetch_assoc($conn->query($juli) );

 $agustus = 'SELECT SUM(IF( month(waktu) = 08, jumlah, 0)) AS total_agu FROM pengeluaran';
 $pgl_agu =  mysqli_fetch_assoc($conn->query($agustus) );

 $september = 'SELECT SUM(IF( month(waktu) = 09, jumlah, 0)) AS total_sep FROM pengeluaran';
 $pgl_sep =  mysqli_fetch_assoc($conn->query($september) );

 $oktober = 'SELECT SUM(IF( month(waktu) = 10, jumlah, 0)) AS total_okt FROM pengeluaran';
 $pgl_okt =  mysqli_fetch_assoc($conn->query($oktober) );

 $november = 'SELECT SUM(IF( month(waktu) = 11, jumlah, 0)) AS total_nov FROM pengeluaran';
 $pgl_nov =  mysqli_fetch_assoc($conn->query($november) );

 $desember = 'SELECT SUM(IF( month(waktu) = 12, jumlah, 0)) AS total_des FROM pengeluaran';
 $pgl_des =  mysqli_fetch_assoc($conn->query($desember) );

 
  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ODTs Corp - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/font.css">
</head>

<body id="page-top" class="ff-sfRegular">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3 ff-logo">ODT Corps</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="ff-sfBold">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Heading -->
            <div class="sidebar-heading ff-sfBold">
                Report
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span class="ff-sfBold">Laporan Keuangan</span></a>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                     
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="pendapatan.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                        <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">May 29, 2023</div>
                                        <span class=""><?php
                                        if($pdp > 4000000){
                                            echo "Pendapatan tahun ini lebih dari 4jt!";
                                        }
                                            else{
                                                echo "Kita mengalami kerugian bulan ini";
                                            }
                                        
        
                                        ?></span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">May 30, 2023</div>
                                        <span class=""><?php
                                        if($pgl > 3000000){
                                            echo "Pengeluaran tahun ini masih dibawah 3jt!";
                                        }
                                            else{
                                                echo "Kita telah mengeluarkan banyak uang tahun ini!";
                                            }
                                        
        
                                        ?></span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                             
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bolder;" class="ff-sfBold h3 mb-0 font-weight-bold">Selamat Datang, <?php echo $_SESSION['name']?></h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bolder text-primary mb-2 ff-sfBold">
                                                Pendapatan</div>
                                            <div class="h4 mb-0 font-weight-bold ff-sfBold" style="color: black;">Rp <?php echo number_format((float)$pdp, 0,",") ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="ff-sfBold h5 font-weight-bolder text-success mb-2">
                                                Pengeluaran</div>
                                            <div class="h4 mb-0 font-weight-bold ff-sfBold" style="color: black;">Rp <?php echo number_format((float)$pgl, 0,",") ?></div>
                                     
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- Content Row -->
                    <div class="row d-flex justify-content-between mb-2 ml-1 mr-1">
                    <a class="tambah" href="pdptambah.php">

<div style="border-radius: 20px;" class=" pl-2 pr-2 pt-1 pb-1 bg-primary border mb-2">
    <i class="fas fa-plus fa-fw text-white"></i>
    <span class="text-white ff-sfRegular">Tambah Pendapatan</span>
</div>
</a>
<a class="tambah" href="pgltambah.php">

<div style="border-radius: 20px;" class=" pl-2 pr-2 pt-1 pb-1 bg-success border">
    <i class="fas fa-plus fa-fw text-white"></i>
    <span class="text-white tambah">Tambah Pengeluaran</span>
</div>

<style>
    .tambah:hover{
        border: 0px solid white;
    }
</style>
</a>
                    </div>
         
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary ff-sfBold">Pendapatan</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">pilih data:</div>
                                            <a class="dropdown-item text-primary" href="pendapatan.php">Pendapatan</a>
                                            <a class="dropdown-item text-success" href="pengeluaran.php">Pengeluaran</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="keuangan.php">Tampilkan keduanya</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myIncomeChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary ff-sfBold">Comparison</h6>
                              <span class="ff-sfbold">2023</span>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Pendapatan
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Pengeluaran
                                        </span>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->

                            <!-- Color System -->


                        </div>

                        <div class="col-lg-6 mb-4">



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
                        <span>Copyright &copy; ODT Corps 2023</span>
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
                    <form action="php/logout.php" method="post">
                    <button class="btn btn-primary" type="submit"  href="login.html">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-pengeluaran.js"></script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Pendapatan", "Pengeluaran"],
        datasets: [{
            data: [<?php echo $pdp?>, <?php echo $pgl?>],
            backgroundColor: ['#4e73df', '#1cc88a'],
            hoverBackgroundColor: ['#2e59d9', '#17a673'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myIncomeChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?php echo $pen_jan['total_jan']?>, <?php echo $pen_feb['total_feb']?>, <?php echo $pen_mar['total_mar']?>, <?php echo $pen_apr['total_apr']?>, <?php echo $pen_mei['total_mei']?>, <?php echo $pen_jun['total_jun']?>, <?php echo $pen_jul['total_jul']?>, <?php echo $pen_agu['total_agu']?>, <?php echo $pen_sep['total_sep']?>, <?php echo $pen_okt['total_okt']?>, <?php echo $pen_nov['total_nov']?>,<?php echo $pen_des['total_des']?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

</script>

</body>

</html>