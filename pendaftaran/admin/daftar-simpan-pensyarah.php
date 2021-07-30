<?php
require '../conn.php';

$username = $_POST['username'];
$namapensyarah = $_POST['namapensyarah'];
$password = password_hash($username, PASSWORD_DEFAULT);
$jabatan = $_POST['jabatan'];
$kelas = $_POST['kelas'];

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
    header('location: index.php?daftar=senarai');
}