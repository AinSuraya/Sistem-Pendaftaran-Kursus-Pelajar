<?php
require('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

# abc123 = $2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6

if ($username == 'admin') {
    $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($password, $row->password)) {
        $_SESSION['admin'] = 'admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Maaf1, nama pengguna / kata laluan tidak sah!');
            window.location = './';
        </script>
        <?php
    }
} else {
    $sql = "SELECT idpensyarah, password FROM pensyarah WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $num_rows = $stmt->num_rows;
    $stmt->bind_result($idpensyarah, $pswd);
    if ($num_rows == 1) {
        echo $conn->error;
        $stmt->fetch();
        if (password_verify($password, $pswd)) {
            $_SESSION['idpensyarah'] = $idpensyarah;
            header('location: pensyarah/');
        } else {
            ?>
            <script>
                alert('Maaf2, nama pengguna / kata laluan tidak sah!');
                window.location = './';
            </script>
            <?php
        }
    } else {
        $sql = "SELECT idpelajar, password FROM pelajar WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->bind_result($idpelajar, $pswd);
        if ($num_rows == 1) {
            echo $conn->error;
            $stmt->fetch();
            if (password_verify($password, $pswd)) {
                $_SESSION['idpelajar'] = $idpelajar;
                header('location: pelajar/');
            } else {
                ?>
                <script>
                    alert('Maaf3, nama pengguna / kata laluan tidak sah!');
                    window.location = './';
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Maaf4, nama pengguna / kata laluan tidak sah!');
                window.location = './';
            </script>
            <?php
        }
        $stmt->close();
    }
    $stmt->close();
}