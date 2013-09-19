<!DOCTYPE html>
<html>
<head>
	<title>PHP Sample</title>
</head>

<body>
	<?
	$content = array();
	$content["Employee1"] = array( "first" => "guybrush", "last" => "threepwood", "occupation" => "pirate" );
	$content["Employee2"] = array( "first" => "elaine", "last" => "marley", "occupation" => "mayor" );
	$content["Employee3"] = array( "first" => "wally", "last" => "feed", "occupation" => "cartographer" );
	
	/* Open a file and write out JSON */
	$filepath = "files/output-json.json";

	$fileHandler = fopen( $filepath, "w" ); // Open for write
	if ( $fileHandler == false ) { print_r( error_get_last() ); exit(); }
	
	fwrite( $fileHandler, json_encode( $content ) );

	fclose( $fileHandler );
	?>
	
	<p>Wrote file <?=$filepath?></p>

</body>
</html>
