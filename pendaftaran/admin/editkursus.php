<h1>Edit Kursus</h1>

<form action="" method="post">
    <input type="hidden" name="idkursus" value="<?php echo $idkursus; ?>">
    <table>
        <tr>
            <td>Kod Kursus</td>
            <td><input type="text" value="<?php echo $kodkursus; ?>"></td>
        </tr>
        <tr>
            <td>Nama Kursus</td>
            <td><input type="text" name="namapensyarah" value="<?php echo $namakursus; ?>"></td>
        </tr>
        <tr>
            <td>Jam Kredit</td>
            <td><input type="text" name="jabatan" value="<?php echo $jamkredit; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>