<h1>Senarai Pelajar</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
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
            <td><center><?php echo $bil++; ?></center></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td><a href="index.php?daftar=senaraikursus&idpelajar=<?php echo $row->idpelajar; ?>"><?php echo $row->namapelajar; ?></a></td>
        <?php
    }
    ?>
</table>
-- Sila klik nama pelajar untuk melihat senarai kursus yang telah didaftar--
<br><br>
<a href="pelajarprint.php?idpensyarah=<?php echo $idpensyarah; ?>">PRINT</a>