<?php
$title = "About";
require_once 'control/Operation.php';
$op = new Operation();
$url = $op->baseUrl();
$laliga = 'klasemen-laliga.php';
$epl = 'klasemen-epl.php';
require_once 'includes/kepala.php';
?>


<body>
   <?php
   require_once 'includes/nav.php';
   ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <div class="content cf">
         <h1 class=" saya">Tentang Saya</h1>
         <div class="profile">
            <img src='image/andri.jpg' alt="">
            <h3 class="">Andri Ilham</h3>
            <div class="npm">
               <p class="text-grey">17 111 322</p>
               <p class="text-grey ">TIF RP 17 CID C</p>
            </div>
            <h2>Pendidikan</h2>
            <table class="tabel-riwayat">
               <tr>
                  <td rowspan="3" class="waktu border-bawah">2017 - Sekarang</td>
                  <td class="tingkat">STT Bandung</td>
               </tr>
               <tr>
                  <td class="tambahan text-grey">Jurusan</td>
               </tr>
               <tr>
                  <td class="tambahan border-bawah text-grey">Teknik Informatika <span class="">S1</span></td>
               </tr>
               <tr>
                  <td rowspan="3" class="waktu border-bawah">2014 - 2017</td>
                  <td class="  tingkat">SMKN 1 Kota Cirebon</td>
               </tr>
               <tr>
                  <td class="tambahan text-grey">Jurusan</td>
               </tr>
               <tr>
                  <td class="tambahan border-bawah text-grey">Teknik Elektro Industri</td>
               </tr>
               <tr>
                  <td rowspan="2" class="waktu border-bawah">2011 - 2014</td>
                  <td class="  tingkat">SMPN 11 Kota Cirebon</td>
               </tr>
               <tr>
                  <td class="tambahan border-bawah text-grey">PonPes Qur'an Kayuwalang</td>
               </tr>
               <tr>
                  <td class="waktu border-bawah">2005 - 2011</td>
                  <td class=" font-sanspro tingkat border-bawah">MIS Nurul Fikri Leheng</td>
               </tr>
            </table><br>
            <h2 class="font-sanspro">Sosial Media</h2>
            <span class="sosmed"><i class="fab fa-facebook"></i> <a href="https://www.facebook.com/sob.andri" target="_balnk">Andri Ilham</a></span><br><br>
            <span class="sosmed"><i class="fab fa-instagram""></i> <a href=" https://www.instagram.com/andriilh" target="_balnk">andriilh</a></span>
            <br><br>
         </div>
      </div>
   </div>
   </div>


   <div class="footer">
      <p>&copy; Andri Ilham 2019</p>
   </div>

</body>

</html>