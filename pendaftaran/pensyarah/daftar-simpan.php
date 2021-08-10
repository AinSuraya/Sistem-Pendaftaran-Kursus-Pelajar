<?php
require '../conn.php';

$idpensyarah = $_SESSION['idpensyarah'];
$username = $_POST['username'];
$namapelajar = $_POST['namapelajar'];
$password = $_POST['password'];
$nomatrik = $_POST['nomatrik'];

$sql = "INSERT INTO pelajar VALUES (null, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('sssss', $idpensyarah, $nomatrik, $namapelajar, $username, $password);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, nama pengguna ini telah wujud.');
        window.location = 'index.php?daftar=daftarpensyarah';
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
