<?php 

//Create Connection
$conn = mysqli_connect("localhost", "root", "", "db_eproc");
 // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>