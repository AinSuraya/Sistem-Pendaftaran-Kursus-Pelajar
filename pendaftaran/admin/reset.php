<?php
require '../conn.php';

$idpensyarah = $_GET['idpensyarah'];
$sql = "SELECT username FROM pensyarah WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('i', $idpensyarah);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();
$password = $username;
$stmt->close();

$sql = "UPDATE pensyarah SET password = ? WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpensyarah);
$stmt->execute();
?>

<script>
    alert('Berjaya reset kata laluan pensyarah.');
    window.location = 'location: index.php?daftar=senarai';
</script>