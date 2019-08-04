<?php
$url;
$laliga;
$epl;
?>

<!-- navbar -->
<nav>
   <div class="container">
      <span class="logo"><a href="#">AIL</a></span>
      <ul>
         <li><a href="<?php echo $url; ?>">HOME</a></li>
         <li><a href="#">Tables</a>
            <ul>
               <li><a href="<?= $laliga; ?>">Liga Spanyol</a></li>
               <li><a href="<?= $epl; ?>">Liga Inggris</a></li>
            </ul>
         </li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="about.php">About</a></li>
      </ul>
   </div>
</nav>
<!-- navbar -->