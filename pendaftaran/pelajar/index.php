<?php
require '../conn.php';
$idpelajar = $_SESSION['idpelajar'];
$sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
$row = $conn->query($sql)->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../register.css">
    <title>Pelajar</title>
</head>
<body>
<marquee direction="right" height="70" width="100%" bgcolor="pink" loop="20">
  <font face="times new roman" size="30" color="maroon"><center>SISTEM PENDAFTARAN KURSUS PELAJAR(PTSS)</font></center>
</marquee>
<ul>
    <li><a href="index.php?daftar=kursus&idpelajar=<?php echo $row->idpelajar; ?>">Senarai Kursus</a></li>
    <li><a href="index.php?daftar=daftar">Daftar Kursus</a></li>
    <li><a href="index.php?daftar=katalaluan">Kata Laluan</a></li>
    <li><a href="../logout.php" onclick="return confirm()">Log Keluar</a></li>
</ul>
<font><b>Pelajar :</b></font>
<font><?php echo $row->namapelajar;?></font><br>
<font><b>No Pendaftaran :</b></font>
<font><?php echo $row->nomatrik;?></font><br>
<center><div>
    <?php
    $daftar = 'kursus';
    if (isset($_GET['daftar'])) $daftar = $_GET['daftar'];
    require "$daftar.php";
    ?>
</div></center>
</body>
</html>