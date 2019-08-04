<?php
$koneksi = mysqli_connect("localhost", "root", "", "andri_17111322=");

$user = "admin";
$pass = md5("admin");
$data = mysqli_query($koneksi, "SELECT * from users where username='$user' and pass='$pass'");
$cek = mysqli_num_rows($data);

echo  "Row Affected " . $cek;
if ($cek > 0) {
   $_SESSION['username'] = $user;
   $_SESSION['status'] = "login";
}

echo "<br>";
echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['status'];
