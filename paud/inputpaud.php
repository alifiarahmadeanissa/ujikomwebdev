<?php
    include "konek.php";

    $id_murid = $_POST['id_murid'];
    $nama = $_POST['nama'];
    $kelompok = $_POST['kelompok'];
    $umur = $_POST['umur'];
    $tahun = $_POST['tahun'];

    $query = mysqli_query($con, "INSERT INTO paud
                        VALUES('$id_murid','$nama','$kelompok','$umur')"
                        )or die (mysqli_error($con));

    if ($query)
        {
            header("Location:page3.php");
        }
    else
        {echo "proses input gagal";}
?>