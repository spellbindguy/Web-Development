<?

class Person
{
	private $m_firstName, $m_lastName;
	
	function __construct() 
	{
		$this->m_firstName = $this->m_lastName = "unset";
	}
	
	public function SetName( $f, $l )
	{
		$this->m_firstName = $f;
		$this->m_lastName = $l;
	}
	
	public function GetName()
	{
		// Don't forget the "$this->" beginning!
		$concatName = $this->m_lastName . ", " . $this->m_firstName;
		
		return $concatName;
	}
}

class Student extends Person
{
	private $m_gpa;
	
	function __construct() 
	{
		// Call parent's constructor
		parent::__construct();
		$this->m_gpa = 0;
	}
	
	public function SetGPA( $g )
	{
		$this->m_gpa = $g;
	}
	
	public function GetGPA()
	{
		return $this->m_gpa;
	}
}

?>

<?
$person1 = new Person();
$person2 = new Student();
?>

<?
$person1->SetName( "Guybrush", "Threepwood" );
?>

<p>Person 1: <?=$person1->GetName()?></p>
<p>Person 2: <?=$person2->GetName()?>, GPA: <?=$person2->GetGPA()?></p>









