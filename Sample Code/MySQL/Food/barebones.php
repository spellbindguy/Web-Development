<?

$hostname = 'db498096014.db.1and1.com';
$database = 'db498096014';
$username = 'dbo498096014';
$password = 'sampledb';

$connection = "mysql:host=" . $hostname . ";";
$connection .= "dbname=" . $database;

try
{
	$dbHandler = new PDO( 
		$connection,
		$username,
		$password
	);
}
catch( PDOException $error )
{
	print_r( $error->getMessage() );
}

$query = "SELECT * FROM rjmfff_MenuItem";
$rows = array();
foreach( $dbHandler->query( $query ) as $row ) 
{
	array_push( $rows, $row );
}

print_r( $rows );

?>
