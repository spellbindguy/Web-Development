<!DOCTYPE html>
<html>
<head>
	<title>PHP Sample</title>
</head>

<body>
	<?
	/* Open a file and write out plaintext */
	$filepath = "files/output-plaintext.txt";

	$fileHandler = fopen( $filepath, "w" ); // Open for write
	if ( $fileHandler == false ) 
	{
		print_r( error_get_last() );	// Error message (PHP5)
		exit();	// Stop script
	}
	
	fwrite( $fileHandler, "This is plaintext \n Hello world" );

	fclose( $fileHandler );
	?>

</body>
</html>

