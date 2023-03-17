<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>

<div>
    <img class="fit-picture" src="https://media.discordapp.net/attachments/1083134699049865296/1083474116033658880/Sans_titre_44_20230308200619.png?" width=1440&height=261">
  </div>
  <div id="barre">
    <a id="lienhaut" href="register.php"><b>Connexion/Inscription</b></a> |
    <a id="lienhaut" href="discussions.php"><b>Discussions</b></a> |
    <a id="lienhaut" href="aide.php"><b>Aide</b></a> |
    <a id="lienhaut" href="credits.html"><b>R&egrave;gles cr&eacute;dits et liens utiles</b></a>
  </div>
  <h1 style="text-align: center;">Inscription</h1>

<div id="formulaire">
<form class="box" action="" method="post">
    <label for="username">Nom d'utilisateur:</label><br>
    <input style="border-radius: 25px;" type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required /><br><br>
    <label for="email">E-mail:</label><br>
    <input style="border-radius: 25px;" type="text" class="box-input" name="email" placeholder="Email" required /><br><br>
    <label for="password">Mot de passe:</label><br>
    <input style="border-radius: 25px;" type="password" class="box-input" name="password" placeholder="Mot de passe" required /><br><br>
    <center><input type="submit" name="submit" value="S'inscrire" class="box-button" /></center>
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
</div>
<?php } ?>
</body>
<br><br><br>
<footer>
  <div id="bas">
    <p>&copy; 2023 Projet D - All rights reserved</p>
    <p>Made with &#10084;&#65039;</p>
  </div>
</footer>

</html>