<?php
    include "koneksi.php";
    $id_206 = $_GET['id_206'];
    $sql = "DELETE FROM tbl_206 WHERE id_206 = $id_206";
    $hasil = mysqli_query($koneksi, $sql);
    if(!$hasil){
        echo "<script>alert('Gagal menghapus data');
                document.location.href='tampil-data.php';</script>";
    }else{
        echo "<script>alert('Berhasil menghapus data');
                document.location.href='tampil-data.php';</script>";
    }
?>