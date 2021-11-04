<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_siswa"; // db_siswa

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn){
        echo "koneksi berhasil";     
    }else{
        echo "koneksi gagal";
    }
?>