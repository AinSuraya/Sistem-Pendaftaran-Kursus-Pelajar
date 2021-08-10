<h1>Senarai Pelajar</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $idpelajar = $_SESSION['idpensyarah'];
    $sql = "SELECT * FROM pelajar WHERE idpensyarah = $idpelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
            <td>
                <a href="reset.php?idpelajar=<?php echo $row->idpelajar; ?>">Reset</a>
                |
                <a href="index.php?daftar=edit&idpelajar=<?php echo $row->idpelajar; ?>">Edit</a>
                |
                <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>" onclick="return confirm()">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>