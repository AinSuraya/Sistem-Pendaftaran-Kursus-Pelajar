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
<h2><ul>
    <li><a href="index.php?daftar=senarai">Pensyarah</a></li>
    <li><a href="index.php?daftar=pelajar">Senarai Pelajar</a></li>
    <li><a href="index.php?daftar=kursus">Kursus Pelajar</a></li>
    <li><a href="index.php?daftar=senaraikursus">Senarai Kursus</a></li>
    <li><a href="index.php?daftar=katalaluan">Kata Laluan</a></li>
    <li><a href="../logout.php">Log Keluar</a></li>
</ul></h2>

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