<!DOCTYPE html>

<? include_once( "backend.php5" ); ?>

<html>
	<head>
		<title><?=$profile["name"]?>'s Profile</title>
	</head>
	
	<body>
		<h1>Welcome to <?=$profile["name"]?>'s Profile!</h1>
		
		<p>Location: <?=$profile["location"]?></p>
		
		<h2>About <?=$profile["name"]?></h2>
		<p><?=$profile["bio"]?></p>
	</body>
</html>
