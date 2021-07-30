<?php
require '../conn.php';

$idpelajar = $_GET['idpelajar'];
$sql = "DELETE FROM pelajar WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelajar);
$stmt->execute();
$stmt->close();

header('location: index.php?daftar=senarai');