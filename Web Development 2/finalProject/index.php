<?php
include 'phpfunctions/functions.php';
include 'open_db.php';
session_start();


$number = rand(0,1000);

if (isset($_POST['add'])){
	$cartID = $number;
	$username = "Twili";
	$itemid = NULL;
	$serialNumber = $_POST['serial'];
	$quanity = $_POST['q'];
	addToCart($db, $cartID, $username, $itemid, $serialNumber, $quanity );
	$test = showCart($db);
}

if (isset($_POST['add2'])){
	$cartID = $number;
	$username = "Twili";
	$serialNumber = NULL;
	$itemid = $_POST['id'];
	$quanity = $_POST['q2'];
	addToCart($db, $cartID, $username, $itemid, $serialNumber, $quanity );
	}
	

?>

<!DOCTYPE html> 
<html lang="en"> 

 <head>         
	<title> Classic World Gamming Store </title>     
	<meta charset="utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1">     
	<link rel="shortcut icon" href="images/favicon.ico">     
	<link rel="stylesheet" href="css/normalize.css">     
	<link rel="stylesheet" href="css/main.css">   
 </head>     
	
 <body>     
	<header>         
		<h1>Welcome To The Classic World Gamming Store</h1>
	</header>     
    
	<main>         
		
		<nav>
			
			<form action="login.php" name="signon">	
				<button type="submit" name="login">User Login</button>
			</form>	
			
			<form action="searchpage.php" name="search">
				<input type="text" placeholder="Search..." name="searchbar">
				<input type="image" name="sicon" id="sicon" alt="search button" src="images/searchbutton.jpg" for="searchbar">
			</form>
			
			<form action="cart.php" name="cart">
				<input type="image" name="cion" alt="shopping cart" src="images/shoppingcart.jpg">
			</form>	
			
		</nav>
		
		<aside>
			
				<label>Apply Filters to Narrow Your Search</label>
				<label for="console">Console</label>
				<form method="post" name="fliters">
					<select id ="console" name="consoles">
						<?php
								$results = consoleName($db);
								echo '<option value="SNES">';
								echo $results[1]["name"];
								echo "</option>";
								echo "<option>";
								echo $results[6]["name"];
								echo "</option>";
								echo "<option>";
								echo $results[11]["name"];
								echo "</option>"	
								
					  ?>
				  </select>
				  <label for="series">Series</label>
				  <select id="series" name="series">
						<?php
								$results = getSeries($db);
								foreach ($results as $result){
								foreach($result as $key => $value){
									echo "<option>$value</option>";
									
								}
							}
						?>
					</select>
					<label for="Publisher">Publisher</label>
					<select id="Publisher" name="Publisher">
						<?php
								$results = getPublisher($db);
								foreach ($results as $result){
								foreach($result as $key => $value){
									echo "<option>$value</option>";
									
								}
							}
						?>
					</select>
				<button type="submit" name="fsub">Search</button>	
			</form>
		</aside>
		<?php
				$games = getGames($db);
				if(!empty($games)){
					foreach($games as $key=>$value){
		?>
		
		<form method="post" action="index.php"/>
		<p><?php echo $games[$key]["name"]; ?></p>
		<p><?php echo $games[$key]["description"]; ?></p>
		<img src="<?php echo $games[$key]["image"]; ?>">
		<p><?php echo "$" . $games[$key]["price"]; ?></p>
		<p><?php echo $games[$key]["quanity"]; ?></p>
		<p><?php echo $games[$key]["year_Published"]; ?></p>
		<p><?php echo $games[$key]["pub_name"]; ?></p>
		<input type="text" name="q2" value="1" size="2" />
		<input type="hidden" name="id" value="<?php echo $games[$key]["item_ID"]; ?>" /> 
		<input type="submit" name="add2" value="Add to Cart" />
		</form>
		<?php 
					}
					
				}
				
				
		?>	
		
		
		
		<?php
				$consoles = getConsoles($db);
				if(!empty($consoles)){
					foreach($consoles as $key=>$value){
		?>
		
		<form method="post" action="index.php"/>
		<p><?php echo $consoles[$key]["name"]; ?></p>
		<p><?php echo $consoles[$key]["description"]; ?></p>
		<img src="<?php echo $consoles[$key]["image"]; ?>">
		<p><?php echo "$" . $consoles[$key]["price"]; ?></p>
		<p><?php echo $consoles[$key]["quanity"]; ?></p>
		<p><?php echo $consoles[$key]["limted_Edition"]; ?></p>
		<p><?php echo $consoles[$key]["year_Published"]; ?></p>
		<input type="text" name="q" value="1" size="2" />
		<input type="hidden" name="serial" value="<?php echo $consoles[$key]["serialNumber"]; ?>" /> 
		<input type="submit" name="add" value="Add to Cart" />
		</form>
		<?php 
					}
					
				}
				
				
		?>		
				

	</main>  
	
  <footer>        
	 Sierra Sprungl – CS3800 Final Project - Spring 2020     
	</footer> 
  
 </body> 
</html>