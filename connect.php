<?php
session_start();
require'dbconnect.php';
 $_SESSION['users'];
if(isset($_POST['loginOK']))
{
$email =$_POST['email'];
$upass = $_POST['pass'];
$res=$db->prepare("SELECT mdp, email FROM users WHERE $email:'email' $upass: 'mdp'");
$result=$res->fetch();
if($result('mdp')==$upass AND $result('email')==$email)
{

 header("HTTP/1.0 200");
}
else
{
  header("HTTP/1.0 401");
}
}
 ?>
