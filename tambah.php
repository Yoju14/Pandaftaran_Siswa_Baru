<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan apa belum 
if( isset($_POST["submit"]) ){



        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            
            ";
        } else {
            echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
        }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Formulir Pendaftaran Siswa Baru</h1>

    <form action="" method="post">
        <ul>
            <li>
            <label for="nama">Nama :</label>
            <input type="text" class="from-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </li><br>
            <li>
            <label for="alamat">Alamat :</label>
            <textarea class="from-control" name="alamat" rows="3" placeholder="Alamat"></textarea>
            </li>
            <li>
            <p>
                Jenis Kelamin : <select name="jenis_kelamin" class="form-control">
                    <option>Laki - laki</option>
                    <option>Perempuan</option>
                </select>
            </p>
            </li>
            <li>
            <p>
                Agama : <select class="form-control" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Khatolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
            </select></p>
            </li>
            <li>
            <label for="asal_sekolah">Sekolah Asal :</label>
            <input type="text" class="from-control" name="asal_sekolah" id="asal_sekolah" placeholder="Sekolah Asal" required>
            </li><br>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    
    
    </form>
</body>
</html>