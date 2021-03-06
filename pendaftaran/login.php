<?php
require('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin') {
    $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_object();
    if ($password == $row->password) {
        $_SESSION['admin'] = 'admin';
        ?>
        <script>
            alert('Berjaya log masuk!');
            window.location = 'admin/';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Maaf, nama pengguna / kata laluan tidak sah!');
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
        if ($password == $pswd) {
            $_SESSION['idpensyarah'] = $idpensyarah;
            ?>
            <script>
                alert('Berjaya log masuk!');
                window.location = 'pensyarah/';
            </script>
        <?php
    } else {
            ?>
            <script>
                alert('Maaf, nama pengguna / kata laluan tidak sah!');
                window.location = './';
            </script>
            <?php
        }
    } else {
        #login pelajar
        $sql = "SELECT idpelajar, password FROM pelajar WHERE nomatrik = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->bind_result($idpelajar, $pswd);
        if ($num_rows == 1) {
            echo $conn->error;
            $stmt->fetch();
            if ($password == $pswd) {
                $_SESSION['idpelajar'] = $idpelajar;
                ?>
                <script>
                    alert('Berjaya log masuk!');
                    window.location = 'pelajar/';
                </script>
            <?php
            } else {
                ?>
                <script>
                    alert('Maaf, nama pengguna / kata laluan tidak sah!');
                    window.location = './';
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert('Maaf, nama pengguna / kata laluan tidak sah!');
                window.location = './';
            </script>
            <?php
        }
        $stmt->close();
    }
    $stmt->close();
}