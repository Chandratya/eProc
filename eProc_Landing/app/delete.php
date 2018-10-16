<?php
include('../conn.php'); 
session_start();

include "session.php" ;
// == fungsi delete ==
if(isset($_GET['id_order'])){ // ketika link delete di klik
  $id = $_GET['id_order'];
  mysqli_query($conn, "DELETE FROM t_order WHERE id_order='$id'");
  echo '
  <script language="javascript">
  alert("Data Deleted");
  document.location ="display_po.php";
  </script> 
  ';

} else {
    echo 'Gagal'.mysqli_error($conn);
}
?>