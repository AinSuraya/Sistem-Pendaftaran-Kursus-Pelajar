<h1>Senarai Pelajar</h1>

<table border="0">
    <tr>
        <th>Bil</th>
        <th>Nama Pengguna</th>
        <th>Nama Pelajar</th>
        <th>No Pendaftaran</th> 
    </tr>
    <?php
    # kena buat join antara table pelajar & pensyarah
    $bil = 1;
    $sql = "SELECT * FROM pelajar ORDER BY username";
    $result = $conn->query($sql);
    echo $conn->error;
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->namapelajar; ?></td>
            <td><?php echo $row->nomatrik; ?></td>
        </tr>
        <?php
    }
    ?>
</table>