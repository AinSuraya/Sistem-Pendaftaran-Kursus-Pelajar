<h1>Senarai Pelajar Mengikut Kursus</h1>

<table border="1">
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
            <td><center><?php echo $bil++; ?></center></td>
            <td><?php echo $row->kodkursus; ?></td>
            <td><a href="index.php?daftar=senaraipelajar&idkursus=<?php echo $row->idkursus; ?>"><?php echo $row->namakursus; ?></a></td>
            <td><center><?php echo $row->jamkredit; ?></center></td>
        </tr>
        <?php
    }
    ?>
</table>
-- Sila klik nama kursus untuk melihat senarai pelajar yang mendaftar--
