<?php
require '../conn.php';

$idpelajar = $_GET['idpelajar'];
$sql = "SELECT nomatrik FROM pelajar WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('i', $idpelajar);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nomatrik);
$stmt->fetch();
$password = $nomatrik;
$stmt->close();

$sql = "UPDATE pelajar SET password = ? WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpelajar);
$stmt->execute();
?>

<script>
    alert('Berjaya reset kata laluan pelajar.');
    window.location = 'index.php?daftar=senarai';
</script>