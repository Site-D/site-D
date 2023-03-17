<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: discussions.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>

<html>
  <title>Forum D</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <div>
    <img class="fit-picture" src="https://media.discordapp.net/attachments/1083134699049865296/1083474116033658880/Sans_titre_44_20230308200619.png?" width=1440&height=261">
  </div>
  <div id="barre">
    <a id="lienhaut" href="index.html"><b>Accueil</b></a> |
    <a id="lienhaut" href="discussions.php"><b>Discussions</b></a> |
    <a id="lienhaut" href="aide.php"><b>Aide</b></a> |
    <a id="lienhaut" href="credits.html"><b>R&egrave;gles cr&eacute;dits et liens utiles</b></a>
  </div>

  <h1 style="text-align: center;">Connexion</h1>

<div id="formulaire">
<form class="box" action="" method="post" name="login">
<label for="username">Nom:</label><br>
<input style="border-radius: 25px;" type="text" class="box-input" name="username" placeholder="Nom d'utilisateur"><br><br>
<label for="password">Mot de passe:</label><br>
<input style="border-radius: 25px;" type="password" class="box-input" name="password" placeholder="Mot de passe"><br><br><br>
<center><input type="submit" value="Connexion " name="submit" class="box-button"></center>
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
</div>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
<br><br><br>
<footer>
  <div id="bas">
    <p>&copy; 2023 Projet D - All rights reserved</p>
    <p>Made with &#10084;&#65039;</p>
  </div>
</footer>
</html>

</html>