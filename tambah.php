<?php include "header.php"; ?>
<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan apa belum 
if( isset($_POST["submit"]) ){
        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'table.php';
                </script>
            
            ";
        } else {
            echo "
            <script>
                alert('data gagal ditambahkan!');
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
      <h1>
        Form Pendaftaran Siswa Baru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
            <form role="form">
            <form action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">
                Jenis Kelamin :</label><select name="jenis_kelamin" class="form-control">
                    <option>Laki - laki</option>
                    <option>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="agama">
                    Agama :</label> <select class="form-control" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Khatolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="asal_sekolah">Sekolah Asal</label>
                  <input type="text" class="form-control" id="asal_sekolah" placeholder="Sekolah Asal" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Input</button>
              </div>
            </form>
          </div>
          <!-- /.box -->   
          <?php if(isset($_GET['status'])): ?>
       <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
       </p>
      <?php endif; ?>     
        </div>
      
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 <?php include "footer.php"; ?>