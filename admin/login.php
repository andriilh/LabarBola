<?php $title = "Log In";
require_once("head.php"); ?>

<body>
   <div id="body">
      <form action="<?php echo '../process/process.php?kode=masuk'; ?>" method="POST">
         <div class="logo">
            <p class="brand">AIL <span>Login</span></p>
         </div>
         <div class="form">
            <p>Username</p>
            <input type="text" name="username" id="" placeholder="Masukkan Username" required>
            <p>Password</p>
            <input type="password" name="pass" id="" placeholder="Password" required>
            <input type="submit" class="btn" value="LOG IN">

            <p class="tooo"><a href="../contact.php">Contact Us</a></p>

         </div>
         <div class="logo2">
            <p>&copy;Andri Ilham 2019</p>
         </div>
      </form>
   </div>


</body>

</html>