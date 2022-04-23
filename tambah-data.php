<?php
    include "koneksi.php";
    if(isset($_POST['submit'])) {
        $nama_206 = $_POST['nama_206'];
        $email_206 = $_POST['email_206'];

        $sql = "INSERT INTO tbl_206 VALUE ('', '$nama_206', '$email_206')";
        $hasil = mysqli_query($koneksi, $sql);
        if(!$hasil){
            echo "<script>alert('Gagal menmbahkan data');
                    document.location.href='tambah-data.php';</script>";
        }else{
            echo "<script>alert('Berhasil menmbahkan data');
                    document.location.href='tampil-data.php';</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2><a href="tampil-data.php">Tampil data</a> | <a href="tambah-data.php">Tambah data</a></h2>
    <form action="" method="POST">
        <label for="nama_206">Nama_206 : </label>
        <input type="text" name="nama_206" required><br>
        <label for="email_206">Email_206 : </label>
        <input type="text" name="email_206" required><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>