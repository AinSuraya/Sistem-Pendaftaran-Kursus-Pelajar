<?php
require '../conn.php';

$iddaftar = $_GET['iddaftar'];
$sql = "DELETE FROM daftar WHERE iddaftar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $iddaftar);
$stmt->execute();
$stmt->close();
?>

<script>
    alert('Berjaya padam kursus tersebut.');
    window.location = 'index.php?daftar=kursus';
</script>