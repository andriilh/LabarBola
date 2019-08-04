<?php
$title = "Contacs";
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
      <div class="content cf contact">
         <h2>contact us</h2>
         <p class="">Hubungi kami yang anda butuhkan</p>
         <form action="index.html" method="POST">
            <div id="input">
               <span>Nama Depan</span>
               <input type="text" name="firstname" id="" placeholder="Andri" required>
               <span>Nama Belakang</span>
               <input type="text" name="lastname" id="" placeholder="Ilham" required>
               <span>Email</span>
               <input type="email" name="email" id="" placeholder="andri@example.id" required>
               <span>Komplain Anda</span>
               <textarea rows="5" cols="38"></textarea>
               <input type="submit" value="Kirim">
            </div>

         </form>
         <div class="kosong"></div>
      </div>
   </div>

   <div class="footer">
      <p>&copy; Andri Ilham 2019</p>
   </div>

</body>

</html>