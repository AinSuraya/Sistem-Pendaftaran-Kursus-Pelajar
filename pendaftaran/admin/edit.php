<?php
$idpensyarah = $_GET['idpensyarah'];
$sql = "SELECT username, namapensyarah, jabatan, kelas, password FROM pensyarah WHERE idpensyarah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpensyarah);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username, $namapensyarah, $jabatan, $kelas, $password);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Penasihat Akademik</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idpensyarah" value="<?php echo $idpensyarah; ?>">
    <table>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Penasihat Akademik</td>
            <td><input type="text" name="namapensyarah" value="<?php echo $namapensyarah; ?>"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><input type="text" name="jabatan" value="<?php echo $jabatan; ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $kelas; ?>"></td>
        </tr>
        <tr>
            <td>Kata laluan</td>
            <td><input type="text" name="password" value="<?php echo $password; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>