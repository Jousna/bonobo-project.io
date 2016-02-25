<?php
// Connexion à la BDD
try
{
$db = new PDO('mysql:host=localhost;dbname=Twitter', 'root', 'tsifoumby');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}

?>
