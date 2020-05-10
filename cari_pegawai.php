<?php
    //mengambil data nama dari form menggunakan method post, kemudian menjalankan fungsi search_pegawai
    if (isset($_POST['Nama'])){
        $nama = $_POST['Nama'];
        $cari = search_pegawai($nama);
    }
    //fungsi search data pegawai menggunakan nama
    function search_pegawai($nama){
        //membuka koneksi ke database
        include "koneksi.php";
        //query select data pada database berdasarkan nim
        $qry = "select * from Pegawai a inner join Departement b on a.ID_Dept = b.ID_Dept where Nama_Peg = '$nama'";
        $exec = mysqli_query($con, $qry);
        //$data = mysqli_fetch_array($exec);
        return $exec;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bulma.css">
    <meta charset="UTF-8">
    <title>Cari Data Pegawai</title>
    <style>
        .p-t {
            padding-top: .5rem;
        }

    </style>
</head>

<body>
    <div class="box has-background-primary">
        <div class="container">
            <h1 class="is-size-3 has-text-weight-semibold">Informasi Data Pegawai</h1>
            <a class="button is-warning has-text-dark is-rounded" href="index.php">Tampilkan Data</a>
        </div>
    </div>
    <div class="container">
        <div class="title has-text-centered">Cari Data Pegawai</div>
        <form name="cari-pegawai" method="POST" action="#">
            <div class="columns p-t is-centered">
                <div class="column is-one-third">
                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <input name="Nama" class="input is-primary is-rounded" type="text" placeholder="Nama pegawai" required>
                        </div>
                        <div class="control">
                            <input type="submit" name="cari-data" value="Cari" class="button is-primary is-rounded" required>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (isset($cari)){
            ?>
            <div class="title has-text-centered">Biodata Pegawai</div>
            <table class="table is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>ID Departement</th>
                        <th>Nama Departement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($hasil = mysqli_fetch_array($cari)){
                    ?>
                    <tr>
                        <td><?php echo $hasil['ID_Peg'] ?></td>
                        <td><?php echo $hasil['Nama_Peg'] ?></td>
                        <td><?php echo $hasil['Alamat'] ?></td>
                        <td><?php echo $hasil['ID_Dept'] ?></td>
                        <td><?php echo $hasil['Nama_Dept'] ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>
