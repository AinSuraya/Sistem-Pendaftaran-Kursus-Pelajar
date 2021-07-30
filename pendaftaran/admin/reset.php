<?php
require '../conn.php';

$idpensyarah = $_GET['idpensyarah'];
$sql = "SELECT * FROM pensyarah WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('i', $idpensyarah);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE pensyarah SET password = ? WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpensyarah);
$stmt->execute();

header('location: index.php?daftar=senarai');
