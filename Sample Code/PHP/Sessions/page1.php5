<? session_start(); ?>

<?
// On post, save information to the session.
if ( isset( $_POST["save-data"] ) )
{
	$_SESSION["username"] = $_POST["username"];
	$_SESSION["email"] = $_POST["email"];
	
	if ( !isset( $_SESSION["viewcount"] ) )
	{
		$_SESSION["viewcount"] = 1;
	}
	$_SESSION["viewcount"]++;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Session Page 1</title>
	</head>
	
	<body>
		<h1>Session Page 1</h1>
		
		<h2>Fill out info</h2>
		<form method="post">
			<p>
				<label>Username: </label>
				<input type="text" name="username" />
			</p>
			
			<p>
				<label>Email Address: </label>
				<input type="text" name="email" />
			</p>
			<p>
				<input type="submit" name="save-data" value="Save Data" />
			</p>			
		</form>
		
		<h2>Instructions</h2>
		<ol>
			<li>Enter information in the form and click the Save button</li>
			<li>Navigate to the <a href="page2.php5">next page</a> to make sure the session data is saved!</li>
		</ol>
		
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
