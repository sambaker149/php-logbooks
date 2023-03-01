<html>
  <head><title>Select colour page</title></head>
    <body>
    <?php echo "Your order qty is $_POST[selqty]"?>
    <form action="confirmationwk4ex1a.php"  method="post">
	Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selcolour">
   	<option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
    </select>
    <br/><br/>	
    <input type="hidden" name="quantity" 
      value="<?php echo $_POST["selqty"]?>"/>
    <input type="submit" value="Buy"/>
    </form>
   <br/><br/>
   </body>
</html>	