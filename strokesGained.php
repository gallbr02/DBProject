<?php
session_start();

include_once('db_connect.php');
include_once('functionalities.php');

echo "hello";
$s1 = $_POST['s1'];
$d1 = $_POST['d1'];
$s2 = $_POST['s2'];
$d2 = $_POST['d2'];
$s3 = $_POST['s3'];
$d3 = $_POST['d3'];
$s4 = $_POST['s4'];
$d4 = $_POST['d4'];
$s5 = $_POST['s5'];
$d5 = $_POST['d5'];
$s6 = $_POST['s6'];
$d6 = $_POST['d6'];
$s7 = $_POST['s7'];
$d7 = $_POST['d7'];
$s8 = $_POST['s8'];
$d8 = $_POST['d8'];
$s9 = $_POST['s9'];
$d9 = $_POST['d9'];
$s10 = $_POST['s10'];
$d10 = $_POST['d10'];

$numShots = $_POST['shots'];

$totalSG = calcSGHole($db, $numShots, $s1, $d1, $s2, $d2, $s3, $d3, $s4, $d4, $s5, $d5, $s6, $d6, $s7, $d7, $s8, $d8, $s9, $d9, $s10, $d10)

echo "hello";
echo $totalSG;
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

<P class="para"> Driving </P> 

<P class="para"> Approach </P> 

<P class="para"> Short Game </P>

<P class="para"> Putting </P>

<P class="para"> Recovery </P>



</BODY>
</HTML>
