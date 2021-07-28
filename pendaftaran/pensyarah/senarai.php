<h1>Senarai Pelajar</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Pelajar</th>
        <th>No Pendaftaran</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pelajar ORDER BY username";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td>
                <a href="reset.php?idpelajar=<?php echo $row->idpelajar; ?>">Reset</a>
                |
                <a href="index.php?daftar=edit&idpelajar=<?php echo $row->idpelajar; ?>">Edit</a>
                |
                <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>