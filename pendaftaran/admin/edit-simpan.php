<?php
require '../conn.php';

$idpensyarah = $_POST['idpensyarah'];
$namapensyarah = $_POST['namapensyarah'];
$jabatan = $_POST['jabatan'];
$kelas = $_POST['kelas'];

$sql = "UPDATE pensyarah SET namapensyarah=?, jabatan=?, kelas=? WHERE idpensyarah=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssi', $idpensyarah, $namapensyarah, $jabatan, $kelas);
$stmt->execute();
$stmt->close();
?>
<script>
    alert('Berjaya edit');
    window.location = 'index.php?daftar=senarai';
</script>