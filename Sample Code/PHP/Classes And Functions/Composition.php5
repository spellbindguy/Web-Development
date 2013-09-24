<?

class StudentInfo
{
	public $m_gpa, $m_lstClasses = Array();
	
	public function __construct()
	{
		$this->m_gpa = 4.0;
	}
	
	public function GetGPA()
	{
		return $this->m_gpa;
	}
}

class Person
{
	private $m_name;
	private $m_info;
	
	function __construct( $paramArray )
	{
		$this->m_name = $paramArray["name"];
		$this->m_info = new StudentInfo();
	}
	
	function OutputInfo()
	{
		echo( $this->m_name );
		echo( ", " );
		echo( $this->m_info->GetGPA() );
	}
}

$student = new Person( Array( "name"=>"WW" ) );

$student->OutputInfo();

?>
