<?php
require '../conn.php';

$kata1 = $_POST['kata1'];
$kata2 = $_POST['kata2'];
$kata3 = $_POST['kata3'];

if ($kata2 != $kata3) {
    ?>
    <script>
        alert('Maaf, sila pastikan kata laluan baru sama dengan ulang kata laluan baru.');
        window.location = 'index.php?daftar=katalaluan';
    </script>
    <?php
} else {
    $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_object();
    if ($password == $row->password) {
        $password = $kata2;
        $sql = "UPDATE admin SET password = '$password'";
        $conn->query($sql);
        ?>
        <script>
            alert('Kata laluan baru telah berjaya disimpan.');
            window.location = 'index.php?daftar=katalaluan';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Maaf, sila pastikan kata laluan asal salah.');
            window.location = 'index.php?daftar=katalaluan';
        </script>
        <?php
    }
}