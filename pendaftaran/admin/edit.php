<h1>Edit Pensyarah</h1>

<form action="" method="post">
    <input type="hidden" name="idpensyarah" value="<?php echo $idpensyarah; ?>">
    <table>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Pensyarah</td>
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
            <td colspan="2" align="center">
            <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>