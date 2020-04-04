<?php
    //mengambil data nim yang dikirim melalui URL dengan method GET
    $ID_Peg = $_GET['ID_Peg'];

    //membuka koneksi ke database
    include "koneksi.php";
    //query select data pada database berdasarkan nim
    $qry = "select * from Pegawai where ID_Peg = '$ID_Peg'";
    $exec = mysqli_query($con,$qry);
    $data = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bulma.css">
    <meta charset="UTF-8">
    <title>Update Data Pegawai</title>
    <style>
        .p-t {
            padding-top: .5rem;
        }

        .m-l {
            margin-left: .5rem;
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
        <div class="title has-text-centered">Formulir Update Data Pegawai</div>
        <form name="input-pegawai" method="POST" action="update_pegawai.php">
            <div class="columns p-t">
                <div class="column is-one-quarter">
                    <div class="field">
                        <label class="label">ID Pegawai</label>
                        <div class="control">
                            <input name="ID_Peg" class="input is-primary is-rounded" type="number" placeholder="ID" value="<?php echo $data['ID_Peg']; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Nama Pegawai</label>
                        <div class="control">
                            <input name="Nama_Peg" class="input is-primary is-rounded" type="text" placeholder="Nama" value="<?php echo $data['Nama_Peg'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Departement</label>
                        <div class="control">
                            <div class="select is-fullwidth is-primary is-rounded">
                                <select name="ID_Dept">
                                    <option value="A001" <?php if ($data['ID_Dept'] == "A001") echo "selected"; ?>>A001 - IT</option>
                                    <option value="A002" <?php if ($data['ID_Dept'] == "A002") echo "selected"; ?>>A002 - Keuangan</option>
                                    <option value="A003" <?php if ($data['ID_Dept'] == "A003") echo "selected"; ?>>A003 - HRD</option>
                                    <option value="A004" <?php if ($data['ID_Dept'] == "A004") echo "selected"; ?>>A004 - Pemasaran</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Alamat</label>
                        <div class="control">
                            <input name="Alamat" class="input is-primary is-rounded" type="text" placeholder="Alamat" value="<?php echo $data['Alamat'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="column is-narrow">
                    <label class="label">&nbsp;</label>
                    <input type="submit" name="simpan-data" value="Simpan" class="button is-warning is-rounded">
                    <a href="index.php" class="button is-danger is-rounded m-l">Batal</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
