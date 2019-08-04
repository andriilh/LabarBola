<?php
$title = "Registrasi";
require_once '../control/Operation.php';
$op = new Operation();
require_once 'head.php';

session_start();
if ($_SESSION['status'] !== "login") {
   header("location:login.php");
}
?>

<body>
   <?php
   require 'nav.php';
   ?>
   <div class="bawah-nav"></div>
   <div class="container">
      <div class="content cf contact">
         <h2>Registrasi Akun</h2>
         <p>Mendaftarkan akun Baru</p>
         <form action="<?php echo $op->adminBase() . '../process/process.php?kode=insertUser'; ?>" method="POST">
            <div id="input">
               <span>Nama Lengkap</span>
               <input type="text" name="nama" id="" placeholder="Andri Ilham" required>
               <span>Username</span>
               <input type="text" name="username" id="" placeholder="username" required>
               <span>Password</span>
               <input type="password" name="password" required>
               <input type="submit" class="tml" value="Kirim">
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