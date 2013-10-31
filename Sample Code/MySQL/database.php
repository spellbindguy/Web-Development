<?
class Database
{
	private $hostname = '';
	private $database = '';
	private $username = '';
	private $password = '';
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
}
?>

