<?php
require '../conn.php';

$idpelajar = $_SESSION['idpelajar'];
$idkursus = $_POST['idkursus'];
$sesi = $_POST['sesi'];

$sql = "INSERT INTO daftar VALUES (null, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('iis', $idpelajar, $idkursus, $sesi);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, kursus ini telah didaftar.');
        window.location = 'index.php?daftar=daftar';
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Berjaya daftar');
        window.location = 'index.php?daftar=kursus';
    </script>
    <?php
}