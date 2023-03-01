<html>
  <head><title>Select size page</title></head>
    <body>
    <?php $cookieName = 'quantity';
    setcookie($cookieName, $_POST["selqty"])?>
    <?php echo "Your order qty is $_POST[selqty]"?>
    <form action="selectcolourwk4ex3.php"  method="post">
	Select the size of the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selsize">
   	  <option>small</option>
	  <option>medium</option>
	  <option>large</option>
	  <option>extra large</option>
    </select>
    <br/><br/>	
    <input type="hidden" name="quantity" 
      value="<?php echo $_POST["selqty"]?>"/>
    <input type="submit" value="Buy"/>
    </form>
   <br/><br/>
   </body>
</html>	