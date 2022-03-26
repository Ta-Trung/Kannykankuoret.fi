<?php

ob_start(); //create an output buffer
session_start(); //start the session
//session_destroy();



defined("DS") ? null : define ("DS", DIRECTORY_SEPARATOR); //make public folder to be seen as default homepage

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "template/front"); //front end folder

defined("TEMPLATE_BACK") ? null : define ("TEMPLATE_BACK", __DIR__ . DS . "template/back" ); //define back end folder

defined("DB_HOST") ? null : define ("DB_HOST", "localhost"); //define host
defined("DB_USER") ? null : define("DB_USER", "root"); //define username

defined("DB_PASS") ? null : define("DB_PASS", "trung158364"); //define host password
defined("DB_NAME") ? null : define("DB_NAME", "kk_db"); //define database

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //define connection to localhos database

require_once("functions.php"); //require function.php to operate webpage
?>
