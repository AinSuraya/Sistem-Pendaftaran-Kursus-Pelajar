<?php
require '../conn.php';

$idkursus = $_GET['idkursus'];
$sql = "DELETE FROM kursus WHERE idkursus = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idkursus);
$stmt->execute();
$stmt->close();

header('location: index.php?daftar=senaraikursus');