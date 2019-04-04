<?php
include_once("db_connect.php");

function checkUser($db, $login, $pass){
	$encPass = md5($pass);

	$str1 = "SELECT * FROM golfer WHERE golfer.username = '$login' AND golfer.password = '$encPass'" ;

	$result1 = $db->query($str1);
		if($result1->rowCOUNT() >= 1) {
			return 1;
		}
		else {
			return -1;
		}
}

function addUser($db, $email, $name, $handicap, $uname, $password){
	echo "<P>$password</P>";
	$encPass = md5($password);
	echo "<P>$encPass</P>";

	echo $email, $name, $handicap,  $uname, $encPass;

	$str1 = "INSERT INTO golfer (email, name, handicap, password, username) VALUE('$email', '$name', '$handicap', '$encPass', '$uname' );" ;

	$result1 = $db->query($str1);

	if($result1 == FALSE ) {
		echo "<P>Error inserting $uname into golfer</P>\n";
	}
	else {
		echo "<P>Successfully inserted $uname into golfer</P>\n";
	}
}
?>
