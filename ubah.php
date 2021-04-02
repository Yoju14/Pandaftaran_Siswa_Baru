<?php include "header.php"; ?>

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
                    document.location.href = 'table.php';
                </script>
            
            ";
        } else {
            echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'table.php';
            </script>
            ";
        }

}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
  
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post">
            <input type="hidden" name="id" value="<?=$siswa["id"];?>">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required value="<?= $siswa["nama"];?>">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" placeholder="Alamat" value="<?= $siswa["alamat"];?>"></textarea>
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">
                Jenis Kelamin :</label><select name="jenis_kelamin" class="form-control" value="<?= $siswa["jenis_kelamin"];?>">
                    <option>Laki - laki</option>
                    <option>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="agama">
                    Agama :</label> <select class="form-control" name="agama" value="<?= $siswa["agama"];?>">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Khatolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="asal_sekolah">Sekolah Asal</label>
                  <input type="text" class="form-control" id="asal_sekolah" placeholder="Sekolah Asal" required value="<?= $siswa["asal_sekolah"];?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->        
        </div>
      
      </div>
      <!-- /.row -->
    </section>


    <?php include "footer.php"; ?>