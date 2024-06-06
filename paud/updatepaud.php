<?php

include "konek.php";

    $id_murid = $_POST['id_murid'];
    $nama = $_POST['nama'];
    $kelompok = $_POST['kelompok'];
    $umur = $_POST['umur'];
    

    $query = mysqli_query($con, "UPDATE paud SET nama = '$nama', 
                        kelompok = '$kelompok', umur = '$umur'  where id_murid = '$id_murid'"
                        )or die (mysqli_error($con));

    if ($query)
        {
            header("Location:page3.php");
        }
    else
        {echo "proses input gagal";}
?>