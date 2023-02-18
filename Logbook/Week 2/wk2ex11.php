<?php
  $mymarks["CO450"] = 60;
  $mymarks["CO451"] = 65;
  $mymarks["CO452"] = 70;
  $mymarks["CO453"] = 75;
  $mymarks["CO454"] = 80;
  $mymarks["CO455"] = 85;

  $total = 0;

  foreach ($mymarks as $index => $value)
  {
    echo "for  $index  my grade was  $value <br/>";
    $total = $total + $mymarks[$index];
  }

  $average = $total / 6;    

  echo "<br/> The average mark was $average";
?>