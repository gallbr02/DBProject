<?php
session_start();

//print_r($_POST);

include_once('db_connect.php');
include_once('functionalities.php');


$numShots = $_POST['shots'];

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

$surfaces = array();
array_push($surfaces, $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10);
$distances = array();
array_push($distances, $d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10);

$totalSG = calcSGHole($db, $numShots, $surfaces, $distances);
?>

﻿<!DOCTYPE html>
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

        .dropbtn {
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

    <br />
	
	<div class="text-center" style="color:white">
		<h1> Driving: <?php  echo $totalSG[0];  ?> </h1>
	</div>

	<div class="text-center" style="color:white">
		<h1> Approach: <?php  echo $totalSG[1];  ?> </h1>
	</div>

	<div class="text-center" style="color:white">
		<h1> Short Game: <?php  echo $totalSG[2];  ?> </h1>
	</div>

	<div class="text-center" style="color:white">
		<h1> Putting: <?php  echo $totalSG[3];  ?> </h1>
	</div>

	<div class="text-center" style="color:white">
		<h1> Other: <?php  echo $totalSG[4];  ?> </h1>
	</div>

	<br/>	

	<div class="text-center" style="color:white">
		<h1> Total: <?php  echo $totalSG[5];  ?> </h1>
	</div>

</body>
</html>
