<?php
function calcSG($db, $surface1, $distance1, $surface2, $distance2)
  {
    if($distance2 == 0)
    {
      $eValue1 = $db->query("SELECT eValue FROM sgValues WHERE surface = $surface1 AND distance = $distance1);");
      $strokesGained = $eValue1 - 1;
    }
    else
    {
      $eValue1 = $db->query("SELECT eValue FROM sgValues WHERE surface = $surface1 AND distance = $distance1);");
      $eValue2 = $db->query("SELECT eValue FROM sgValues WHERE surface = $surface2 AND distance = $distance2);");
      $strokesGained = $eValue1 - $eValue2 - 1.0;
    }
    return $strokesGained;
  }

function calcSGHole($db, $numShots, $surface1, $distance1, $surface2, $distance2, $surface3, $distance3, $surface4, $distance4, $surface5, $distance5, 
$surface6, $distance6, $surface7, $distance7, $surface8, $distance8, $surface9, $distance9, $surface10, $distance10)
  {
    if($numShots == 1)
    {
      $v1 = $db->query("SELECT eValue FROM sgValues WHERE surface = $surface1 AND distance = $distance1);");
      return $v1 - 1;
    }
    else if($numShots == 2)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface2, 0);
      return $sg;
    }
    else if($numShots == 3)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface3, 0);
      return $sg;
    }
    else if($numShots == 4)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface2, 0);
      return $sg;
    }
    else if($numShots == 5)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface2, 0);
      return $sg;
    }
    else if($numShots == 6)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface6, $distance6);
      $sg += calcSG($db, $surface6, $distance6, $surface2, 0);
      return $sg;
    }
    else if($numShots == 7)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface6, $distance6);
      $sg += calcSG($db, $surface6, $distance6, $surface7, $distance7);
      $sg += calcSG($db, $surface7, $distance7, $surface2, 0);
      return $sg;
    }
    else if($numShots == 8)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface6, $distance6);
      $sg += calcSG($db, $surface6, $distance6, $surface7, $distance7);
      $sg += calcSG($db, $surface7, $distance7, $surface8, $distance8);
      $sg += calcSG($db, $surface8, $distance8, $surface2, 0);
      return $sg;
    }
    else if($numShots == 9)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface6, $distance6);
      $sg += calcSG($db, $surface6, $distance6, $surface7, $distance7);
      $sg += calcSG($db, $surface7, $distance7, $surface8, $distance8);
      $sg += calcSG($db, $surface8, $distance8, $surface8, $distance8);
      $sg += calcSG($db, $surface9, $distance2, $surface2, 0);
      return $sg;
    }
    else if($numShots == 10)
    {
      $sg = calcSG($db, $surface1, $distance1, $surface2, $distance2);
      $sg += calcSG($db, $surface2, $distance2, $surface3, $distance3);
      $sg += calcSG($db, $surface3, $distance3, $surface4, $distance4);
      $sg += calcSG($db, $surface4, $distance4, $surface5, $distance5);
      $sg += calcSG($db, $surface5, $distance5, $surface6, $distance6);
      $sg += calcSG($db, $surface6, $distance6, $surface7, $distance7);
      $sg += calcSG($db, $surface7, $distance7, $surface8, $distance8);
      $sg += calcSG($db, $surface8, $distance8, $surface8, $distance8);
      $sg += calcSG($db, $surface9, $distance9, $surface10, $distance10);
      $sg += calcSG($db, $surface10, $distance10, $surface2, 0);
      return $sg;
    }
  }
?>
