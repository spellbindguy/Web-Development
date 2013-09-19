<!DOCTYPE html>
<html>
<head>
	<title>MyProject</title>
</head>

<body>
	
	<?
	$filepath = "files/text.json";
	
	$fileHandler = fopen( $filepath, "r" ); 
	if ( $fileHandler == false ) 
	{
		print_r( error_get_last() );	// Error message (PHP5)
		exit();	// Stop script
	}
	
	$contents = fgets( $fileHandler );
	$jsonContents = json_decode( $contents, false ); // add this
	
	fclose( $fileHandler );
	?>
	
	<p>File contents:</p>
	
	<pre>
		<? print_r( $jsonContents ); ?>
	</pre>

</body>
</html>
