<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$Kartu = new Kartu($db);

if(isset($_POST['update'])) {
    $Kartu->id = $_POST['id'];
    $Kartu->nama = $_POST['kode'];
    $Kartu->nama = $_POST['nama'];
    $Kartu->nama = $_POST['diskon'];
    $Kartu->nama = $_POST['iuran'];


    $Kartu->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $Kartu->id = $_GET['id'];
    $stmt = $Kartu->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
<h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" value="<?php echo $kode; ?>" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label for="diskon">Diskon</label>
        <input type="number" name="diskon" value="<?php echo $diskon; ?>" required>
        <br>
        <label for="iuran">Iuran</label>
        <input type="number" name="iuran" value="<?php echo $iuran; ?>" required>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>