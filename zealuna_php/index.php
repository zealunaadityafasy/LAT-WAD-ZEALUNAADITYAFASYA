<?php
  $nama = "Zealuna Aditya Fasya";
  $nim = "102022500375";
  $fakultas = "Fakultas Rekayasa Industri";
  $prodi = "S1 Sistem Informasi";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Personal Web PHP</title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <img src="potoprofil.jpeg" width="150">

  <h1><?php echo $nama; ?></h1>
  <h2>NIM: <?php echo $nim; ?></h2>
  <h3><?php echo $fakultas; ?></h3>
  <h4>Program Studi <?php echo $prodi; ?></h4>

  <p>Tanggal: <?php echo date("d-m-Y"); ?></p>

  <p>
    <a href="https://github.com/zealunaadityafasy" target="_blank">Github</a> |
    <a href="https://instagram.com/Zealuna.adty" target="_blank">IG</a>
  </p>

  <table border="1">
    <tr>
      <th>Hobi</th>
      <th>Skill</th>
    </tr>
    <tr>
      <td>Mengaji</td>
      <td>Solat 5 waktu</td>
    </tr>
  </table>

</body>
</html>