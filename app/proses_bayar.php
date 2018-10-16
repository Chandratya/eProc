<?php
include '../conn.php';
// menyimpan data id kedalam variabel
$id_order = $_GET['id_order'];
// query SQL untuk insert data
$query="DELETE from t_order where id_order='$id_order'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:display_po.php");
?>