<?php
include_once '../control/Operation.php';
$op = new Operation();

if (isset($_GET['kode'])) {
   switch ($_GET['kode']) {
      case 'insert':
         $judul_berita = $_POST['title'];
         $penulis = $_POST['namaPenulis'];
         $waktu = date("Y/m/d");
         $isi = $_POST["konten"];
         $ket_gambar = $_POST["ketGambar"];

         $gambar = $_FILES["gambar"]["name"];
         $targetLoc = "../image/";
         $targetFile = $targetLoc . basename($_FILES["gambar"]["name"]);
         if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
            $add = $op->insertMahasiswa($judul_berita, $penulis, $waktu, $isi, $gambar, $ket_gambar);
            if ($add) {
               header("location:" . $op->adminBase());
            }
         } else {
            echo "Gagal";
         }
         break;

      case 'delete':
         $id = $_GET['id'];
         $delete = $op->deleteBerita($id);
         if ($delete) {
            header("location:" . $op->adminBase());
         }
         break;

      case 'update':
         $id = $_GET['id'];
         $judul_berita = $_POST['title'];
         $penulis = $_POST['namaPenulis'];
         $isi = $_POST["konten"];
         $ket_gambar = $_POST["ketGambar"];
         $edit = $op->updateBerita($judul_berita, $penulis, $isi, $ket_gambar, $id);
         if ($edit) {
            header("location:" . $op->adminBase());
         }
         break;

      case 'insertUser':
         $nama = $_POST['nama'];
         $user = $_POST['username'];
         $pass = md5($_POST["password"]);


         $add = $op->insertUsers($nama, $user, $pass);
         if ($add) {
            header("location:" . $op->adminBase());
         }
         break;

      case 'masuk':
         $user = $_POST['username'];
         $pass = md5($_POST['pass']);
         $koneksi = mysqli_connect("localhost", "root", "", "andri_17111322");
         $data = mysqli_query($koneksi, "SELECT * from users where username='$user' and pass='$pass'");
         $cek = mysqli_num_rows($data);


         if ($cek > 0) {
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['status'] = "login";
            header("location:" . $op->adminBase());
         } else {
            header("location:login.php");
         }
         break;

      case 'keluar':
         session_start();
         session_destroy();
         header("location:../admin/login.php");
         break;
   }
} else {
   header("location:" . $op->adminBase());
}
