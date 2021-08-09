<?php
require '../conn.php';

$iddaftar = $_POST['iddaftar'];
$idpelajar = $_SESSION['idpelajar'];
$idkursus = $_POST['idkursus'];
$sesi = $_POST['sesi'];

$sql = "UPDATE daftar SET idpelajar=?, idkursus=?, sesi=?  WHERE iddaftar=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iisi', $idpelajar, $idkursus, $sesi, $iddaftar);
$stmt->execute();
$stmt->close();
?>
<script>
    alert('Berjaya edit');
    window.location = 'index.php?daftar=kursus';
</script>