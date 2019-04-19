<?php
session_start();

include_once('db_connect.php');

$pgaSurf = $_POST['pgaSurface'];
$pgaDist = $_POST['avgPGADist'];

$str1 = "SELECT eValue FROM sgValues WHERE surface = '$pgaSurf' AND distance = $pgaDist;";
$eValue1 = $db->query($str1);
print_r($eValue1);
var_dump($eValue1);
?>

<html lang="en">
<head>
    <title>Golf Stroke Analysis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <STYLE>

        body {
            background: url('https://www.poipubaygolf.com/wp-content/uploads/2017/02/Kauai-Oceanfront-Golf-Course.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .text {
            color: black;
            background-color: palegoldenrod;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            margin-left: 40px;
            outline: 5px solid black;
        }

        heading {
            color: white;
            text-decoration: none;
            display: inline-block;
        }

        .Mybtn {
            background-color: palegoldenrod;
            color: black;
            padding: 12px;
            font-size: 12px;
            border: none;
            outline: 5px solid black;
        }
    </STYLE>
</head>
<body>
    <br />
    <div class="text-left">
        <form name="fmBtns">
            <span style="display:inline-block; width:6px"></span>
            <input type="button" class="btn btn-warning w-100 text-left" name='showResults' onclick="location.href='LandingPageBS.html'" value='Home'>
            <div style="float: right">
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnStrokesGained' onclick="location.href='StrokesGainedBS.html'" value='Calculate Strokes Gained'>
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnDistAvg' onclick="location.href='distAvgBS.html'" value='Calculate Distance Average'>
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnPGA' onclick="location.href='pgaAvgBS.html'" value='Calculate PGA Tour Average'>
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnEmail' onclick="location.href='emailBS.html'" value='Email Your Scores'>
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnAddCourse' onclick="location.href='addCourseBS.html'" value='Add A New Course'>
                <INPUT type='button' class="btn btn-warning w-100 text-right" name='bnAddCourse' onclick="location.href='aboutBS.html'" value='About Us'>
                <span style="display:inline-block; width:-10px"></span>
            </div>

        </form>
    </div>

	<br/>
	<div class="text-center" style="color:white">
		<h1>Your average is: <?php  echo $eValue1; ?> </h1>
	</div>

</BODY>
</HTML>
