<!DOCTYPE html>
<html>
	<head>
		<title>Simple MySQL</title>
	</head>
	
	<body>
		
		<? include_once( "database.php" ); ?>
		
		<?
		$db = new Database();
		
		$db->CreateAuthorsTable();
		
		$authorInfo = array ( 
			"name" => "Guybrush Threepwood",
			"email_address" => "gt@lucasarts.com",
			"homepage" => "lucasarts.com"
		);		
		$db->InsertAuthor( $authorInfo );
		
		$authorInfo = array ( 
			"name" => "Elaine Marley",
			"email_address" => "em@lucasarts.com",
			"homepage" => "lucasarts.com"
		);		
		$db->InsertAuthor( $authorInfo );
		
		$db->SelectAllAuthors();
		?>
		
	</body>
</html>
