<!DOCTYPE html>
<html>
<?php
	// Initialiser la session
	session_start();
	// Vérifier si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: https://adresseduserveur/login.php");
		exit(); 
	}
?>
<head>
	<title>Forum</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css"/>
<img src="https://media.discordapp.net/attachments/1083134699049865296/1083474116033658880/Sans_titre_44_20230308200619.png?width=1440&amp;height=261" alt="Image"/>
<div id="barre">
    <a id="lienhaut" href="https://adresseduserveur/index.html"><b>Accueil</b></a> |
    <a id="lienhaut" href="https://adresseduserveur/logout.php"><b>Deconnexion</b></a> |
    <a id="lienhaut" href="https://adresseduserveur/aide.php"><b>Aide</b></a> |
    <a id="lienhaut" href="https://adresseduserveur/credits.html"><b>R&egrave;gles cr&eacute;dits et liens utiles</b></a>
</div>

	<h1>Aide - 3DS/2DS &#x2794; Hardware</h1>

	<form method="post" action="aide-hardware.php">
		<label for="message">Message :</label>
		<textarea name="message" id="message"></textarea><br>
		<input type="submit" value="Envoyer">
	</form>

	<hr>

	<h2>Messages :</h2>

	<?php
	// Connexion à la base de données
	$db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_données;charset=utf8', 'nomdutilisateur', 'motdepasse');

	// Vérification si le formulaire a été soumis
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Récupération des données du formulaire
		$username = $_SESSION['username'];
		$message = $_POST['message'];

		if (!empty(trim($message))) {
        // Insertion des données dans la base de données
        $stmt = $db->prepare('INSERT INTO messagesaide32ds (username, message) VALUES (:username, :message)');
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    	}
   }

	// Récupération des messages depuis la base de données
	$stmt = $db->query('SELECT * FROM messagesaide32ds ORDER BY id DESC');
	$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// Affichage des messages
	foreach ($messages as $message) {
		echo '<p><strong>' . htmlspecialchars($message['username']) . ':</strong> ' . htmlspecialchars($message['message']) . '</p>';
	}
	?>

</body>
<footer>
  <div id="bas">
    <p>&copy; 2023 Projet D - All rights reserved</p>
    <p>Made with &#10084;&#65039;</p>
  </div>
</footer>

</html>
