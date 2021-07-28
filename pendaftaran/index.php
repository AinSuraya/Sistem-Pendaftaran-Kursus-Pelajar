<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Log Masuk</title>
</head>
<body>
<center>
  <marquee direction="right" height="70" width="100%" bgcolor="pink" loop="20">
  <font face="times new roman" size="30" color="maroon"><center>SISTEM PENDAFTARAN KURSUS PELAJAR</font></center>
  </marquee>
  <section class="parent">
    <section class="child">
    <form action="login.php" method="post">
        <h1>LOG MASUK</h1>
        <table border="0">
          <tr>
            <th>Nama Pengguna</th>
            <td><input type="text" name="username" required></td>
          </tr>
          <tr>
            <th>Kata Laluan</th>
            <td><input type="password" name="password" required></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <button type="submit">Log Masuk</button>
            </td>
          </tr>
        </table>
    </form>
    </section>
    <section class="child">
        <br>
        <b>PENGGUNA<br></b>
        <br>
        <b><font>1.admin</font></b></br>
        menguruskan pensyarah</br>
        menguruskan senarai kursus</br>
        melihat senarai pelajar ikut kelas</br>
        melihat senarai pelajar ikut kursus</br>
        <br>
        <b><font>2.pensyarah</font></b></br>
        menguruskan pelajar</br>
        melihat senarai kursus pelajar</br>
        <br>
        <b><font>3.pelajar</font></b></br>
        mendaftar kursus<br>
        <br>
    </section>
  </section>
</center>
</body>
</html>