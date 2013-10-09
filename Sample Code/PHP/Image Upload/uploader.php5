<? /**** THIS FILE IS RESPNOSIBLE FOR FILE UPLOADING ****/ ?>
<?
/************************* CHECKS TO MAKE SURE THIS IS THE CORRECT FILETYPE */
function IsValidFiletype( $filetype, $filename )
{
	$validExtentions = array( "jpg", "jpeg", "png", "gif" );
	
	$nameOK = false;
	$typeOK = false;
	foreach ( $validExtentions as $ext )
	{
		if ( strpos( $filetype, $ext ) !== false )
		{
			$typeOK = true;
		}
		
		if ( strpos( $filename, $ext ) !== false )
		{
			$nameOK = true;
		}
	}
	
	if ( !$nameOK || !$typeOK )
	{
		Out( "Error: Invalid file type" );
	}
	
	return ( $nameOK && $typeOK );
}

/************************* CHECKS TO MAKE SURE THIS IS NOT TOO BIG */
function IsValidSize( $filesize )
{
	$maxSize = 30000; // Bytes - so 30 KB
	
	if ( $filesize > $maxSize )
	{
		Out( "Error: File is too big!" );
	}
	
	return ( $filesize <= $maxSize );
}

/************************* CHECKS ERROR MESSAGE, 0 MEANS NO ERROR */
function HasNoErrors( $fileerror )
{
	switch( $fileerror )
	{
		case 1:
			Out( "Error: Invalid file size!" );
		break;
		
		case 2:
			Out( "Error: Invalid file size!" );
		break;
		
		case 3:
			Out( "Error: File is incomplete!" );
		break;
		
		case 4:
			Out( "Error: No file is attached!" );
		break;
		
		default:
			return true;
		break;
	}
	
	return false;
}

if ( isset( $_POST["new-image"] ) )
{
	// Upload new image
	
	// Image is automatically uploaded to a temp directory,
	// we have to do verification on file type, size, etc.
	// and then copy it to a better location.
	
	Out( "File info:" );
	Out( $_FILES );
	Out( "<hr/>" );
	Out( "Post info:" );
	Out( $_POST );
	
	// Files aren't separated into separate arrays. Instead,
	// we have arrays like "name", "type", etc., and those 
	// contain info for items 0, 1, 2, etc.	
	// Please see the "sample data.txt" file included in this folder for an example.
	
	$files = array();
	// Build files array, where teach item contains all the info for one file.	
	foreach( $_FILES["image"] as $infoName=>$imageInfo )
	{
		foreach( $imageInfo as $key=>$value )
		{
			Out( "Info: $infoName, Key: $key, Value: $value" );
			$files[$key][$infoName] = $value;
		}
	}
	
	Out( "Our files array:" );
	Out( $files );
	
	/*
	 * At this point, the array should look like:
	  [0] => Array
        (
            [name] => unsure.png
            [type] => image/png
            [tmp_name] => /tmp/phpqgqwSn
            [error] => 0
            [size] => 27429
        )
	 * */
	 
	 // Do error checking for each file, then move it to the permanent "images" directory.
	 foreach ( $files as $file )
	 {
		 if ( IsValidFiletype( $file["type"], $file["name"] )
				&& IsValidSize( $file["size"] )
				&& HasNoErrors( $file["error"] ) )
		{
			// At this point, everything should be OK.
			// File is already in temp directory ("tmp_name"), we need to copy it to our dir.
			// The file has a temp name, so we want to store it as the original name.
			
			$destination = "images/" . $file["name"];
			
			if ( !file_exists( "images/" ) )
			{
				// Create folder if it doesn't already exist
				mkdir( "images" );
			}
			
			if ( !move_uploaded_file( $file["tmp_name"], $destination ) )
			{
				Out( "Error: Error moving file" );
			}
		}
		else
		{
			// There were errors
			Out( "Error: File upload failed" );
		}
	 }
}
?>
