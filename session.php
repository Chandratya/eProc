<?php

include 'conn.php';

if(isset($_SESSION['user'])){

	$id_user = $_SESSION['id'];
	$cmd = "SELECT * FROM t_user WHERE id= '$id_user'";
	$query = mysqli_query($conn, $cmd);

	$getUser = mysqli_fetch_array($query);

	$status = array("Pemilik", "Produksi", "Penerimaan", "Penjualan");

	//var_dump($getUser);
}else{
	header('location: login.php');
}

?>