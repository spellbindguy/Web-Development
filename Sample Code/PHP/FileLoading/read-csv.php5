<!DOCTYPE html>
<html>
<head>
	<title>MyProject</title>
	
	<style type="text/css">
		td, th { border: solid 1px #000000; padding: 5px; }
	</style>
</head>

<body>
	
	<?
	$filepath = "files/spreadsheet.csv";
	
	$fileHandler = fopen( $filepath, "r" ); 
	if ( $fileHandler == false ) 
	{
		print_r( error_get_last() );	// Error message (PHP5)
		exit();	// Stop script
	}
	
	$rows = array();
	
	while ( $r = fgetcsv( $fileHandler ) )
	{
		array_push( $rows, $r );
	}
	
	fclose( $fileHandler );
	?>
	
	<p>File contents:</p>

	<?
	foreach( $rows as $row ) {
		echo( "<p>" );
		print_r( $row );
		echo( "</p>" );
	}
	?>

</body>
</html>
