<!DOCTYPE html>
<html>
<?php
session_start();

  include "session.php"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To Plantsys Application</title>
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
                <a class="navbar-brand" href="#"><b><p style="margin-top: 6px;">PLANTSYS</p><b> | Plantation System<a class="navbar-brand" style="margin-top: 6px;"></a></a>
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
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Data Panen</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="input_po.php" class="">
                                    <span>Tambah Data Panen</span>
                                </a>
                            </li>
                            <li>
                                <a href="display_po.php" class="">
                                    <span>Status Panen</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Payment</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="input_payment.php" class="">
                                    <span>Create Payment</span>
                                </a>
                            </li>
                             <li>
                                <a href="display_payment.php" class="">
                                    <span>Display Payment Documents</span>
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
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Transaksi Berhasil</div>
                            <div class="number"><?php
                            $link = mysqli_connect("localhost","root","","db_eproc");
                            $sql = $link->query("SELECT COUNT(*) FROM t_order WHERE status!=1");
                            $row = $sql->fetch_row();
                            $count = $row[0];

                            echo $count;

                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Transaksi Dalam Proses</div>
                            <div class="number"><?php
                            $link = mysqli_connect("localhost","root","","db_eproc");
                            $sql = $link->query("SELECT COUNT(*) FROM t_order WHERE status=1");
                            $row = $sql->fetch_row();
                            $count = $row[0];

                            echo $count;

                            ?></div>
                        </div> 

                        <!-- API -->
                         


                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect" style="height: 120px; width: 240px;">
                <div class="content">
                            <div class="text">
                                <?php

          $queryss = @unserialize (file_get_contents('http://ip-api.com/php/'));
          if ($queryss && $queryss['status'] == 'success') {
          }

          function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
 $PublicIP = get_client_ip(); 
 // $locationJSON  = file_get_contents("https://freegeoip.net/json/$PublicIP");
 // $locationJSON  =  json_decode($locationJSON ,true);
 // $city = $locationJSON['city'];
 $city = 'Bandung';

          $json = file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$city."%22)and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys");
                
          $data = json_decode($json);

                $image_weather = $data->query->results->channel->item->condition->text;

                $array = array("0","1","2","3","4","5");

                $arrlength = count($array);

                switch ($image_weather) {
                    case "Cloudy":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Partly Cloudy":
                        echo "<img src='./images/sun-and-cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Sunny":
                        echo "<img src='./images/sun-sunny-day-weather-symbol.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Sunny":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered":
                        echo "<img src='./images/sun-and-cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Thunderstorms":
                        echo "<img src='./images/storm.png' style='width:25px;height:25px;'>";
                        break;
                    case "Showers":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Rain":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Windy":
                        echo "<img src='./images/wind.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Cloudy":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Breezy":
                        echo "<img src='./images/`wind.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered Showers":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;    
                    default:
                        echo "-";
              }

                  echo "<br>". $data->query->results->channel->location->city . ", ";
                  echo $data->query->results->channel->location->region. ", ";
                  echo $data->query->results->channel->location->country . "<br/>"  ;
                  echo $data->query->results->channel->lastBuildDate . "<br/>";
                  echo "Suhu : ". $data->query->results->channel->item->condition->temp. ", ";
                  echo "Cuaca : ". $data->query->results->channel->item->condition->text ."<br><br>";
                  echo "Perkiraan Cuaca : <br>";

                  for($x = 1; $x < $arrlength; $x++) {

                  $image_weather = $data->query->results->channel->item->condition->text;

                  switch ($image_weather) {
                    case "Cloudy":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Partly Cloudy":
                        echo "<img src='./images/sun-and-cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Sunny":
                        echo "<img src='./images/sun-sunny-day-weather-symbol.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Sunny":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered":
                        echo "<img src='./images/sun-and-cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Thunderstorms":
                        echo "<img src='./images/storm.png' style='width:25px;height:25px;'>";
                        break;
                    case "Showers":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Rain":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Windy":
                        echo "<img src='./images/wind.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Cloudy":
                        echo "<img src='./images/cloud.png' style='width:25px;height:25px;'>";
                        break;
                    case "Breezy":
                        echo "<img src='./images/`wind.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered Showers":
                        echo "<img src='./images/rain.png' style='width:25px;height:25px;'>";
                        break;    
                    default:
                        echo "-";
                  }

                  echo $data->query->results->channel->item->forecast[$array[$x]]->day . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->date . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->text . "<br/>";

                }

              ?>
                            </div>
                </div>
            </div>
        </div>
              
              <div class="col-md-3 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect" style="height: 120px; width: 240px;">
                     <div class="content">
                            <div class="text">
                                <?php

          $queryss = @unserialize (file_get_contents('http://ip-api.com/php/'));
          if ($queryss && $queryss['status'] == 'success') {
          }

         
 // $locationJSON  = file_get_contents("https://freegeoip.net/json/$PublicIP");
 // $locationJSON  =  json_decode($locationJSON ,true);
 // $city = $locationJSON['city'];
 $city = 'Bandung';

          $json = file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$city."%22)and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys");
                
          $data = json_decode($json);

                $image_weather = $data->query->results->channel->item->condition->text;

                $array = array("0","1","2","3");

                $arrlength = count($array);

                  echo "Perkiraan Cuaca : <br>";

                  for($x = 1; $x < $arrlength; $x++) {

                  $image_weather = $data->query->results->channel->item->condition->text;

                 

                  echo $data->query->results->channel->item->forecast[$array[$x]]->day . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->date . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->text . "<br/>";

                }

              ?>
                            </div>
                </div>
            </div>
        </div>
                 
            </div>
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
            <div class="row clearfix" style="height: 300px;">
                <!-- Task Info -->
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Komoditas Barang <img style="width: 100px; height: 60px;" src="./images/ebay.png">
                                
                            </h2>
                            <?php
