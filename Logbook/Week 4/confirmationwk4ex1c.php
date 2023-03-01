<?php
   session_start();
   echo "Your order qty is".$_SESSION['quantity'];
   echo "<h2> And the selected colour is $_POST[selcolour].</h2>";
?>