<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'nomdutilisateur');
define('DB_PASSWORD', 'motdepasse');
define('DB_NAME', 'nom_de_la_base_de_donn�es');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>