<?php
require '../conn.php';

$idpelajar = $_GET['idpelajar'];
$sql = "SELECT * FROM pelajar WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('i', $idpelajar);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE pelajar SET password = ? WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpelajar);
$stmt->execute();

header('location: index.php?daftar=senarai');