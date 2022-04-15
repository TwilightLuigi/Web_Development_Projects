<?php
include 'phpfunctions/functions.php';
include 'open_db.php';
session_start();


	


?>



<!DOCTYPE html> 
<html lang="en"> 

 <head>         
	<title> Your Shopping Cart </title>     
	<meta charset="utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1">     
	<link rel="shortcut icon" href="images/favicon.ico">     
	<link rel="stylesheet" href="css/normalize.css">     
	<link rel="stylesheet" href="css/main.css">   
 </head>     
	
 <body>     
	<header>         
		<h1>Shopping Cart</h1>
	</header>     
    
	<main>  
		
		<nav>
			
			<form action="index.php" name="home">
				<button type="submit" name="goback">Continue Shopping</button>
			</form>
			
			<form method="post" action="checkout.php" name="checkout">
				<button type="submit" name="checkoutb">Checkout</button>
			</form>

			<button type="submit" name="clear">Clear Cart</button>
			<button type="submit" name="past">View Past Orders</button>
		
		</nav>
		
		<?php 
			$test = showCart($db);
			print_r($test);
			
			
			
		?>
		
		<h1>Order Details</h1>
		<table>
			<tr>
				<th>Item Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</table>		
		
		
		
		<?php
				$itemid = $_POST['id'];
				$cart1 = showGamesInCart($db, $itemid);
				if(!empty($cart1)){
					foreach($cart1 as $key=>$value){
		?>
		
		<tr>
		<td><?php echo $cart1[$key]["name"]; ?></td>
		<td>$ <?php echo $cart1[$key]["price"]; ?></td>
		<td><?php echo $cart1[$key]["quanity"]; ?></td>
		<td><?php echo number_format($cart1["quanity"] * $cart1["price"], 2); ?></td>
		<td><button type="submit" name="remove" value="Remove From Cart" /></td>
		</tr>
		<?php 
					$total = $total + ($cart1["quanity"] * $values["price"]);
					
		
					}
					
				
				
				
		?>
		<tr>
			<td>Total</td>
			<td><?php echo number_format($total, 2); ?></td>
			<td></td>
		</tr>	
		<?php 
				}
		?>		
		
	</main>

	<footer>
		Sierra Sprungl Final Project CS3800
	</footer>

 </body>
</html> 