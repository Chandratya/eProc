<?php
$db = mysqli_connect("localhost","root","","db_eproc");
$mn = mysqli_query($db, "SELECT * FROM t_order");
$jsonval = array();
while($get = mysqli_fetch_assoc($mn)){
$json = array();
$json["id_barang"]=$get["id_barang"];
$json["nama_barang"]=$get["nama_barang"];
$json["jumlah_barang"]=$get["jumlah_barang"];
$json["harga_barang"]=$get["harga_barang"];
$json["nama_vendor"]=$get["nama_vendor"];

array_push($jsonval, $json);

}
echo json_encode($jsonval);
echo "<html><br></html>";
mysqli_close($db);
?>