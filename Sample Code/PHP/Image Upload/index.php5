<!DOCTYPE html>
<html>
	<head>
		<title>Image Uploader</title>
	</head>
	
	<body>
		<h1>Image Uploader</h1>
		
		<!-- When the submit button is hit, the $_POST and $_FILES data will
		be sent and the page will go to gallery.php5 -->
		<form method="post" enctype="multipart/form-data" action="gallery.php5">			
			<input type="file" name="image[0]" />
			<input type="file" name="image[1]" />
			<br/>
			<input type="submit" name="new-image" value="Add Image"/>
		</form>
	</body>
</html>
