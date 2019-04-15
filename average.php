<?php
session_start();

include_once('db_connect.php');
include_once('functionalities.php');


$avgSurf = $_POST['avgSurface'];
$avgDist = $_POST['avgDist'];

$average = calcAVG($db, $avgSurf, $avgDist);

function calcAVG($db, $surface1, $distance1)
{
  $eValue = $db->query("SELECT eValue FROM sgValues WHERE surface = $surface1 AND distance = $distance1);");

  $shotIDs = $db->query("SELECT shotID FROM shots WHERE surface = $surface1 AND distance = $distance1);");
  $rows = mysql_fetch_row($shotIDs);
  $sgTotal = 0;
  for(int i = 0; i <= sizeof($rows); i++)
  {
    $shotID = $rows[i];
    $eValue2 = $db->query("SELECT eValue FROM  WHERE shotID = $shotID + 1);");
    $sgTotal += $eValue - $eValue2  - 1.0;
  }
  echo $sgTotal/sizeof($rows);
}
?>
