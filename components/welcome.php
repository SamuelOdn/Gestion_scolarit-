<?php 
include_once("../Riri_pro/functions/functions.php");
include_once("../utils.php");

session_start();

echo "Bienvenue <b> ".$_SESSION["userConnected"]."</b>" ;

if(function_exists('image')){ echo image(); }


?>