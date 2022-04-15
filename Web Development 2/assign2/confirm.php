<?php
session_start();
?>



<!DOCTYPE html> 
<html lang="en"> 

  <head>         
		<title>Ticket Confirmation</title>     
		<meta charset="utf-8">     
		<meta name="viewport" content="width=device-width, initial-scale=1">     
		<link rel="shortcut icon" href="image/favicon.ico">     
		<link rel="stylesheet" href="css/normalize.css">     
		<link rel="stylesheet" href="css/confirm.css"> 
	</head>     
	
	<body>     
		
		<header>        
			<h1>Ticket Confirmation</h1>
		</header>
		
    <main>         
			<h2>
				<?php
					echo "Your Ticket request was recived on " . date("F, j Y,") . " at " . date("g:i a");
				?>
			</h2>
			<p>You made the following selections:</p>
			<p>
				<?php
					foreach ($_SESSION['input_form'] as $input){
					foreach ($input as $key => $value) { 
                echo $key . ': '. $value;
              }
							echo '<br>';
					}
          
				?>
			</p>
		</main>
		
    <footer>        
			Sierra Sprungl – CS3800 assignment 2 - Spring 2020     
		</footer>
		
  </body> 
</html>