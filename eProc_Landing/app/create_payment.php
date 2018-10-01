<?php

include '../conn.php';

if(isset($_POST['submit'])){
    $link = mysqli_connect("localhost", "root", "", "db_eproc") or die($link);

    $id = mysqli_real_escape_string($link, $_POST['id_pembayaran']);
    $nama = mysqli_real_escape_string($link, $_POST['nama_barang']);
    $status =  mysqli_real_escape_string($link, $_POST['status']);

    //var_dump($_POST);
    //id_user, nama, jk, ttl, alamat, email, username, password, status
    $cmd = "INSERT INTO t_pembayaran VALUES('$id', '$nama', '$status')";
    $query = mysqli_query($conn, $cmd);
    if($query!=false){
        $message = "Data Pembayaran Berhasil Ditambahkan!";
        echo "<script type='text/javascript'>alert('$message'); window.location='display_po.php';</script>";
    }else{
        echo "0";
        echo '<br/>Problem: '.mysqli_error($conn);
    }
}
mysqli_close($conn);

?>