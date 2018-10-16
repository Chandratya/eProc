<?php
include '../conn.php';
// menyimpan data kedalam variabel
$id = $_POST['id_pembayaran'];
$nama = $_POST['nama_barang'];
$status = $_POST['status'];
// query SQL untuk insert data
$query="UPDATE t_order SET status=$status where nama_barang=$nama";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
if($query!=false){
        $message = "Data Purchase Order Berhasil Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='display_po.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysqli_error($conn);
    }

?>