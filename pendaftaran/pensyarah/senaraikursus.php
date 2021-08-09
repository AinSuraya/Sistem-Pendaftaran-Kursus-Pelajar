<?php
    $idpelajar = $_GET['idpelajar'];
    $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
    $row = $conn->query($sql)->fetch_object();
?>
<h1>Senarai Kursus Yang Telah Didaftar</h1>

<p><?php echo $row->namapelajar;?></p><br>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Kod Kursus</th>
        <th>Nama Kursus</th>
        <th>Jam Kredit</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pensyarah, pelajar, daftar, kursus 
    WHERE pelajar.idpensyarah = pensyarah.idpensyarah
    AND pelajar.idpelajar = daftar.idpelajar AND daftar.idkursus = kursus.idkursus AND daftar.idpelajar = $idpelajar";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><center><?php echo $bil++; ?></center></td>
            <td><?php echo $row->kodkursus; ?></td>
            <td><?php echo $row->namakursus; ?></td>
            <td><center><?php echo $row->jamkredit; ?></center></td>
        </tr>
        <?php
    }
    ?>
</table>