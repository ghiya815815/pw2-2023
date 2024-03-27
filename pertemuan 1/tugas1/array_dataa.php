<?php
  $m_fruits = [
    ["ID" => "1", "Nama" => "Pome", "Warna" => "Merah", "Stock" => 23, "Harga" => 30000, "Deskripsi" => "Pome buah yang bijinya bisa dimakan"],
    ["ID" => "2", "Nama" => "Anggur", "Warna" => "Ungu", "Stock" => 19, "Harga" => 60000, "Deskripsi" => "Anggur yang arsanya manis"],
    ["ID" => "3", "Nama" => "Semangka", "Warna" => "Merah", "Stock" => 30, "Harga" => 20000, "Deskripsi" => "Buah besar dengan biji yang bisa dimakan"],
    ["ID" => "4", "Nama" => "Jeruk", "Warna" => "Orange", "Stock" => 10, "Harga" => 20000, "Deskripsi" => "Buah yang  memiliki rasa manis dan asam, seger bener"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container"> 
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($m_fruits as $fruit) {
        ?>
            <tr>
              <td><?=$fruit["ID"] ?></td>
              <td><?=$fruit["Nama"] ?></td>
              <td><?=$fruit["Warna"] ?></td>
              <td><?=$fruit["Stock"] ?></td>
              <td><?=$fruit["Harga"] ?></td>
              <td><?=$fruit["Deskripsi"] ?></td>
          </tr>
        <?php
          }
         ?>

      </tbody>
    </table>
  </div>
</body>
</html>