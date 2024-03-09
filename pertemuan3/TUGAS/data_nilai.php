<?php
    include_once 'header.php';
?>
<form class="form-horizontal w-90 mt-5 mx-auto p-5 border shadow-sm" action = "form_daftar.php">
<div class="container">   
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
      <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <?php
          require_once 'libfungsi.php';
          
          // 3. Berikan error handling untuk mengatasi ketika form belum disubmit
          if(isset($_POST['submit'])) {
              // Form telah disubmit, proses data
              // Ambil data dari $_POST
              $nama = $_POST["nama"];
              $matkul = $_POST["matkul"];
              $uts = $_POST["uts"];
              $uas = $_POST["uas"];
              $paktek = $_POST["paktek"];
              
              // Hitung rerata
              $rerata = number_format(($uts + $uas + $paktek) / 3, 2);
              
              // Panggil fungsi untuk menentukan grade
              $grades = grade($rerata);
              
              // Panggil fungsi untuk menentukan predikat
              $predikat = predikat($grades);
              
              // Panggil fungsi untuk menentukan kelulusan
              $lulus = kelulusan($rerata);
              
              // Tampilkan data dalam bentuk baris tabel
              echo "<tr>";
              echo "<td>3</td>";
              echo "<td>$nama</td>";
              echo "<td>$matkul</td>";
              echo "<td>$uts</td>";
              echo "<td>$uas</td>";
              echo "<td>$paktek</td>";
              echo "<td>$rerata</td>";
              echo "<td>$grades</td>";
              echo "<td>$predikat</td>";
              echo "<td>$lulus</td>";
              echo "</tr>";
          } else {
              // Form belum disubmit, tampilkan pesan
              echo "<tr><td colspan='10'>Form belum di-submit, data akan muncul setelah di-submit.</td></tr>";
          }
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>