// error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging
// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'hehepizz-eProc-PRD-a660f6938-9c2730d2';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)

$query = "Rice";  // You may want to supply your own query

$pgn='Pagination.PageNumber';
;
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0

// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '25',
    'paramName' => 'Currency',
    'paramValue' => 'USD'),
    array(
    'name' => 'FreeShippingOnly',
    'value' => 'true',
    'paramName' => '',
    'paramValue' => ''),
    array(
    'name' => 'ListingType',
    'value' => array('AuctionWithBIN','FixedPrice','StoreInventory'),
    'paramName' => '',
    'paramValue' => ''),
  );

// Generates an indexed URL snippet from the array of item filters
function buildURLArray ($filterarray) {
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key =>$value) {
      if(is_array($value)) {
        foreach($value as $j => $content) { // Index the key for each value
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      }
      else {
        if($value != "") {
          $urlfilter .= "&itemFilter($i).$key=$value";
        }
      }
    }
    $i++;
  }
  return "$urlfilter";
} // End of buildURLArray function
$start = time();
// Build the indexed item filter URL snippet
buildURLArray($filterarray);

 if (isset($_GET["xx"])) {
  $xx=$_GET["xx"];

}else{  
    $xx= '2';
}
 echo "<input type='hidden' value='$xx' id='pgno'>";
// Construct the findItemsByKeywords HTTP GET call 
$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=findItemsByKeywords";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";

$apicall .= "&keywords=$safequery";
$apicall .= "&paginationInput.entriesPerPage=5";
$apicall .= "&paginationInput.pageNumber=".$xx;
$apicall .= "$urlfilter";
// Load the call and capture the document returned by eBay API
$resp = simplexml_load_file($apicall);


 



// echo "<pre> ";
// echo buildURLArray($filterarray);
// echo $resp;
// print_r($resp);
 // echo "</pre>";

// Check to see if the request was successful, else print an error
if ($resp->ack == "Success") {
  
  $results = '';
  // If the response was loaded, parse it and build links  
  // echo "<pre>";
  // print_r($resp->searchResult->item);

  // echo "</pre>";
  foreach($resp->searchResult->item as $item) {
// echo $resp->itemSearchURL;
  $end = time();
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    $subtitle = $item->subtitle;
    $paymentMethod = $item->paymentMethod;

    
    if ($paymentMethod == 'PayPal')
      $paymentMethod = "<img src='i/paypal.png'>";
    
// echo "<pre>";
  
  //print_r($resp);
  
// print_r($resp);
// echo "</pre>";
    
    foreach ($resp->searchResult->item->sellingStatus as $value) { // Access that Arry from FOreach Loop 
          $price = $item->sellingStatus->currentPrice;
    }

    foreach ($resp->paginationOutput as $value) {
      $Pageno = $resp->paginationOutput->pageNumber;
      $totalEntries = $resp->paginationOutput->totalEntries;

      $totalPage = $resp->paginationOutput->totalPages;
    }
  
    $results .= "<div class='col-md-12' style='border-left:4px solid black; border-bottom: 1px solid #bcc; margin-top:2%;'><div class='col-md-3'><center><img src=\"$pic\" style='max-width: 100%;margin:1%;'></center></div><div class='col-md-9' ><h2> <a href='$link\' target='blank'>$title</a></h2><h5> $subtitle </h5> <h3>Price $$price  </h3> <h4> Jumlah Stok : </h4> </div></div>";  
  

  }

?>

<?php 


}
// If the response does not indicate 'Success,' print an error
else {
  $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
  $results .= "AppID for the Production environment.</h3>";
}
?>

<!-- Build the HTML page with values from the call response -->
    <div>
    <?php echo $results;?><br>
    
    <div class="clearfix"></div>
    </div>



                        </div>
                        <div class="body table-responsive">
                            

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
                                Daftar Ketersediaan Hasil Panen
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Panen</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Stok</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $sql = "SELECT id_barang, nama_barang, jumlah_barang FROM t_order WHERE status=2";
                  $result = mysqli_query($conn, $sql);
                  $i = 1;
                  if (mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_array($result)) {
                  ?>
                                    <tr data="<?php echo $row["id_barang"]; ?>">
                                        
                                        <td ><?php echo $row["id_barang"]; ?></td>
                                        <td ><?php echo $row["nama_barang"]; ?></td>
                                        <td ><?php echo $row["jumlah_barang"]; ?></td>
                                        
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
                <!-- #END# Task Info -->
                <!-- Browser Usage -->

                <div class="row clearfix">
                <!-- Task Info -->
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                News
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive" style="height: 200px;">
                            <?php
                            require_once('./webhoseio-PHP-master/webhose.php');
                            Webhose::config("df380ed4-72c0-412d-afe6-9166e4dcdbc2");

                    
                            //Helper method to print result:

                                function print_filterwebdata_titles($api_response)
                                {
                                    if($api_response == null)
                                    {
                                        echo "<p>Response is null, no action taken.</p>";
                                        return;
                                    }
                                    if(isset($api_response->posts))
                                        foreach($api_response->posts as $post)
                                        {
                                            echo "<p>" . $post->title . ", URL:";
                                            echo "<a>" . $post->url ."</p>" . "</a>";
                                        }
                                }

                                
                            //Perform a "filterWebContent" query

                                $params = array(
                             "q" => "hasil usaha tani language:indonesian site_type:news",
                             "ts" => "1536421892181",
                             "sort" => "crawled"
                                );
                                $result = Webhose::query("filterWebContent", $params);
                                print_filterwebdata_titles($result);

                              ?>

        <?php
        echo $data->query->results->channel->location->city;
        ?>
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