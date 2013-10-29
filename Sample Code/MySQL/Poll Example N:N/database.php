<?
class Database
{
	private $hostname = '';
	private $database = '';
	private $username = '';
	private $password = '';
	private $dbHandler = null;
	private $debug = false;
	
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

	/* SELECT FUNCTIONS */
	function SelectPollAndType( $type )
	{		
		$query = "SELECT * ";
		$query .= "FROM Poll ";
		$query .= "INNER JOIN PollType ON PollType.poll_id = Poll.poll_id ";
		$query .= "INNER JOIN Type on PollType.type_id = Type.type_id ";
		$query .= "WHERE Type.name = '$type'";
		
		
		return $this->SubmitQuery( $query );
	}
	
	function SelectAllPolls() 
	{
		$query = "SELECT * ";
		$query .= "FROM Poll ";	
		
		return $this->SubmitQuery( $query );
	}
	
	function SelectTypesForPoll( $poll_id ) 
	{
		$query = "SELECT Type.name ";
		$query .= "FROM Type ";	
		$query .= "INNER JOIN PollType ON PollType.type_id = Type.type_id ";	
		$query .= "INNER JOIN Poll on PollType.poll_id = Poll.poll_id  ";	
		$query .= "WHERE Poll.poll_id = $poll_id  ";	
		
		return $this->SubmitQuery( $query );
		
	}
}
/*
SELECT Type.name
FROM Type
INNER JOIN PollType ON PollType.type_id = Type.type_id
INNER JOIN Poll on PollType.poll_id = Poll.poll_id 
WHERE Poll.poll_id = 3
 * */

?>

<?
if ( isset( $_GET["get-poll"] ) ) 
{
	$db = new Database();
	
	$polls = $db->SelectAllPolls( $_GET["poll-type"] );
}

foreach( $polls as $poll )
{
	echo( "<p>$poll[title]</p>" );
	$types = $db->SelectTypesForPoll( $poll["poll_id"] );
		
	
	echo( "<ul>");
	foreach( $types as $type )
	{
		echo( "<li>" );
		echo( $type["name"] );
		echo( "</li>" );
	}
	echo( "</ul>" );
}

?>






