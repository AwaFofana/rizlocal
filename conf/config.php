<?php
if (!isset($_SESSION)) {
session_start();
}
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee

define('DB_HOST','127.0.0.1');
define('DB_NAME','rizlocal');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

try{
	$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD ,[PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	//die( 'Une erreur set survenue lors de la connexiona la base de donnée : ' . $e->getMessage( ) ) ;

	die( 'Une erreur est survenue .' ) ;
}
