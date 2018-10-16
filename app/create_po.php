<?php

include '../conn.php';

if(isset($_POST['submit'])){
    $link = mysqli_connect("localhost", "root", "", "db_eproc") or die($link);

    $id = mysqli_real_escape_string($link, $_POST['id_barang']);
    $nama = mysqli_real_escape_string($link, $_POST['nama_barang']);
    $jml = mysqli_real_escape_string($link, $_POST['jumlah_barang']);
    $harga =  mysqli_real_escape_string($link, $_POST['harga_barang']);
    $vendor =  mysqli_real_escape_string($link, $_POST['nama_vendor']);
    $status =  mysqli_real_escape_string($link, $_POST['status']);
    $order =  mysqli_real_escape_string($link, $_POST['id_order']);
    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO t_order VALUES('$id', '$nama', '$jml', '$harga', '$vendor', '$status', '$order')";
    $query = mysqli_query($conn, $cmd);
    if($query!=false){
        $message = "Data Purchase Order Berhasil Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='display_po.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysqli_error($conn);
    }
}
mysqli_close($conn);

?>