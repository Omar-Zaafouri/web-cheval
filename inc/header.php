<link rel="shortcut icon" href="images/logo_icon.png" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/rss-style.css" rel="stylesheet">
<script type="text/javascript" src="inc/jquery-1.8.3.js"></script>
<style type="text/css">
<!--
.Style1 {
	font-size: x-small
}
-->
</style>
<?php 
	$tokens = explode("/",$_SERVER['PHP_SELF']);
	$page_courante = $tokens[count($tokens)-1];
	 
	if($page_courante=='index.php') { 
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>web-cheval.com : creation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}elseif ($page_courante=='nos_services.php'){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nos services: creation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}elseif ($page_courante=='packs_web.php'){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Packs web: cr�ation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}elseif ($page_courante=='sur_mesure.php'){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sur mesure: cr�ation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}elseif ($page_courante=='contact.php'){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact : cr�ation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}elseif ($page_courante ){
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>web-cheval.com : cr�ation de sites Internet d�di�s au monde du cheval</title>
<meta name="description" content="web-cheval est le  sp�cialiste de la cr�ation de sites Internet d�di� au monde du cheval (centre �questre, �curie, organisateur de jumping, organisation officielle)." />
<meta name="keywords" content="cr�ation site Internet cheval, r�alisation site internet cheval, internet, cheval, centre equestre, �cure, site de jumping"/>
<?php 
}
?>