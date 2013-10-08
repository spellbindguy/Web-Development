<!DOCTYPE html>
<html>
	<head>
	</head>
	
	<body>
		<? include_once( "backend.php5" ); ?>
		
		<h2>New Menu Item</h2>
		<form method="post">
			
			<p><label>Item Name:</label>
			<input type="text" name="menu[name]" /></p>
			
			<p><label>Price:</label>
			<input type="text" name="menu[price]" /></p>
			
			<p>
				<label>Dish Type</label>
			</p>
			<p>
			<input type="radio" name="menu[type]" value="vegetarian" id="choice1" />
			<label for="choice1">Vegetarian</label>
			
			<input type="radio" name="menu[type]" value="low-calorie" id="choice2" />
			<label for="choice2">Low-Calorie</label>
			
			<input type="radio" name="menu[type]" value="organic" id="choice3" />
			<label for="choice3">Organic</label>
			</p>
			
			<input type="submit" name="submit-form" value="Save Item" />
		</form>
		
		<hr/>
		
		<h2>Available Menu Items:</h2>
		<? if ( isset( $menuItems ) ) {
			foreach ( $menuItems as $item ) { ?>
				<h3><?=$item["name"]?></h3>
				<p>Price: $<?=$item["price"] ?></p>
				<p>Type: <?=$item["type"] ?></p>
			<? } 
		} ?>
	</body>
</html>
