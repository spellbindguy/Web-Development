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
		echo( "<p>ERROR OPENING FILE</p>" );
		echo( "<pre>" );
		print_r( error_get_last() );
		echo( "</pre>" );
		exit();	// Stop script
	}
	
	fwrite( $fileHandler, "This is plaintext \n Hello world" );

	fclose( $fileHandler );
	?>

</body>
</html>
