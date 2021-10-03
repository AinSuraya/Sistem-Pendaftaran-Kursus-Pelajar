<h1>Senarai Penasihat Akademik</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Nama Pengguna</th>
        <th>Kelas</th>
        <th>Nama Penasihat Akademik</th>
        <th>Jabatan</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pensyarah ORDER BY username";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><center><?php echo $bil++; ?></center></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td><?php echo $row->namapensyarah; ?></td>
            <td><center><?php echo $row->jabatan; ?></center></td>
            <td>
                <a href="reset.php?idpensyarah=<?php echo $row->idpensyarah; ?>">Reset</a>
                |
                <a href="index.php?daftar=edit&idpensyarah=<?php echo $row->idpensyarah; ?>">Edit</a>
                |
                <a href="padam.php?idpensyarah=<?php echo $row->idpensyarah; ?>" onclick="return confirm()">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>