<?php
$idpelajar = $_GET['idpelajar'];
$sql = "SELECT nomatrik, namapelajar, username, password FROM pelajar WHERE idpelajar = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelajar);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nomatrik, $namapelajar, $username, $password);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Pelajar</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idpelajar" value="<?php echo $idpelajar; ?>">
    <table>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Pelajar</td>
            <td><input type="text" name="namapelajar" value="<?php echo $namapelajar; ?>"></td>
        </tr>
        <tr>
            <td>No Pendaftaran Pelajar</td>
            <td><input type="text" name="nomatrik" value="<?php echo $nomatrik; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>