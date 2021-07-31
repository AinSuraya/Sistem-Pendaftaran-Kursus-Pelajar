<h1>Senarai Pelajar Mengikut Kursus</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Kod Kursus</th>
        <th>Nama Kursus</th>
        <th>Jam Kredit</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM kursus ORDER BY idkursus";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->kodkursus; ?></td>
            <td><a href="index.php?daftar=senarai_kursus_pelajar&idkursus=<?php echo $row->idkursus; ?>"><?php echo $row->namakursus; ?></a></td>
            <td><?php echo $row->jamkredit; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
-- Sila klik nama kursus untuk melihat senarai pelajar yang mendaftar--