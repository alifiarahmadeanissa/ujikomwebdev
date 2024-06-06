<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "paud";

$con =new mysqli($server,$username,$password,$db);

if ($con -> connect_error)
        {
            die('Maaf koneksi gagal: '. $connect->connect_error);
        }
?>