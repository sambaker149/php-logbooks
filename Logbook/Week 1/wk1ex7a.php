<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
	$tax = 0.22 * $gross;
	$wage = $gross - $tax;
	echo $wage;
?>
</body>
</html>