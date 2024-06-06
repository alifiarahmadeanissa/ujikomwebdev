<?php 
include "konek.php"; 
$id_murid =$_GET['id_murid']; 
$query=mysqli_query($con,"DELETE FROM paud where id_murid='$id_murid'"); 
if($query) 
{ header("Location:page3.php"); }
else 
{ echo "Proses Input gagal"; } 
?>