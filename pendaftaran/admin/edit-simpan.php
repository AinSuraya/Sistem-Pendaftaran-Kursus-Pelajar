<?php
require '../conn.php';

$idpensyarah = $_POST['idpensyarah'];
$namapensyarah = $_POST['namapensyah'];
$jabatan = $_POST['jabatan'];
$kelas = $_POST['kelas'];

$sql = "UPDATE pensyarah SET namapensyarah=?, jabatan=?, kelas=?  WHERE idpensyarah=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssi', $namapensyarah, $jabatan, $kelas, $idpensyarah);
$stmt->execute();
$stmt->close();

header('location: index.php?daftar=senarai');