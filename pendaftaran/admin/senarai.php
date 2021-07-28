<h1>Senarai Pensyarah</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Pensyarah</th>
        <th>Jabatan</th>
        <th>Kelas</th>
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
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->namapensyarah; ?></td>
            <td><?php echo $row->jabatan; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td>
                <a href="reset.php?idpensyarah=<?php echo $row->idpensyarah; ?>">Reset</a>
                |
                <a href="index.php?daftar=edit&idpensyarah=<?php echo $row->idpensyarah; ?>">Edit</a>
                |
                <a href="padam.php?idpensyarah=<?php echo $row->idpensyarah; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>