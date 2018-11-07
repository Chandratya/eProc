<?php 

//Create Connection
$conn = mysqli_connect("localhost", "root", "", "kuluntung");
 // Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>