<html>
<body>
<?php
	// Initialiser la session
	session_start();
	// VÈrifier si l'utilisateur est connectÈ, sinon redirection vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<img src="https://media.discordapp.net/attachments/1083134699049865296/1083474116033658880/Sans_titre_44_20230308200619.png?" width="1440"  height="261" alt="Image"/>
<div id="barre">
    <a id="lienhaut" href="index.html"><b>Accueil</b></a> |
    <a id="lienhaut" href="logout.php"><b>Deconnexion</b></a> |
    <a id="lienhaut" href="aide.php"><b>Aide</b></a> |
    <a id="lienhaut" href="credits.html"><b>R&egrave;gles cr&eacute;dits et liens utiles</b></a>
</div>
</body>
<center><h1>Discutez avec les membres !</h1></center>

    <title>Forum</title>
    <h1>Bienvenue sur le forum</h1>

    <h2>Sujets :</h2>

    <ul>
        <li><a href="wiiu.php">WiiU</a></li>
        <li><a href="32ds.php">3ds/2ds</a></li>
        <li><a href="dsi.php">DSI</a></li>
        <li><a href="wii.php">Wii</a></li>
    </ul>

    <p>S√©lectionnez un sujet pour acc√©der √† la discussion correspondante.</p>
<footer>
  <div id="bas">
    <p>&copy; 2023 Projet D - All rights reserved</p>
    <p>Made with &#10084;&#65039;</p>
  </div>
</footer>
</html>
