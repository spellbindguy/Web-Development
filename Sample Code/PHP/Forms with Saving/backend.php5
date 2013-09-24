
<h2>Form Output</h2>
<pre>
	<? print_r( $_POST ); ?>
</pre>

<?
// save data

$filepath = "output.txt";
$fileHandler = fopen( $filepath, "w" );
if ( $fileHandler == false ) 
{ 
	print_r( error_get_last() ); 
	exit(); 
}

foreach ( $_POST as $key=>$value ) 
{
	fwrite( $fileHandler, $key . ": " . $value . "\n\n" );
}

fclose( $fileHandler );

?>
