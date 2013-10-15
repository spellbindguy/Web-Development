<?
if ( isset( $_POST["send-mail"] ) ) 
{
	mail( 	$_POST["to"],
			$_POST["subject"],
			$_POST["message"],
			"From:" . $_POST["from"] );
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sample Emailer</title>
	</head>
	
	<body>
		
		<pre>
			<? print_r( $_POST ); ?>
		</pre>
		
		<form method="post">
			<p>
				<label>Subject:</label>
				<input type="text" name="subject"/>
			</p>
			
			<p>
				<label>Message:</label><br/>
				<textarea name="message"></textarea>
			</p>
			
			<p>
				<label>To:</label>
				<input type="text" name="to"/>
			</p>
			
			<p>
				<label>From:</label>
				<input type="text" name="from"/>
			</p>
			
			<p>
				<input type="submit" value="Send" name="send-mail" />
			</p>
		</form>
	</body>
</html>
