<?php
$title = "Labar Bola";
require_once 'control/Operation.php';
$op = new Operation();
$url = $op->baseUrl();
$laliga = 'klasemen-laliga.php';
$epl = 'klasemen-epl.php';
require_once("includes/kepala.php");

require_once "control/Operation.php";
$op = new Operation();

?>

<body>
   <?php require_once("includes/nav.php"); ?>
   <div class="head">
      <div class="container">
         <h2>Portal berita Sepakbola</h2>
         <p>by Andri Ilham</p>
      </div>
   </div>
   <div class="container">
      <div class="content cf">
         <div class="main">
            <?php
            $berita =  $op->getBeritaFront()->get_result();
            while ($dataBerita = $berita->fetch_object()) {
               ?>

               <h1 class="judul-utama"><?= $dataBerita->judul_berita; ?></h1>
               <p class="ket-berita">Ditulis Oleh <a href=""><?= $dataBerita->penulis; ?></a> - <?= $dataBerita->waktu; ?></p>
               <div class="ga mbar-berita"><img src="<?php echo "image/" . $dataBerita->gambar; ?>" alt="" class="image-utama"></div>
               <div class="ket-gambar">
                  <p><?= $dataBerita->ket_gambar; ?></p>
               </div>
               <?= $dataBerita->isi; ?>

            <?php } ?>

            <!-- bottom -->
            <div class="bottom-news">
               <div class="item-bottom">
                  <a href="https://www.bola.net/spanyol/hasil-pertandingan-real-betis-vs-real-madrid-skor-1-2-a66cfb.html" target="_balnk">Hasil Pertandingan Real Betis vs Real Madrid: Skor 1-2</a>
               </div>
               <div class="item-bottom">
                  <a href="https://www.bola.net/editorial/3-alasan-mengapa-philippe-coutinho-harus-gabung-mu.html" target="_balnk">3
                     Alasan Mengapa Philippe Coutinho Harus Gabung MU</a>
               </div>
               <div class="item-bottom">
                  <a href="https://www.bola.net/bundesliga/makoto-hasebe-jantung-permainan-frankfurt-yang-tak-tergantikan-b7da28.html" target="_balnk">Makoto Hasebe, Jantung Permainan Frankfurt yang Tak Tergantikan</a>
               </div>

            </div>
            <!-- end of bottom -->
         </div>

         <!-- sidebar -->
         <div class="sidebar cf">
            <h3>Hasil Pertandingan</h3>
            <div class="hasil">
               <a href="" class="score">Betis <span>1 - 2 </span> Real Madrid</a>
            </div>
            <div class="hasil">
               <a href="" class="score">Man City <span>3 - 1 </span> Man United</a>
            </div>
            <div class="hasil">
               <a href="" class="score">Real Betis <span>1 - 1 </span> Espanyol</a>
            </div> <br>
            <h3>Berita Lainnya</h3>
            <div class="gambar-side gambar-4-side"></div>
            <p>Manchester City kembali ke puncak klasemen Premier League kasta teratas Liga Inggris seusai memenangi
               laga derbi versus Manchester United dengan skor 3-1 pada pertandingan pekan ke-12 di Stadion Etihad,
               Minggu (11/11/2018). <span>
                  <a href="https://bola.kompas.com/read/2018/11/12/04151368/hasil-man-city-vs-man-united-menangi-derbi-city-kembali-ke-puncak" target="_balnk">Selengkapnya</a>
               </span></p>
            <div class="gambar-side gambar-3-side"></div>
            <p>Hasil Akhir dan Kalsemen La Liga Jornada 25. <span>
                  <a href="https://bola.kompas.com/read/2018/11/12/04151368/hasil-man-city-vs-man-united-menangi-derbi-city-kembali-ke-puncak" target="_balnk">Selengkapnya</a>
               </span></p>
         </div>
      </div>
   </div>


   <div class="footer">
      <p>&copy; Andri Ilham 2019</p>
   </div>

</body>

</html>