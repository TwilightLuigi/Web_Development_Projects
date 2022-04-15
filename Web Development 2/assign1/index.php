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
			<form action="confirm.php" id="input_form">
				<p>Choose your date:</p>
				<input type="radio" value="satFeb8" id="rad1" name="date">
				<label for="rad1">Saturday, February 8</label><br>
				<input type="radio" value="sunFeb9" id="rad2" name="date">
				<label for="rad2">Sunday, February 9</label><br>
				<input type="radio" value="satFeb15" id="rad3" name="date">
				<label for="rad3">Saturday, February 15</label><br>
				<input type="radio" value="sunFeb16" id="rad4" name="date">
				<label for="rad4">Sunday, February 16</label><br>
				<p>Choose your time:</p>
				
					<fieldset>
						<select name="time" id="time">
							<option value ="2pm" id="sat1"></option>
							<option value ="5pm" id="sat2"></option>
							<option value ="8pm" id="sat3"></option>
							<option value ="1pm" id="sun1"></option>
							<option value ="4pm" id="sun2"></option>
						</select><br>
					</fieldset>
					
				<p>Enter your information:</p>
				<label for="name">Name</label>
			  <input type="text" id="name" name="name"><span>*</span><br>
				<label for="address">Address</label>
				<input type="text" id="address" name="address"><span>*</span><br>
				<label for="city">City</label>
				<input type="text" id="city" name="city"><span>*</span><br>
				<label for="state">State</label>
					
					<select name="state" id="state" name="state">
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
				<input type ="text" name="zip" id="zip"><span>*</span><br>
				<label for="email">Email</label>
				<input type ="text" name="email" id="email"><span>*</span><br>
				<p>Special Accommodations:</p>
				<input type="checkbox" value="wheelchair" id="cb1" name="special1">
				<label for="cb1">Wheelchair</label><br>
				<input type="checkbox" value="other" id="cb2" name="special2">
				<label for="cb2">Other</label><br>
				<textarea name="special" placeholder="Enter other accommodations needed"></textarea>
			</form>	
			
			<button type="button" id="go">Buy Ticket</button>
			<button type="button" id="clear">Clear Form</button>
		</main>
		
    <footer>        
			Sierra Sprungl – CS3800 assignment 1 - Spring 2020     
		</footer>
		
  </body> 
</html>