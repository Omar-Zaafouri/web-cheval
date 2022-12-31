<?php 
 	$tokens = explode("/",$_SERVER['PHP_SELF']);
	$page_courante = $tokens[count($tokens)-1];
?>

<div id="menu">
  <ul>
    <li><a href="index.php" <?php if ($page_courante=="index.php") { echo 'class="home"';} ?>>L'agence</a></li>
    <li><a href="packs_web.php" <?php if ($page_courante=="packs_web.php") { echo 'class="home"';} ?>>Packs web</a></li>
    <li><a href="sur_mesure.php" <?php if ($page_courante=="sur_mesure.php") { echo 'class="home"';} ?>>Sur mesure</a></li>
    <li><a href="nos_services.php" <?php if ($page_courante=="nos_services.php") { echo 'class="home"';} ?>>Nos services</a></li>
    <li><a href="contact.php" <?php if ($page_courante=="contact.php") { echo 'class="home"';} ?>>Contact</a></li>
    <li><a href="contact.php" class="devis" <?php if ($page_courante=="contact.php") { echo 'class="home"';} ?>></a></li>
  </ul>
</div>
