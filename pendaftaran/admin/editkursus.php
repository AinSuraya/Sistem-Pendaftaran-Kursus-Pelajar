<?php
$idkursus = $_GET['idkursus'];
$sql = "SELECT kodkursus, namakursus, jamkredit FROM kursus WHERE idkursus = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idkursus);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($kodkursus, $namakursus, $jamkredit);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Kursus</h1>

<form action="edit-simpan-kursus.php" method="post">
    <input type="hidden" name="idkursus" value="<?php echo $idkursus; ?>">
    <table>
        <tr>
            <td>Kod Kursus</td>
            <td><input type="text" name="kodkursus" value="<?php echo $kodkursus; ?>"></td>
        </tr>
        <tr>
            <td>Nama Kursus</td>
            <td><input type="text" name="namakursus" value="<?php echo $namakursus; ?>"></td>
        </tr>
        <tr>
            <td>Jam Kredit</td>
            <td><input type="text" name="jamkredit" value="<?php echo $jamkredit; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>