<h1>Senarai Pensyarah</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Nama Pengguna</th>
        <th>Kelas</th>
        <th>Nama Pensyarah</th>
        <th>Jabatan</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pensyarah ORDER BY username";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td><?php echo $row->namapensyarah; ?></td>
            <td><?php echo $row->jabatan; ?></td>
            <td>
                <a href="">Reset</a>
                |
                <a href="index.php?daftar=edit">Edit</a>
                |
                <a href="">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>