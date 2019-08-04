<?php
$title = 'Admin';
require_once("head.php");

session_start();
if ($_SESSION['status'] !== "login") {
   header("location:login.php");
}

?>

<body>
   <?php require_once('nav.php'); ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <h1 class="text-grey">Wellcome Admin!, Manage Your News</h1>

      <a href="add.php" class="btn-besar text-white">Post News</a>
      <h2 class="text-grey brt-anda">Berita Anda</h2>

      <table class="tabel">
         <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Content</th>
            <th colspan="2">Aksi</th>
         </tr>

         <?php
         $no = 1;
         $berita =  $op->getBerita()->get_result();
         while ($dataBerita = $berita->fetch_object()) {
            ?>
            <tr>
               <td><?= $no; ?></td>
               <td><?= $dataBerita->waktu; ?></td>
               <td><img src="<?php echo "../image/" . $dataBerita->gambar; ?>" style="max-height: 100px; max-width: 100px;" alt=""></td>
               <td><?= $dataBerita->judul_berita; ?></td>
               <td><?= $dataBerita->isi; ?></td>
               <td><a href="<?= $op->adminBase() . 'edit.php?id=' . $dataBerita->id; ?>" class="btn-kecil bck-succes text-white">edit</a></td>
               <td><a href="<?= $op->adminBase() . '../process/process.php?kode=delete&id=' .
                                 $dataBerita->id ?>" class="btn-kecil bck-danger text-white">delete</a></td>
            </tr>
            <?php $no++;
         } ?>
      </table>
   </div>
</body>

</html>