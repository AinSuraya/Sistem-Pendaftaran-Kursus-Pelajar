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
<center><table border="0">
    <tr>
        <th>Bil</th>
        <th>No Pendaftaran</th>
        <th>Nama Pelajar</th>
    </tr>
    <?php
        $bil = 1;
        $idpensyarah = $_GET['idpensyarah'];
        $sql = "SELECT * FROM pelajar WHERE idpensyarah = $idpensyarah";
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
<p>-- klik butang untuk mencetak halaman semasa --</p>
<img src="print.png" width="50px" height="10%" onclick="window.print()">
</center>
</body>
</html>