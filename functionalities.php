<?php
session_start();

include_once('db_connect.php');
function calcSG($db, $surface1, $distance1, $surface2, $distance2)
  {
    if($distance2 == 0)
    {
       echo $distance1, $distance2, $surface1, $surface2;
      $eValue1 = $db->query("SELECT eValue FROM sgValues WHERE surface = '$surface1' AND distance = $distance1;");
      $strokesGained = $eValue1 - 1.0;
    }
    else
    {
      echo $distance1, $distance2, $surface1, $surface2;
      $eValue1 = $db->query("SELECT eValue FROM sgValues WHERE surface = '$surface1' AND distance = $distance1;");
      $eValue2 = $db->query("SELECT eValue FROM sgValues WHERE surface = '$surface2' AND distance = $distance2;");
      $strokesGained = $eValue1 - $eValue2 - 1.0;
    }
    return $strokesGained;
  }

function lastShot($db, $dist1, $surf1)
{
  $sgLS = calcSG($db, $surf1, $dist1, "", 0);
}

function calcSGHole($db, $numShots, $surfaces, $distances) {
        $sgDrive = 0.0;
	$sgApp = 0.0;
	$sgShort = 0.0;
	$sgPutt = 0.0;
	$sgOther = 0.0;
	$sg = 0.0;
	$sgTotal = 0.0;
        for($i = 0; $i < sizeOf($surfaces); $i++){
		echo $surfaces[$i];
	}
        for($i = 0; $i < sizeOf($distances); $i++){
		echo $distances[$i];
	}
	for ($i = 0; $i < $numShots-1; $i++) {
		 $sg = calcSG($db, $surfaces[$i], $distances[$i], $surfaces[$i+1], $distances[$i+1]);
		 if($surfaces[$i] == "Tee" && $distances[$i] > 240)
		 {
			 $sgDrive += $sg;
			 $sgTotal += $sg;
		 }
		 else if($surfaces[$i] == "Tee" && $distances[$i] <= 240)
		 {
			 $sgApp += $sg;
			 $sgTotal += $sg;
		 }
		 else if(($surfaces[$i] == "Fairway" || $surfaces[$i] == "Rough" || $surfaces[$i] == "Sand") && $distances[$i] >= 100)
		 {
			 $sgApp += $sg;
			 $sgTotal += $sg;
		 }
		 else if(($surfaces[$i] == "Fairway" || $surfaces[$i] == "Rough" || $surfaces[$i] == "Sand") && $distances[$i] < 100)
		 {
			 $sgShort += $sg;
			 $sgTotal += $sg;
		 }
		 else if($surfaces[$i] == "Green")
		 {
			 $sgPutt += $sg;
			 $sgTotal += $sg;
		 }
		 else if($surfaces[$i] == "Other")
		 {
			 $sgRecovery += $sg;
			 $sgTotal += $sg;
		 }	 
	}
	$sgTotals = array();
	$sgTotals[0] = $sgDrive;
	$sgTotals[1] = $sgApp;
	$sgTotals[2] = $sgShort;
	$sgTotals[3] = $sgPutt;
	$sgTotals[4] = $sgOther;
	$sgTotals[5] = $sgTotal;
	
	for($i = 0; $i < sizeOf($sgTotals); $i++){
		echo $sgTotals[$i];
	}
	
//	lastShot($db, $surfaces[sizeOf($distances)], $distances[sizeOf($distances)]);
	return $sgTotals;
        //return $sg + calcSG($db, $surfaces[$numShots-1], $distances[$numShots-1], "", 0);
}
?>
