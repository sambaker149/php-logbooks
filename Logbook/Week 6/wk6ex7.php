<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax2(25000,24,200) . " tax";
	html_footer();
?>