<?php
   echo "<h2> Your order qty is $_COOKIE[quantity]</h2></br>";
   echo "<h2> And the selected colour is $_POST[selcolour]</h2></br>";
   $total = $_COOKIE['price'] * $_COOKIE['quantity'];
   echo "<h1>Total Cost: £$total<h1>"
?>