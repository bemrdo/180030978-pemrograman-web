<?php
    //mengambil data yang sudah di submit pada form melalui method post
    $id_peg = $_POST["ID_Peg"];
    $nama_peg = $_POST["Nama_Peg"];
    $alamat = $_POST["Alamat"];
    $id_dept = $_POST["ID_Dept"];

    //membuka koneksi ke database
    include "koneksi.php";
    //query insert data pada databse
    $qry = "insert into Pegawai values ('$id_peg','$nama_peg','$alamat','$id_dept')";
    //eksekusi query insert
    $exec = mysqli_query($con, $qry);

    //menampilkan alert apabila data berhasil/gagal disimpan
    if($exec){
        echo "<script>alert('Data berhasil disimpan'); window.location='index.php'</script>";
    }else{
        echo "<script>alert('Data gagal disimpan'); 
        window.location='biodata_pegawai.php'</script>";
    }
?>
