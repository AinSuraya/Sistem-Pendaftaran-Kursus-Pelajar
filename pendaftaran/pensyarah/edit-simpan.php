<?php
require '../conn.php';

$idpelajar = $_POST['idpelajar'];
$nomatrik = $_POST['nomatrik'];
$namapelajar = $_POST['namapelajar'];
$password = $_POST['password'];

$sql = "UPDATE pelajar SET nomatrik=?, namapelajar=? WHERE idpelajar=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $nomatrik, $namapelajar, $idpelajar);
$stmt->execute();
$stmt->close();
?>
<script>
    alert('Berjaya edit');
    window.location = 'index.php?daftar=senarai';
</script>