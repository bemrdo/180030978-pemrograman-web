<?php
    //membuat koneksi ke database
    $con = mysqli_connect("localhost","root","","dbpegawai");
    if(mysqli_connect_error()){
        echo "Terjadi Kesalahan : " . mysqli_connect_error();
    }
?>