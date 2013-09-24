<!DOCTYPE html>
<html>
	<head>
		<title>Simple Form</title>
	</head>
	
	<body>
		
		<? include_once( "backend.php5" ); ?>

		<form method="post">
			
			<p>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" />
			</p>
			
			<p>
				<input type="checkbox" id="isOver21" name="isOver21" value="true" />
				<label for="isOver21">Over 21?</label>
			</p>
			
			<p>
				<input type="radio" id="ship1" name="shipping" value="home" />
				<label for="ship1">Ship to Home</label>
				
				<input type="radio" id="ship2" name="shipping" value="business" />
				<label for="ship2">Ship to Business</label>
				
				<input type="radio" id="ship3" name="shipping" value="school" />
				<label for="ship3">Ship to School</label>
				
			</p>
			
			<p>
				<input type="submit" name="submit-form" value="true" />
			</p>
			
		</form>
		
	</body>
</html>

