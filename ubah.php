<?php
require 'functions.php';

//ambil data di URL
$id =$_GET["id"];

//query data siswa berdasarkan id
$siswa = query("SELECT * FROM calon_siswa_baru WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan apa belum 
if( isset($_POST["submit"]) ){



        //cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            
            ";
        } else {
            echo "
            <script>
                alert('data gagal diubah!');
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
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post">
    <input type="hidden" name="id" value="<?=$siswa["id"];?>">
        <ul>
            <li>
            <label for="nama">Nama :</label>
            <input type="text" class="from-control" name="nama" id="nama" placeholder="Nama Lengkap" required value="<?=$siswa["nama"];?>">
            </li><br>
            <li>
            <label for="alamat">Alamat :</label>
            <textarea class="from-control" name="alamat" rows="3" placeholder="Alamat" value="<?=$siswa["alamat"];?>"></textarea>
            </li>
            <li>
            <p>
                Jenis Kelamin : <select name="jenis_kelamin" class="form-control" value="<?=$siswa["jenis_kelamin"];?>">
                    <option>Laki - laki</option>
                    <option>Perempuan</option>
                </select>
            </p>
            </li>
            <li>
            <p>
                Agama : <select class="form-control" name="agama" value="<?=$siswa["agama"];?>">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Khatolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
            </select></p>
            </li>
            <li>
            <label for="asal_sekolah">Sekolah Asal :</label>
            <input type="text" class="from-control" name="asal_sekolah" id="asal_sekolah" placeholder="Sekolah Asal" required value="<?=$siswa["asal_sekolah"];?>">
            </li><br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    
    
    </form>
</body>
</html>