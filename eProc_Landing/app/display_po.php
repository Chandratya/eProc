<!DOCTYPE html>
<html>
<?php
session_start();

  include "session.php";
  include "../conn.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | eProcurement Application</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#"><img style="width: 84px; height: 30px; margin-bottom: 20px;" src="../assets/img/now-logo.png"><a class="navbar-brand" style="margin-top: 6px;"> | &nbsp;&nbsp;&nbsp;PT. Giga Technology</a></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                  
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">2</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Notif 1</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Notif 2</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li role="seperator" class="divider"></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <?php 
                         if($getUser!=null){
                         echo $getUser['nama_user'];
                         //echo " (".$status[$getUser['status']].")";
                         } 
                         ?>
      </span>
                    </div>
                    <div class="email">
                        <?php 
                         if($getUser!=null){
                         echo $getUser['email'];
                         //echo " (".$status[$getUser['status']].")";
                         } 
                         ?>

                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!--<li role="seperator" class="divider"></li>-->
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li>
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Purchase Order</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="input_po.php" class="">
                                    <span>Create Purchase Order</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="display_po.php" class="">
                                    <span>Status Purchase Order</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">e-Proc Team</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LIST PANEN</h2>
            </div>

            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
           
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Tanam
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Nama Vendor</th>
                                        <th>Status</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $sql = "SELECT id_order, id_barang, nama_barang, jumlah_barang, harga_barang, nama_vendor, status FROM t_order";
                  $result = mysqli_query($conn, $sql);
                  $i = 1;
                  if (mysqli_num_rows($result) > 0) {
                        
                      while($row = mysqli_fetch_array($result)) {
                  ?>
                                    <tr data="<?php echo $row["id_barang"]; ?>">
                                        
                                        
                                        <td ><?php echo $row["id_barang"]; ?></td>
                                        <td ><?php echo $row["nama_barang"]; ?></td>
                                        <td ><?php echo $row["jumlah_barang"]; ?></td>
                                        <td ><?php echo $row["harga_barang"]; ?></td>
                                        <td ><?php echo $row["nama_vendor"]; ?></td>
                                        <td ><?php 
                                        if ($row["status"]==1){
                                             echo "On Progress";
                                        }else{
                                            echo "Complete";
                                        }
                                        ?></td>
                                        <td>
                                            
                                            <a href="delete.php?id_order=<?php echo $row['id_order'];?>" > HAPUS </a></td>
                                               <td>
                                    </tr>

                                    <?php
                      }
                      echo "</table>";
                  } else {
                      echo "0 results";
                  }
                 
                  mysqli_close($conn);
                ?> 
                <h4><a href="parse_json.php">Prase data to json </a></h4>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                
                <!-- #END# Browser Usage -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Forecast Panen
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Perkiraan Panen</th>
                                        <th></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  include "../conn.php";
                  $date = strtotime("February 5, 2019 2:00 PM");
                  $remaining = $date - time();
                  $days_remaining = floor($remaining / 86400);
                  $hours_remaining = floor(($remaining % 86400) / 3600);
                  $menit = floor(($remaining % (1000 * 60 * 60)) / (1000 * 60));
                  $detik = floor(($remaining % (1000 * 60)) / 1000);

                  $sql = "SELECT id_order, id_barang, nama_barang, jumlah_barang, harga_barang, nama_vendor, status FROM t_order";
                  $result = mysqli_query($conn, $sql);
                  $i = 1;
                  if (mysqli_num_rows($result) > 0) {
                    
                      while($row = mysqli_fetch_array($result)) {
                  ?>
                                    <tr data="<?php echo $row["id_barang"]; ?>">
                                        
                                        
                                        <td ><?php echo $row["id_barang"]; ?></td>
                                        <td ><?php echo $row["nama_barang"]; ?></td>
                                        <td>
                                            <?php echo " $days_remaining Hari, $hours_remaining Jam, $menit Menit menuju Panen";?>
                                        </td>
                                        <td>
                                            
                                            <a href="delete.php?id_order=<?php echo $row['id_order'];?>" > HAPUS </a></td>
                                               <td>
                                    </tr>
                                    <?php
                      }
                      echo "</table>";
                  } else {
                      echo "0 results";
                  }
                  mysqli_close($conn);
                ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>