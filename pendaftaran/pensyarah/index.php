<?php
require '../conn.php';
$idpensyarah = $_SESSION['idpensyarah'];
$sql = "SELECT * FROM pensyarah WHERE idpensyarah = $idpensyarah";
$row = $conn->query($sql)->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../register.css">
    <title>Pensyarah</title>
</head>
<body>
<h2><ul>
    <li><a href="index.php?daftar=senarai">Pelajar</a></li>
    <li><a href="index.php?daftar=daftar">Daftar Pelajar</a></li>
    <li><a href="index.php?daftar=katalaluan">Kata Laluan</a></li>
    <li><a href="../logout.php">Log Keluar</a></li>
</ul></h2>
<font><b>Pensyarah :</b></font>
<font><?php echo $row->namapensyarah;?></font><br>
<center><div>
    <?php
    $daftar = 'senarai';
    if (isset($_GET['daftar'])) $daftar = $_GET['daftar'];
    require "$daftar.php";
    ?>
</div></center>
</body>
</html>