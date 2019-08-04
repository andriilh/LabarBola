<?php
require_once("head.php");
require_once('../control/Operation.php');
$op = new Operation();
?>

<nav>
   <div class="container">
      <span class="logo"><a href="<?= $op->adminBase(); ?>">AIL</a></span>
      <ul>
         <li><a href="<?= $op->baseUrl(); ?>" target="_balnk">Lihat Di Web</a></li>
         <li><a href="registrasi.php">registrasi</a></li>
         <li><a href="<?= $op->adminBase() . '../process/process.php?kode=keluar'; ?>">Log Out</a></li>
      </ul>
   </div>
</nav>