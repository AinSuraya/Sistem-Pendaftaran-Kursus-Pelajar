<?php
require '../conn.php';

# kalau admin
if (!isset($_SESSION['admin'])) {
    header('location: ../logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../register.css">
    <title>Admin</title>
</head>
<body>
<marquee direction="right" height="70" width="100%" bgcolor="pink" loop="20">
  <font face="times new roman" size="30" color="maroon"><center>SISTEM PENDAFTARAN KURSUS PELAJAR(PTSS)</font></center>
</marquee>
<ul>
    <li><a href="index.php?daftar=senarai">Senarai Pensyarah</a></li>
    <li><a href="index.php?daftar=daftarpensyarah">Daftar Pensyarah</a></li>
    <li><a href="index.php?daftar=senaraikursus">Senarai Kursus</a></li>
    <li><a href="index.php?daftar=daftarkursus">Daftar Kursus</a></li>
    <li><a href="index.php?daftar=pelajar">Senarai Pelajar(Kelas)</a></li>
    <li><a href="index.php?daftar=kursus">Senarai Pelajar(Kursus)</a></li>
    <li><a href="index.php?daftar=katalaluan">Kata Laluan</a></li>
    <li><a href="../logout.php">Log Keluar</a></li>
</ul>

<font><b>Admin</b></font><br>
<center><div>
    <?php
    $daftar = 'senarai';
    if (isset($_GET['daftar'])) $daftar = $_GET['daftar'];
    require "$daftar.php";
    ?>
</div></center>
</body>
</html>