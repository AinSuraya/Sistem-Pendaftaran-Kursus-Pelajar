<?php
require '../conn.php';

$idpelajar = $_GET['idpelajar'];
$sql = "SELECT username FROM pelajar WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('i', $idpelajar);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();
$password = $username;
$stmt->close();

$sql = "UPDATE pelajar SET password = ? WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpelajar);
$stmt->execute();
?>

<script>
    alert('Berjaya reset kata laluan pelajar.');
    window.location = 'location: index.php?daftar=senarai';
</script>