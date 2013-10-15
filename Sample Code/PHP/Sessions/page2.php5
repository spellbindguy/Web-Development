<? session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Session Page 2</title>
	</head>
	
	<body>
		<h1>Session Page 2</h1>
		
		<h2>Session Info:</h2>
		<pre>
			<? print_r( $_SESSION ); ?>
		</pre>
		
		<h2>Navigation</h2>
		<ul>
			<li><a href="page1.php5">Step 1. Enter info</a></li>
			<li><a href="page2.php5">Step 2. Verify session</a></li>
			<li><a href="page3.php5">Step 3. Destroy session</a></li>
		</ul>
	</body>
</html>
