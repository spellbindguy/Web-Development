<!DOCTYPE html>
<html>
	<head>
		<title>Image Uploader</title>
	</head>
	
	<body>
		<? include_once( "debug-out.php5" ); ?>
		<? include_once( "uploader.php5" ); ?>
		<? include_once( "image-loader.php5" ); ?>
		<h1>Gallery</h1>
		
		<? foreach( $imageArray as $path ) { ?>
			<img src="<?=$path?>" />
		<? } ?> 
		
	</body>
</html>
