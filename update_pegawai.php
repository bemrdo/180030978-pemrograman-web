<?php
    //mengambil data yang sudah di submit pada form melalui methos post
    $id_peg = $_POST["ID_Peg"];
    $nama_peg = $_POST["Nama_Peg"];
    $alamat = $_POST["Alamat"];
    $id_dept = $_POST["ID_Dept"];

    //membuka koneksi ke database
    include "koneksi.php";
    //query update data pada databse
    $qry = "update Pegawai set Nama_Peg = '$nama_peg', Alamat = '$alamat', ID_Dept = '$id_dept' where ID_Peg = '$id_peg'";
    //mengeksekusi query update
    $exec = mysqli_query($con,$qry);

    //menampilkan alert apabila data berhasil/gagal disimpan
    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location='index.php'</script>";
    }else{
        echo "<script>alert('Data gagal disimpan');
        window.location='edit_pegawai.php?ID_Peg=$id_peg'</script>";
    }
?>