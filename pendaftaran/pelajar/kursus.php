<h1>Senarai Kursus</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Kod Kursus</th>
        <th>Nama Kursus</th>
        <th>Jam Kredit</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $idpelajar = $_SESSION['idpelajar'];
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
            <td>
            <center><a href="padam.php?iddaftar=<?php echo $row->iddaftar;?>" onclick="return confirm()">Padam</a></center>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
