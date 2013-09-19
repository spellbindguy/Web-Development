<!DOCTYPE html>
<html>
<head>
	<title>MyProject</title>
</head>

<body>
	
	<?
	$filepath = "files/plaintext.txt";
	
	$fileHandler = fopen( $filepath, "r" ); 
	if ( $fileHandler == false ) 
	{
		print_r( error_get_last() );	// Error message (PHP5)
		exit();	// Stop script
	}
	
	$contents = fgets( $fileHandler );
	
	fclose( $fileHandler );
	?>
	
	<p>File contents:</p>
	
	<p><?=$contents?></p>

</body>
</html>
