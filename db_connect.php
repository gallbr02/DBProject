<?php

//variable names must start with $
//string concat operator is .

$host=	"ada";
$dbase="s19_bdj";
$user=	"poffja01";
$pass=	"poffja01";

try {
	$db = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
}
catch(PDOException $e) {
	die("Error connecting to MySQL server: " . $e->getMessage());
}

?>
