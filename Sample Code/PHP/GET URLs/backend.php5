<?
$profile["name"] = $_GET["author"];

if ( $_GET["author"] == "" )
{
	?>
	<p>No name specified. Make sure to use URL:</p>
	<p><a href="http://www.alketo.info/samples/url/profile.php?author=walter-white">www.alketo.info/samples/url/profile.php?author=walter-white</a></p>
	<p><a href="http://www.alketo.info/samples/url/profile.php?author=rosangela-blackwell">www.alketo.info/samples/url/profile.php?author=rosangela-blackwell</a></p>
	<?
}

// Open profile

$filepath = "profiles/" . $_GET["author"] . ".json";
if ( file_exists( $filepath ) )
{
	$fileIn = fopen( $filepath, "r" );
	if ( $fileIn == false ) { exit(); }
	
	$contentsArray = json_decode( fgets( $fileIn ), true );
	
	$profile["bio"] = $contentsArray["bio"];
	$profile["location"] = $contentsArray["location"];
	$profile["name"] = $contentsArray["name"];
	
	fclose( $fileIn );	
}

?>
