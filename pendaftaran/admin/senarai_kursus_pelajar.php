<?php
    $idkursus = $_GET['idkursus'];
    $sql = "SELECT * FROM kursus WHERE idkursus = $idkursus";
    $row = $conn->query($sql)->fetch_object();
?>
<h1>Senarai Pelajar Yang Telah Daftar</h1>

<p><?php echo $row->namakursus;?></p><br>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Kelas</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
        <th>Pensyarah</th>
        <th>Jabatan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pensyarah, pelajar, daftar, kursus 
    WHERE pelajar.idpensyarah = pensyarah.idpensyarah
    AND pelajar.idpelajar = daftar.idpelajar AND daftar.idkursus = kursus.idkursus";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
            <td><?php echo $row->namapensyarah; ?></td>
            <td><?php echo $row->jabatan; ?></td>
        </tr>
        <?php
    }
    ?>
</table>