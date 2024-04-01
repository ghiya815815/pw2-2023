<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$Kartu = new Kartu($db);

if(isset($_POST['tambah'])){
    $Kartu->kode = $_POST['kode'];
    $Kartu->nama = $_POST['nama'];
    $Kartu->diskon = $_POST['diskon'];
    $Kartu->iuran = $_POST['iuran'];

    $Kartu->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label for="kode">Kode :</label>
        <input type="text" name="kode" required>
        <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required>
        <br>
        <label for="diskon">Diskon :</label>
        <input type="number" name="diskon" required>
        <br>
        <label for="iuran">Iuran :</label>
        <input type="number" name="iuran" required>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>