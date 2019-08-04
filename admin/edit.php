<?php
$title = 'Tambah Berita';
session_start();
include 'head.php';

// mengecek apakah id terkirim
if (isset($_GET['id'])) {
   $res = $op->getBerita_byId($_GET['id'])->get_result();
   $dt = $res->fetch_object();
   $_SESSION['idb'] = $_GET['id'];
} else {
   header("location:" . $op->adminBase());
}
?>

<body>
   <?php require_once('nav.php'); ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <h1 class="text-grey">Post News</h1>
      <a href="index.php" class="btn-besar text-white">Back</a>

      <form action="<?php echo $op->adminBase() . '../process/process.php?kode=update&id=' . $dt->id; ?>" method="POST">
         <table class="add-tb">


            <tr>
               <td>Title:</td>
               <td><input type="text" class="masukan" name="title" placeholder="Judul Berita" required value="<?= $dt->judul_berita; ?>"></td>
            </tr>
            <tr>
               <td>Penulis:</td>
               <td><input type="text" class="masukan" name="namaPenulis" placeholder="Nama Penulis" value="<?= $dt->penulis; ?>"></td>
            </tr>
            <tr>
               <td>Konten:</td>
               <td><textarea name="konten" id="" cols="30" rows="10" class="masukan area" required><?= $dt->isi; ?></textarea></td>
            </tr>
            <tr>
               <td>Keterangan Gambar:</td>
               <td><input type="text" class="masukan" name="ketGambar" placeholder="Nama Penulis" required value="<?= $dt->ket_gambar; ?>"></td>
            </tr>
         </table>
         <button type="submit" class="btn-besar">Simpan</button>
      </form>

   </div>
</body>