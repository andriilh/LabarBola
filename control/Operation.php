<?php
class Operation
{
   private $con;
   function __construct()
   {
      require_once "connect.php";
      $db = new Connect();
      $this->con = $db->connect();
   }

   function baseUrl()
   {
      return 'http://localhost/andri_17111322/';
   }

   function adminBase()
   {
      return 'http://localhost/andri_17111322/admin/';
   }

   function getBerita()
   {
      try {
         $stmt = $this->con->prepare('SELECT * FROM tb_berita');
         $stmt->execute();
         return $stmt;
      } catch (Exception $e) {
         return $e->getMessage;
      }
   }

   function getBeritaFront()
   {
      // SELECT * FROM Customer ORDER BY Country DESC
      try {
         $stmt = $this->con->prepare('SELECT * FROM tb_berita ORDER BY id DESC');
         $stmt->execute();
         return $stmt;
      } catch (Exception $e) {
         return $e->getMessage;
      }
   }

   function login($user, $pass)
   {
      try {
         $stmt = $this->con->prepare("SELECT * from users where username=? and pass=?");
         $stmt->bind_param('ss', $user, $pass);
         $stmt->execute();
         $stmt = mysqli_affected_rows($stmt);
         return $stmt;
      } catch (Exception $e) {
         return $e->getMessage;
      }
   }

   function insertMahasiswa($judul, $penulis, $waktu, $isi, $gambar, $ketGambar)
   {
      try {
         $stmt = $this->con->prepare("INSERT INTO tb_berita(judul_berita,penulis,waktu, isi, gambar,ket_gambar) VALUES (?,?,?,?,?,?)");
         $stmt->bind_param('ssssss', $judul, $penulis, $waktu, $isi, $gambar, $ketGambar);
         $stmt->execute();
         $stmt->store_result();
         return true;
      } catch (Exception $e) {
         return false;
      }
   }

   function insertUsers($nama, $user, $pass)
   {
      try {
         $stmt = $this->con->prepare("INSERT INTO users(nama,username,pass) VALUES (?,?,?)");
         $stmt->bind_param('sss', $nama, $user, $pass);
         $stmt->execute();
         $stmt->store_result();
         return true;
      } catch (Exception $e) {
         return false;
         echo $e;
      }
   }

   function getBerita_byId($id)
   {
      try {
         $stmt = $this->con->prepare("SELECT * FROM tb_berita WHERE id = ?");
         $stmt->bind_param('s', $id);
         $stmt->execute();
         return $stmt;
      } catch (Exception $e) {
         return $e->getMessage();
      }
   }

   function deleteBerita($id)
   {
      try {
         $stmt = $this->con->prepare("DELETE FROM tb_berita WHERE id = ?");
         $stmt->bind_param('s', $id);
         $stmt->execute();
         return true;
      } catch (Exception $s) {
         return false;
      }
   }

   function updateBerita($judul_berita, $penulis, $isi, $ketGambar, $id)
   {
      try {
         $stmt = $this->con->prepare("UPDATE tb_berita SET judul_berita=?, penulis=?, isi=?, ket_gambar=? WHERE id=?");
         $stmt->bind_param('sssss', $judul_berita, $penulis, $isi, $ketGambar, $id);
         $stmt->execute();
         $stmt->store_result();
         return true;
      } catch (Exception $e) {
         return false;
      }
   }
}
