<?php
session_start();

include_once('db_connect.php');
include_once('functionalities.php');

$pgaSurf = $_POST['pgaSurface'];
$pgaDist = $_POST['avgPGADist'];

var_dump ($pgaSurf);

$eValue1 = $db->query("SELECT eValue FROM sgValues WHERE surface = $pgaSurf AND distance = $pgaDist);");
echo ($eValue1);


$selected_val = $_POST['pgaSurface'];
echo "hope this works " .$selected_val);
?>

<HTML>
<HEAD><TITLE>Golf Analysis</TITLE>
<STYLE>

body {background-color: green;}
.button {background-color: gold; 
                 border: none;
  		 color: black;
 		 padding: 15px 32px;
 		 text-align: center;
 		 text-decoration: none;
  		 display: inline-block;
  		 font-size: 16px;
  		 margin: 4px 2px;
  		 cursor: pointer;
                 border-radius: 12px;}
.text{background-color:white;
          color:black;
	   text-align: center;
 	   text-decoration: none;
           display: inline-block;
  	   font-size: 16px;
    	   margin: 4px 2px;
	   margin-left: 40px; }

.para{color:gold;
    font-size:32px;}

</Style>
</HEAD>
<BODY background="Golfball.png">

<P class="para"> PGA Average <?php   print($eValue1)  ?> </P> 

</BODY>
</HTML>
