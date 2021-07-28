<h1>Edit Pelajar</h1>

<form action="" method="post">
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
            <button type="submit">Simpan</button>
            </td>
        </tr>
    </table>
</form>