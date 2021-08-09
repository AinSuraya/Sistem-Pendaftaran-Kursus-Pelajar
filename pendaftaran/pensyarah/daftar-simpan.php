<?php
require '../conn.php';

$username = $_POST['username'];
$namapelajar = $_POST['namapelajar'];
$password = $_POST['password'];
$nomatrik = $_POST['nomatrik'];

$sql = "INSERT INTO pelajar VALUES (null, null, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('ssss', $nomatrik, $namapelajar, $username, $password);
$stmt->execute();

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
        alert('Berjaya daftar.');
        window.location = 'index.php?daftar=senarai';
    </script>
}