<h1>Senarai Kursus</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Kod Kursus</th>
        <th>Nama Kursus</th>
        <th>Jam Kredit</th>
        <th>Tindakan</th>
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
            <td><?php echo $row->namakursus; ?></td>
            <td><?php echo $row->jamkredit; ?></td>
            <td>
                <a href="index.php?daftar=edit&idkursus=<?php echo $row->idkursus; ?>">Edit</a>
                |
                <a href="padam.php?idkursus=<?php echo $row->idkursus; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>