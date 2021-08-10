<?php
require '../conn.php';

$idpensyarah = $_POST['idpensyarah'];
$username = $_POST['username'];
$namapelajar = $_POST['namapelajar'];
$password = $_POST['password'];
$nomatrik = $_POST['nomatrik'];

$sql = "INSERT INTO pelajar VALUES (null, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('issss', $idpensyarah, $nomatrik, $namapelajar, $username, $password);
$stmt->execute();
if ($conn->error) { echo $conn->error; exit; }

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, nama pengguna ini telah wujud.');
        window.location = 'index.php?daftar=daftarpelajar';
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Berjaya daftar');
        window.location = 'index.php?daftar=senarai';
    </script>
    <?php
}