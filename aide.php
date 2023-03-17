<!DOCTYPE HTML>
<html>
<?php
	// Initialiser la session
	session_start();
	// Vérifier si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>

  <title>Forum D</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <div>
    <img class="fit-picture" src="https://media.discordapp.net/attachments/1083134699049865296/1083474116033658880/Sans_titre_44_20230308200619.png?" width=1440&height=261">
  </div>
  <div id="barre">
    <a id="lienhaut" href="index.html"><b>Accueil</b></a> |
    <a id="lienhaut" href="discussions.php"><b>Discussions</b></a> |
    <a id="lienhaut" href="logout.php"><b>Deconnexion</b></a> |
    <a id="lienhaut" href="credits.html"><b>R&egrave;gles cr&eacute;dits et liens utiles</b></a>
  </div>


<center><h1>Vous avez besoin d'aide ?</h1></center>


<div id="global">
	<div id="wiiu">
	<h3><strong>WiiU</strong></h3>
	<h4>- <a href="wiiu/aide-hack.php">Probl&egrave;me hack</a></h4>
	<h4>- <a href="wiiu/aide-nonhack.php">Probl&egrave;me console non hack</a></h4>
	<h4>- <a href="wiiu/aide-hardware.php">Probl&egrave;me hardware</a></h4>
	</div>

	<div id="32ds">
	<h3><strong>3ds/2ds</strong></h3>
	<h4>- <a href="32ds/aide-hack.php">Probl&egrave;me hack</a></h4>
	<h4>- <a href="32ds/aide-nonhack.php">Probl&egrave;me console non hack</a></h4>
	<h4>- <a href="32ds/aide-hardware.php">Probl&egrave;me hardware</a></h4>
	</div>

	<div id="dsi">
	<h3><strong>DSI</strong></h3>
	<h4>- <a href="dsi/aide-hack.php">Probl&egrave;me hack</a></h4>
	<h4>- <a href="dsi/aide-nonhack.php">Probl&egrave;me console non hack</a></h4>
	<h4>- <a href="dsi/aide-hardware.php">Probl&egrave;me hardware</a></h4>
	</div>

	<div id="wii">
	<h3><strong>Wii</strong></h3>
	<h4>- <a href="wii/aide-hack.php">Probl&egrave;me hack</a></h4>
	<h4>- <a href="wii/aide-nonhack.php">Probl&egrave;me console non hack</a></h4>
	<h4>- <a href="wii/aide-hardware.php">Probl&egrave;me hardware</a></h4>
	</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <div id="bas">
    <p>&copy; 2023 Projet D - All rights reserved</p>
    <p>Made with &#10084;&#65039;</p>
  </div>
</footer>
</html>

</html>