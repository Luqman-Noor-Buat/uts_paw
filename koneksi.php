<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_luqman");
    if(!$koneksi){
        echo "Koneksi gagal";
    }
?>