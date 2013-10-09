<? /**** THIS FILE IS RESPONSIBLE FOR LOADING ALL IMAGES IN THE images/ DIRECTORY ****/ ?>


<?
// Get all files in the images/ directory

$files = scandir( "images/" );
Out( "Files:" );
Out( $files );

// We're going to store image paths in this array
$imageArray = array();
$pathBase = "images/";

foreach( $files as $file )
{
	$validExtentions = array( "jpg", "jpeg", "png", "gif" );
	
	foreach( $validExtentions as $ext ) 
	{
		if ( strpos( $file, $ext ) )
		{
			array_push( $imageArray, $pathBase . $file );
		}
	}
}

Out( "Files to output:" );
Out( $imageArray );

?>
