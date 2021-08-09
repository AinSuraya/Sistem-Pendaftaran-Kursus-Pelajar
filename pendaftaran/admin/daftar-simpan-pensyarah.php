<?php
require '../conn.php';

$username = $_POST['username'];
$kelas = $_POST['kelas'];
$namapensyarah = $_POST['namapensyarah'];
$jabatan = $_POST['jabatan'];
$password = $_POST['password'];

$sql = "INSERT INTO pensyarah VALUES (null, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('sssss', $namapensyarah, $jabatan, $kelas, $username, $password);
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