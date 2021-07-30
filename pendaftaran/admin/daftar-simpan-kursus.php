<?php
require '../conn.php';

$kodkursus = $_POST['kodkursus'];
$namakursus = $_POST['namakursus'];
$jamkredit = $_POST['jamkredit'];

$sql = "INSERT INTO kursus VALUES (null, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('sss', $kodkursus, $namakursus, $jamkredit);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, kursus ini telah wujud.');
        window.location = 'index.php?daftar=daftarkursus';
    </script>
    <?php
} else {
    header('location: index.php?daftar=senaraikursus');
}