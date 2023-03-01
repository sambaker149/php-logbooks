<?php
   echo "<h2> Your order qty is $_POST[quantity]</h2></br>";
   echo "<h2> The selected size is $_COOKIE[size]</h2></br>";
   echo "<h2> And the selected colour is $_POST[selcolour]</h2></br>";

   switch ($_COOKIE['size']) 
   {
      case "small":
        $price = 15.75;
        break;
      case "medium":
        $price = 16.75;
        break;
      case "large":
        $price = 17.75;
        break;
      case "extra large":
        $price = 18.75;
        break;
      default:
        $price = 0;
    }

    $total = $price * $_POST['quantity'];
    echo "<h1>Total Cost: £$total<h1>"
?>