<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pendaftaran_siswa_baru");

function query($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;
        $nama = htmlspecialchars($data["nama"]) ;
        $alamat =  htmlspecialchars($data["alamat"]);
        $jenis_kelamin =  htmlspecialchars($data["jenis_kelamin"]);
        $agama =  htmlspecialchars($data["agama"]);
        $asal_sekolah =  htmlspecialchars($data["asal_sekolah"]);

         $query = "INSERT INTO calon_siswa_baru
                        VALUES
                ('', '$nama', '$alamat', '$jenis_kelamin',
                '$agama', '$asal_sekolah')
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM calon_siswa_baru WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]) ;
    $alamat =  htmlspecialchars($data["alamat"]);
    $jenis_kelamin =  htmlspecialchars($data["jenis_kelamin"]);
    $agama =  htmlspecialchars($data["agama"]);
    $asal_sekolah =  htmlspecialchars($data["asal_sekolah"]);

     $query = "UPDATE calon_siswa_baru SET
                nama = '$nama',
                alamat = '$alamat',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                asal_sekolah = '$asal_sekolah'
                WHERE id = $id
         ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);   
}

?>