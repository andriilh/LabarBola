<?php
$title = 'Tambah';
require_once("head.php");
?>

<body>
   <?php require_once('nav.php'); ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <h1 class="text-grey">Post News</h1>

      <a href="index.php" class="btn-besar text-white">Back</a>

      <form action="<?php echo $op->adminBase() . '../process/process.php?kode=insert'; ?>" method="POST" enctype="multipart/form-data">
         <table class="add-tb">
            <tr>
               <td>Title:</td>
               <td><input type="text" class="masukan" name="title" placeholder="Judul Berita" required></td>
            </tr>
            <tr>
               <td>Penulis:</td>
               <td><input type="text" class="masukan" name="namaPenulis" placeholder="Nama Penulis"></td>
            </tr>
            <tr>
               <td>Konten:</td>
               <td><textarea name="konten" id="" cols="30" rows="10" class="masukan area" required></textarea></td>
            </tr>
            <tr>
               <td>Gambar:</td>
               <td><input type="file" name="gambar" class="btn" value="Browse Image" required></td>
            </tr>
            <tr>
               <td>Keterangan Gambar:</td>
               <td><input type="text" class="masukan" name="ketGambar" placeholder="Nama Penulis"></td>
            </tr>
         </table>

         <button type="submit" class="btn-besar">Tambah Berita</button>
      </form>

   </div>
</body>