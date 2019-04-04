<?php
session_start();

include_once("db_connect.php");
include_once("project_utils.php");

$result2Str = "";

$result2 = addUser( $db, $_POST['tfemail'],$_POST['tfname'], $_POST['tfhandi'],$_POST['tflogin'], $_POST['tfpassword']);

if ($result2 == TRUE){
	$result2Str = "Check email for verification";
}
else{
	$result2Str = "Failed to register";
}

?>

<HTML>
<HEAD><TITLE>Logged In</TITLE></HEAD>
<BODY>
<H2>Status:</H2>
<?php echo $result2Str; ?><BR />
</BODY>
</HTML>
