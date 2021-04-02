<?php include "header.php"; ?>

<?php
require 'functions.php';
$siswa = query ("SELECT * FROM calon_siswa_baru");
?>

    <h1>Data Siswa Baru</h1> 

    <a href="tambah.php">Tambah Data Siswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($siswa as $row ) :?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["agama"]; ?></td>
            <td><?= $row["asal_sekolah"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </table>   

  <?php include "footer.php"; ?>