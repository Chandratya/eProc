<?php
require_once './google-api-php-client/vendor/autoload.php';
include './conn.php'; //summon $conn
session_start();
 
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $profile = $_SESSION['access_profile'];
  //var_dump($profile);

  // Credential
  $name = $profile['displayName'];
  $email = $profile['emails'][0]['value'];
  $username = substr($email, 0, strrpos($email, '@'));
  $provider = 'google';
  $provider_id = $profile['id'];
  $password = rand(100000,999999);

  // SQL Find User
  $sqlFindUser = "select id,username from t_user where provider_id='".$provider_id."' and provider='".$provider."'";
  $execUser = mysqli_query($conn, $sqlFindUser);
  $getUser = mysqli_fetch_array($execUser);
  if($getUser!=null){
  	$_SESSION['id'] = $getUser['id'];
    $_SESSION['user'] = $getUser['username'];

	//	echo $sqlFindUser;
    //var_dump($_SESSION['id']);

	//	echo "<a href='./app/home.php'>Lanjutkan</a>";
    header('location: ./app/home.php');
  }else{
  	$sqlCreateUser = "insert into t_user(nama_user, email, username, password, provider, provider_id) values('".$name."','".$email."','".$username."','".$password."','".$provider."','".$provider_id."')";
  	$execCreateUser = mysqli_query($conn, $sqlCreateUser);
  	if($execCreateUser){
  		echo $sqlCreateUser;
  		$execUser = mysqli_query($conn, $sqlFindUser);
  		$getUser = mysqli_fetch_array($execUser);
		$_SESSION['id'] = $getUser['id'];
		$_SESSION['user'] = $getUser['username'];
	//	echo $sqlFindUser;
    //var_dump($_SESSION['id']);
		//echo "<a href='./app/home.php'>Lanjutkan</a>";
		header('location: ./app/home.php');
  		//header('location:sign-in.php');
  	}else{
  		echo "Error Creating ..";
  		echo $sqlCreateUser;
  		mysqli_error($conn);
  	}
  }

  echo "<img src=\"{$profile['image']['url']}\">";
  echo "<h3>Hai, {$profile['displayName']} ({$profile['emails']['0']['value']})</h3>";
  echo "Anda telah berhasil login menggunakan akun google anda, klik <a href='logout_google.php'>Logout</a> untuk keluar.";
} else {
  echo "<a href='auth.php'>Login dengan Akun Google</a>";
} 

