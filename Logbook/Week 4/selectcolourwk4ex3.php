<html>
  <head><title>Select colour page</title></head>
    <body>
    <?php $cookieName = 'size';
    setcookie($cookieName, $_POST["selsize"])?>
    <?php echo "Your order qty is $_POST[quantity]"?>
    <?php echo "Your chosen size is $_POST[selsize]"?>
    <form action="confirmationwk4ex3.php"  method="post">
	Select the colour for the <?php echo $_POST['quantity'] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
    </select>
    <br/><br/>	
    <input type="hidden" name="quantity" 
      value="<?php echo $_POST['quantity']?>"/>
    <input type="submit" value="Buy"/>
    </form>
   <br/><br/>
   </body>
</html>	