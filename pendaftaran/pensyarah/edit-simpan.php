<?php
require '../conn.php';

$idpelajar = $_POST['idpelajar'];
$namapelajar = $_POST['namapelajar'];
$nomatrik = $_POST['nomatrik'];

$sql = "UPDATE pelajar SET nomatrik=?, namapelajar? WHERE idpelajar=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $nomatrik, $namapelajar, $idpelajar);
$stmt->execute();
$stmt->close();

header('location: index.php?daftar=senarai');