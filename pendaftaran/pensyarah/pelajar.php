<h1>Senarai Pelajar</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pelajar ORDER BY idpelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td><a href="index.php?daftar=senaraikursus"><?php echo $row->namapelajar; ?></a></td>
        </tr>
        <?php
    }
    ?>
</table>
-- Sila klik nama pelajar untuk melihat senarai kursus yang telah didaftar--