<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bulma.css">
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
</head>

<body>
    <div class="box has-background-primary">
        <div class="container">
            <h1 class="is-size-3 has-text-weight-semibold">Informasi Data Pegawai</h1>
            <a class="button is-warning has-text-dark is-rounded" href="biodata_pegawai.php">Tambah Data</a>
            <a class="button is-warning has-text-dark is-rounded" href="cari_pegawai.php">Cari Data</a>
        </div>
    </div>
    <div class="container">
        <div class="title has-text-centered">Biodata Pegawai</div>
        <table class="table is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>ID Departement</th>
                    <th>Nama Departement</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //membuka koneksi ke database
                    include "koneksi.php";
                    //query select data pada databse
                    $qry = "select * from Pegawai a inner join Departement b on a.ID_Dept = b.ID_Dept";
                    //eksekusi query select
                    $exec = mysqli_query($con, $qry);
                    //mengambil data dan memasukkan ke array > tampilan di web
                    while($data = mysqli_fetch_array($exec)){
                ?>
                <tr>
                    <td><?php echo $data['ID_Peg'] ?></td>
                    <td><?php echo $data['Nama_Peg'] ?></td>
                    <td><?php echo $data['Alamat'] ?></td>
                    <td><?php echo $data['ID_Dept'] ?></td>
                    <td><?php echo $data['Nama_Dept'] ?></td>
                    <td>
                        <a class="button is-info is-small is-rounded" href="edit_pegawai.php?ID_Peg=<?php echo $data['ID_Peg'] ?>">Edit</a>
                        <a class="button is-danger is-small is-rounded" href="delete_pegawai.php?ID_Peg=<?php echo $data['ID_Peg'] ?>">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
