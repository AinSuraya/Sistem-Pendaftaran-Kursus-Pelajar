<?php
require '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>
<body>
<center><table border="1">
    <tr>
        <th>Bil</th>
        <th>Kod Kursus</th>
        <th>Nama Kursus</th>
        <th>Jam Kredit</th>
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
        </tr>
        <?php
    }
    ?>
</table>
<p>-- klik butang untuk mencetak halaman semasa --</p>
<img src="print.png" width="50px" height="10%" onclick="window.print()">
</center>
</body>
</html>