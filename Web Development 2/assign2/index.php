<?php 
session_start();

	if(isset($_POST['go'])){
	  header("Location: confirm.php");
		$name = htmlspecialchars($_POST['buyer_name']);
		$address = htmlspecialchars($_POST['address']);
		$city = htmlspecialchars($_POST['city']);
		$zip = htmlspecialchars($_POST['zip']);
		$email = htmlspecialchars($_POST['email']);
		$validzip = '/^\d{5}$|^\d{5}-\d{4}$/';
		$vaildemail= '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		$state = $_POST['state'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$special1 = $_POST['special1'];
		$special2 = $_POST['special2'];
		$special = htmlspecialchars($_POST['special']);
		//$_SESSION['input_form'] = $_POST;
		$_SESSION['input_form']= array( array('Concert Date' => $date), 
		array('Concert Time' => $time), 
		array( 'Name' => $name), 
		array('Address' => $address), 
		array('City' => $city), 
		array('State' => $state), 
		array('Zip' => $zip), 
		array('Email' => $email), 
		array('Wheelchair' => $special1), 
		array('Other accommodations needed' => $special));
	}
	
	if(isset($_POST['clear'])){
	$_POST = array();
	$_SESSION = array();
		
	}
	
	
?>	



<!DOCTYPE html> 
<html lang="en"> 

  <head>         
		<title>Ticket Buyer</title>     
		<meta charset="utf-8">     
		<meta name="viewport" content="width=device-width, initial-scale=1">     
		<link rel="shortcut icon" href="image/favicon.ico">     
		<link rel="stylesheet" href="css/normalize.css">     
		<link rel="stylesheet" href="css/main.css"> 
		<script src="scripts/main.js"></script>
	</head>     
	
	<body>     
		
		<header>
			<h1>My Concert</h1>
		</header>
		
    <main> 
			<form action="index.php" id="input_form" method="post" name="input_form">
				<p>Choose your date:</p>
				<input type="radio" value="satFeb8" id="rad1" name="date" checked='checked'
				<?php if(isset($date)&& $date == "satFeb8"){
					echo "checked=checked>";
				}
				?>
				<label for="rad1">Saturday, February 8</label><br>
				<input type="radio" value="sunFeb9" id="rad2" name="date"
				<?php  if(isset($date)&& $date == "sunFeb9" ){
					echo "checked=checked>";
				
				}
				?>
				<label for="rad2">Sunday, February 9</label><br>
				<input type="radio" value="satFeb15" id="rad3" name="date"
				<?php  if(isset($date)&& $date == "satFeb15" ){
					echo "checked=checked>";
				}
				?>
				<label for="rad3">Saturday, February 15</label><br>
				<input type="radio" value="sunFeb16" id="rad4" name="date"
				<?php  if(isset($date)&& $date == "sunFeb16" ){
					echo "checked=checked>";
				}
				?>
				<label for="rad4">Sunday, February 16</label><br>
				<p>Choose your time:</p>
				
					<fieldset>
						<select name="time" id="time">
							<option value ="2pm" <?php echo (isset($_POST['time']) && $_POST['time'] == '2pm') ? 'selected="selected"' : ''; ?>>2:00pm</option>
							<option value ="5pm" <?php echo (isset($_POST['time']) && $_POST['time'] == '5pm') ? 'selected="selected"' : ''; ?>>5:00pm</option>
							<option value ="8pm" <?php echo (isset($_POST['time']) && $_POST['time'] == '8pm') ? 'selected="selected"' : ''; ?>>8:00pm</option>
							<option value ="1pm" <?php echo (isset($_POST['time']) && $_POST['time'] == '1pm') ? 'selected="selected"' : ''; ?>>1:00pm</option>
							<option value ="4pm" <?php echo (isset($_POST['time']) && $_POST['time'] == '4pm') ? 'selected="selected"' : ''; ?>>4:00pm</option>
						</select><br>
					</fieldset>
					
				<p>Enter your information:</p>
				<label for="name">Name</label>
			  <input type="text" id="name" name="buyer_name" 
				<?php
					if(isset($_POST['buyer_name'])&& $name==""){
						echo"><span>This field is required</span>";
					}
					else if(isset($_POST['buyer_name'])){
						echo "value=$name>";
						
					}
					else{
						echo"><span>*</span>";
						
					}
			   ?>
					
				<br>
				<label for="address">Address</label>
				<input type="text" id="address" name="address" 
				<?php 
					if(isset($_POST['address'])&& $address==""){
						echo"><span>This field is required</span>";
					}
					else if(isset($_POST['address'])){
						echo "value=$address>";
						
					}
					else{
						echo"><span>*</span>";
						
					}
				?>	
				
				<br>
				<label for="city">City</label>
				<input type="text" id="city" name="city"
				<?php 
					if(isset($_POST['city'])&& $city==""){
						echo"><span>This field is required</span>";
					}
					else if(isset($_POST['city'])){
						echo "value=$city>";
					
					}
					else{
						echo"><span>*</span>";
						
					}
				?>
				
				<br>
				<label for="state">State</label>
					
					<select name="state" id="state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select><br>
					
				<label for="zip">Zip</label>
				<input type ="text" name="zip" id="zip"
				<?php 
					if(isset($_POST['zip'])&& $zip==""){
						echo"><span>This field is required</span>";
					}
					else if(isset($_POST['zip'])&& !preg_match($validzip, $zip) ){
						echo "><span>Please enter a vaild zip-code</span>";
					}
					else if(isset($_POST['zip']))
					{ 
						echo "value=$zip>";
					}
					else{
						echo"><span>*</span>";
						
					}
				?>
				<br>
				<label for="email">Email</label>
				<input type ="text" name="email" id="email"
				<?php 
					
					if(isset($_POST['email'])&& $email==""){
						echo"><span>This field is required</span>";
					}
					else if(isset($_POST['email']) && !preg_match($vaildemail, $email )){
						echo "><span>Please enter a vaild email</span>";
					}
					else if(isset($_POST['email']))
					{ 
						echo "value=$email>";
					}
					else{
						echo"><span>*</span>";
						
					}
				?>
				<p>Special Accommodations:</p>
				<input type="checkbox" value="wheelchair" id="cb1" name="special1"
				<?php  if(isset($special1)){
					echo "checked=checked>";
		    }
				?>
				<label for="cb1">Wheelchair</label><br>
				<input type="checkbox" value="other" id="cb2" name="special2"
				<?php  if(isset($_POST['special2'])){
					echo "checked=checked>";
		    }
				?>
				<label for="cb2">Other</label><br>
				<textarea name="special" placeholder="Enter other accommodations needed">
				<?php
						if(isset($_POST['special'])) {
							echo htmlentities ($_POST['special']);
						}
				?> </textarea>		
				
		
				<button type="submit" id="go" name="go">Buy Ticket</button>
			  <button type="submit" id="clear" name="clear">Clear Form</button>
			</form>	

		</main>
		
    <footer>        
			Sierra Sprungl – CS3800 assignment 2 - Spring 2020     
		</footer>
		
  </body> 
</html>