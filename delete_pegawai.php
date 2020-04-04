<?php
    //mengambil data nim yang dikirim melalui URL dengan method GET
    $ID_Peg = $_GET['ID_Peg'];

    //membuka koneksi ke database
    include "koneksi.php";
    //query select data pada database berdasarkan nim
    $qry = "delete from Pegawai where ID_Peg = '$ID_Peg'";
    $exec = mysqli_query($con,$qry);

    //menampilkan alert apabila data berhasil/gagal disimpan
    if($exec){
        echo "<script>alert('Data berhasil dihapus'); window.location='index.php'</script>";
    }else{
        echo "<script>alert('Data gagal dihapus'); window.location='index.php'</script>";
    }
?>