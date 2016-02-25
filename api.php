<?php
$uri = $_SERVER['REQUEST_URI'];

if ( $uri === "/")
{
header('Location: index.html');
var_dump(htpp_status_code());
}
else if ( $uri === "/suscribe.php")
{
header('Location: index.html');
var_dump(htpp_status_code());
 }
else if ( $uri === "/connect.php")
{
header('Location: tweets.html');
var_dump(htpp_status_code());
 }
else if ( $uri === "/retweet.php")
{
header('Location: tweets.html');
var_dump(htpp_status_code());
}
else if($uri === "/like.php")
{
header('Location: tweets.html');
var_dump(htpp_status_code());
}
else if($uri === "/remove.php")
{
header('Location: tweets.html');
var_dump(htpp_status_code());
}
else if($uri === "/disconnect.php")
{
header('Location: index.html');
var_dump(htpp_status_code());
}
else if($uri === "/add.php")
{
header('Location: tweets.html');
var_dump(htpp_status_code(200));
}

$_DELETE("deconnexion")
