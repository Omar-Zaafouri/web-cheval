<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ("inc/header.php");?>
</head>
<body>
<div id="top2">
  <div id="banner"> <img src="images/logo.png" alt="Web Cheval" class="logo" />
    <div id="bloc_contact">
      <h2></h2>
      <?php 
	  if($_POST){
							
		$message="Nouveau Contact";
		$message.=" ---------------------------------------------------
		Coordonn&eacute;es Client
		---------------------------------------------------"."\r\n";

		if(isset($_POST['nom'])) { $message.=" NOM:  ".$_POST['nom']."\r\n"; }
		if(isset($_POST['prenom'])) { $message.=" Prenom:  ".$_POST['prenom']."\r\n"; }
		if(isset($_POST['societe'])) { $message.=" Societe:  ".$_POST['societe']."\r\n"; }
		if(isset($_POST['email'])) { $message.=" Email:  ".$_POST['email']."\r\n"; }
		if(isset($_POST['tel'])) { $message.=" T&eacute;l&eacute;phone:  ".$_POST['tel']."\r\n"; }
		if(isset($_POST['adresse'])) { $message.=" Adresse:  ".$_POST['adresse']."\r\n"; }
		if(isset($_POST['message'])) { $message.=" Message:  ".$_POST['message']."\r\n"; }


		$message.=" ---------------------------------------------------
		Webmaster 
		---------------------------------------------------"."\r\n";

		//echo $message.'<br>';
		$headers .= 'To: Createurdimage <internet@createurdimage.fr> ' . "\r\n";
		$headers .= 'From: Site <internet@createurdimage.fr>' . "\r\n";


		// Envoi

		mail("internet@createurdimage.fr","Email Contact",$message, $headers);
		if(@mail){ echo "<samp style='color:#fff' >
		          votre email a &eacute;t&eacute; bien envoyer<BR> <a style='color:#fff' href='index.php'>Retour</a>
		</samp>" ; }

	  }else{
		   ?>
      <form action="" method="POST"  onsubmit="return(check());" >
        <table width="100%" border="0">
          <tr>
            <td width="17%"><label>Nom:</label></td>
            <td width="83%"><input name="nom" type="text" id="nom" /></td>
          </tr>
          <tr>
            <td><label>Pr&eacute;nom:</label></td>
            <td><input name="prenom" type="text" id="prenom" /></td>
          </tr>
          <tr>
            <td><label>Soci&eacute;t&eacute;:</label></td>
            <td><input name="societe" type="text" id="societe" /></td>
          </tr>
          <tr>
            <td><label>Email:</label></td>
            <td><input name="email" type="text" id="email" /></td>
          </tr>
          <tr>
            <td><label>T&eacute;l&eacute;phone:</label></td>
            <td><input name="tel" type="text" id="tel" /></td>
          </tr>
          <tr>
            <td><label>Adresse:</label></td>
            <td><input name="adresse" type="text" id="adresse" /></td>
          </tr>
          <tr>
            <td><label>Message:</label></td>
            <td><textarea name="message" id="message"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input value="" type="submit" name="Submit" class="bot" /></td>
          </tr>
        </table>
      </form>
      <?php		  
		  }
	  ?>
    </div>
  </div>
</div>
<script type="text/javascript">
function check() {

   if(document.getElementById('nom').value == "") {
      alert('STP Saisir votre Nom');
      return false; }
   
   if(document.getElementById('prenom').value == "") {
      alert('STP Saisir votre Prenom');
      return false; }

if(document.getElementById('tel').value == "") {
      alert('STP Saisir votre Tel');
      return false; }
   
   if(document.getElementById('email').value == "") {
      alert('STP Saisir votre Email');
      return false; }
		////////////
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = document.getElementById('email').value;
		if(reg.test(address) == false) {
		alert('Invalid Email Address');
		return false; }
		/////////
   
   if(document.getElementById('societe').value == "") {
      alert('STP Saisir votre societe');
      return false; }   
   if(document.getElementById('message').value == "") {
      alert('STP Saisir votre message');
      return false; }
   
}
</script>
<?php include ("inc/menu.php");?>
<div id="body">
  <?php include ("inc/footer.php");?>
</div>
</body>
</html>
