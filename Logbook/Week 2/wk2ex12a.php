<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
  
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Mark</th></tr> 
<?php
  foreach ($mymarks as $index => $value)
  {
    echo "<tr><td>$index</td><td>$mymarks[$index]</td></tr>";
  }	
?>
</table>
</body>
</html>