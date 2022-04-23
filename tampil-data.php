<?php
    include "koneksi.php";
    $sql = "SELECT * FROM tbl_206";
    $hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <h2><a href="tampil-data.php">Tampil data</a> | <a href="tambah-data.php">Tambah data</a></h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>id_206</th>
            <th>Nama_206</th>
            <th>Email_206</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
        <tr>
            <td><?=$row['id_206']?></td>
            <td><?=$row['nama_206']?></td>
            <td><?=$row['email_206']?></td>
            <td><a href="ubah-data.php?id_206=<?=$row['id_206']?>">Ubah</a> | <a href="hapus-data.php?id_206=<?=$row['id_206']?>" onclick="return confirm('Anda yakin ingin menghapus <?=$row['nama_206']?>?')">Hapus</a></td>
        </tr>
        <?php endwhile;  ?>
    </table>
</body>
</html>