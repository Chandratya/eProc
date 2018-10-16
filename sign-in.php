<!DOCTYPE html>
<html>
<?php
include './conn.php'; //summon $conn

  require_once './google-api-php-client/vendor/autoload.php';
session_start();

$login = true;

$link = mysqli_connect("localhost", "root", "", "db_eproc") or die($link);

if(isset($_SESSION['user'])){
    header('location: home.php');
}

if (isset($_POST['token']))
{
    // var_dump($_POST);
    $_POST['username'] = mysqli_real_escape_string($link, $_POST['username']);
    $_POST['password'] = mysqli_real_escape_string($link, $_POST['password']);
    $token = $_POST['token'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $cmd = "SELECT * FROM t_user WHERE username= '$user' AND password= '$pass' ";
    $query = mysqli_query($conn, $cmd);

    $getUser = mysqli_fetch_array($query);
    if($getUser==null){
        $login = false;
    }else{
        $login = true;

        $_SESSION['id'] = $getUser['id'];
        $_SESSION['user'] = $getUser['username'];

        header('location: ./app/home.php');
    }

    // var_dump($_POST);
}
?>
  <?php 
  ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Plantsys | Application Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="./plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="692115045993-qi3sl67cjm0aso4hoirdo4phhamv9pkf.apps.googleusercontent.com">
</head>

<body class="login-page" style="background-image: url(./assets/img/header2.jpg); background-size: cover; opacity: 50%;">

    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"></a>
            <img src="./assets/img/plantsys_logo.png" style="width: 350px; height: 330px;">
            <hr style="color: black"></hr>
            <center><b><small style="color: black; font-size: 16px;">Plantation System Application Sign-in</small></b></center>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            
                        </span>
                        <input type="hidden" value="<?php echo md5(uniqid()); ?>" name="token"/>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                         
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-4">
                        <button class="btn btn-block bg-blue-grey waves-effect" style="margin-left: 110px; width: 110px;" type="submit" action="./app/index2.html/">SIGN IN</button>
                        </div>
                    </div>
                     <center>
                     <div class="row">
                       
                        <div class="btn btn-danger" onclick="window.location='./auth.php'">Sign in using Google</div>
                </center>
                    <?php if($login==false){ ?>
                    <div class="alert alert-danger">
                    <b>Coba Lagi!</b> <span>Username atau Password Tidak Ditemukan.</span>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="./plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="./plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="./plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="./plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="./assets/js/admin.js"></script>
    <script src="./assets/js/pages/examples/sign-in.js"></script>
</body>

</html>