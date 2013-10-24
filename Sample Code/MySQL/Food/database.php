<?
class Database
{
	private $hostname = 'db498096014.db.1and1.com';
	private $database = 'db498096014';
	private $username = 'dbo498096014';
	private $password = 'sampledb';
	
	private $dbHandler = null;
	private $debug = true;
	
	function __construct() 
	{
		$this->OutputDebug( "Constructor" );
		$connection = "mysql:host=" . $this->hostname . ";";
		$connection .= "dbname=" . $this->database;
		
		try
		{
			$this->dbHandler = new PDO( 
				$connection,
				$this->username,
				$this->password
			);
			
			$this->OutputDebug( "Connected" );
		}
		catch( PDOException $error )
		{
			$this->OutputError( $error->getMessage() );
		}
	}
	
	function OutputError( $error ) 
	{
		echo( "<div class='error'>" );
		print_r( $error );
		echo( "</div>" );
	}
	
	function OutputDebug( $message ) 
	{
		if ( $this->debug ) 
		{
			echo( "<pre>" );
			print_r( $message );
			echo( "</pre>" );
		}
	}
	
	private function SubmitQuery( $query ) 
	{
		$this->OutputDebug( $query );
		
		$rows = array();
		
		foreach( $this->dbHandler->query( $query ) as $row ) 
		{
			array_push( $rows, $row );
		}
		
		if ( $this->dbHandler->errorInfo()[2] != "" )
		{
			$this->OutputError( $this->dbHandler->errorInfo() );
		}
		
		$this->OutputDebug( $rows );
		return $rows;
	}
	
	private function Query( $query )
	{
		$this->OutputDebug( "Insert" );
		$this->OutputDebug( $query );
		
		$result = $this->dbHandler->exec( $query );
		
		$this->OutputDebug( $this->dbHandler->errorInfo() );
		$this->OutputDebug( $result );
	}
	
	/* CREATE TABLE */
	function CreateAuthorsTable()
	{
		$query = "CREATE TABLE rjm_Authors (";
		$query .= " author_id int AUTO_INCREMENT,";
		$query .= " name varchar(100) NOT NULL,";
		$query .= " email_address varchar(100) NOT NULL,";
		$query .= " homepage varchar(100),";
		$query .= " PRIMARY KEY( author_id )";
		$query .= ")";
		return $this->Query( $query );
	}
	
	/* SELECT FUNCTIONS */
	function SelectAllMenuItems()
	{		
		$query = "SELECT * FROM rjmfff_MenuItem";
		return $this->SubmitQuery( $query );
	}

	/* INSERT FUNCTIONS */
	function InsertAuthor( $info )
	{
		$query = "INSERT INTO rjm_Authors";
		$query .= "( name, email_address, homepage )";
		$query .= " VALUES ";
		$query .= "('" . $info["name"] . "','" . $info["email_address"] . "','" . $info["homepage"] . "')";
		return $this->Query( $query );
	}
}
?>

