<html>
  <head><title>Select colour page</title></head>
    <body>
    <?php $cookieName = 'price';	
    setcookie($cookieName, $_POST["price"])?>
    <?php $cookieName = 'quantity';
    setcookie($cookieName, $_POST["selqty"])?>
    <?php echo "Your order qty is $_COOKIE[quantity]"?>
    <form action="confirmationwk4ex2.php"  method="post">
	Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
    </select>
    <br/><br/>	
    <input type="submit" value="Buy"/>
    </form>
   <br/><br/>
   </body>
</html>	