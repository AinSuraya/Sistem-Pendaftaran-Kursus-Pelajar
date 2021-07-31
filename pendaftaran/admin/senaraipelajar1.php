<?php
    $idpensyarah = $_GET['idpensyarah'];
    $sql = "SELECT * FROM pensyarah WHERE idpensyarah = $idpensyarah";
    $row = $conn->query($sql)->fetch_object();
?>
<h1>Senarai Pelajar Yang Telah Daftar</h1>

<p> <?php echo $row->kelas;?> | <?php echo $row->namapensyarah;?> | <?php echo $row->jabatan;?></p><br>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
    </tr>
    <?php
    $bil = 1;
    $idpelajar = $_GET['idpensyarah'];
    $sql = "SELECT * FROM pelajar WHERE idpensyarah = $idpelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
        </tr>
        <?php
    }
    ?>
</table>