<?php
session_start();

include_once("db_connect.php");
include_once("project_utils.php");

$resultStr = "";

$result = checkUser($db, $_POST['tflogin'], $_POST['tfPass']);

if($result == 1){
	header('Location: landingPage.html');
	exit;
}
else{
	header('Location: login.html');
	exit;
	$resultStr = "Cannot find your information try again" ;
}

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

</Style>
</HEAD>
<BODY background="Golfball.png">
<H2 style="color:gold">Strokes Gained Analysis</H2>

 <form action="/action_page.php">
  <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>

 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
<INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

  <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>

 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
<INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <select name="cars">
<option value="Select">Select</option>
    <option value="Tee">Tee</option>
    <option value="Fairway">Fairway</option>
    <option value="Rough">Rough</option>
    <option value="Green">Green</option>
<option value="Sand">Sand</option>
<option value="Other">Other</option>
  </select>
 <INPUT  type='text' class="text" name='tflogin' size='30' placeholder='Enter your distance' /> <BR /><BR />

 <INPUT type='reset' class="button" value='Clear'>
 <INPUT type='button' class="button"  name ='register' onclick="MAKE A PHP FILE" value='Next Hole'>
 <INPUT type='button' class="button"  name ='save' onclick="MAKE A PHP FILE" value='Save Shots'> </BR></BR>
 <INPUT type='button' class="button"  name ='showResults' onclick="location.href='strokesGained.php'" value='Calculate Strokes Gained'>

</form>
 

</BODY>
</HTML>
