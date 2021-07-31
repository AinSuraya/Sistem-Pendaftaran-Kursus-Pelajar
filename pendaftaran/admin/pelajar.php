<h1>Senarai Pelajar Mengikut Kelas</h1>

<table border="0">
    <tr>
        <th>KELAS</th>
        <th>PENSYARAH</th>
    </tr>
    <?php
    $sql = "SELECT * FROM pensyarah ORDER BY idpensyarah";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><a href="index.php?daftar=senaraipelajar1&idpensyarah=<?php echo $row->idpensyarah; ?>"><?php echo $row->kelas; ?></a></td>
            <td><?php echo $row->namapensyarah; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
-- Sila klik nama kursus untuk melihat senarai pelajar yang mendaftar--
