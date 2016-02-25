<?php
// Connexion à la BDD
try
{
$db = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'tsifoumby');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}
error_log($db);
// Création des variables
$name = $_POST['pseudo'];
$mail = $_POST['emailRegister'];
$confirm = $_POST['emailRegisterConfirm'];
$mdp = $_POST['password'];

// Insertion des informations du formulaire dans la BDD
$sql = "INSERT INTO users(pseudo, mdp, email, confirm) VALUES('$name', '$mdp', '$mail', '$confirm')";
$db->exec($sql);
echo 'Votre inscription est bien enregistrée';
 ?>
