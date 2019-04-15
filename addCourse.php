<?php
session_start();

include_once("db_connect.php");
include_once("project_utils.php");

$result = addCourse($db, $_POST['par'], $_POST['location'], $_POST['course']);

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

<P> Your course has been added! </P>

</BODY>
</HTML>
