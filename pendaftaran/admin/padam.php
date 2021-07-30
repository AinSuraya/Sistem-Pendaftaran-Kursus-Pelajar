<?php
require '../conn.php';

$idpensyarah = $_GET['idpensyarah'];
$sql = "DELETE FROM pensyarah WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpensyarah);
$stmt->execute();
$stmt->close();

header('location: index.php?daftar=senarai');