<?php
    if (isset($_POST['sbm'])) {
        $a = $_POST['nama'];
        $b = $_POST['nik'];
        $c = $_POST['alamat'];
        $d = $_POST['umur'];
        $e = $_POST['jumlah'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Keluarga</title>
</head>
<body>
        <legend>Masukkan Jumlah Anggota Keluarga</legend>
        <input type="number" name="jumlah">

        <form action="datakeluarga_pro.php" method="POST">

        <?php
        if (isset($_POST['proses'])) {
            $jml = $_POST['jumlah'];
            for ($a=0; $a < $jml; $a++) {
            }
        }
        ?>

        <label for="">Nama</label>
        <input type="text" name="nama[]" required>
        <label for="">NIK</label>
        <input type="text" name="nik[]" required>
        <label for="">Alamat</label>
        <input type="text" name="alamat[]" required>
        <label for="">Umur</label>
        <input type="text" name="umur[]" required>

        <input type="submit" name="sbm" value="Simpan">
        </form>
</body>
</html>