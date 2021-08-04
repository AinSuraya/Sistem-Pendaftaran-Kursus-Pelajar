<?php
require '../conn.php';

$idkursus = $_POST['idkursus'];
$kodkursus = $_POST['kodkursus'];
$namakursus = $_POST['namakursus'];
$jamkredit = $_POST['jamkredit'];

$sql = "UPDATE kursus SET kodkursus=?, namakursus=?, jamkredit=?  WHERE idkursus=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssii', $kodkursus, $namakursus, $jamkredit, $idkursus);
$stmt->execute();
$stmt->close();
?>
<script>
    alert('Berjaya edit');
    window.location = 'index.php?daftar=senaraikursus';
</script>