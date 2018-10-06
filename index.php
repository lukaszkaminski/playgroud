<?
session_start();

class record {
	
	const YEAR = 2018;
	const MONTH = 1;

	function __construct() {
		 $this->currentMonth = isset($_SESSION['currentMonth'])?$_SESSION['currentMonth']:null;
		 $this->currentYear = isset($_SESSION['currentYear'])?$_SESSION['currentYear']:null;
	}

	public function addYear() {
	
	}
	
	public function addMonth() {
	
	}
	
	public function getCurrentMonth() {
	
	}
	
	public function getCurrentYear() {
	
	}
	
	public function setCurrentYear($year=self::YEAR) {
		try {
			if(!is_int($year) || $year >3000) 
				throw new Exception("Wrong year!");
			$this->currentYear = $year;
			$_SESSION['currentYear'] = $this->currentYear;
			
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}
	
	public function setCurrentMonth($month=1) {
		try {
			if(!is_int($month) || $month>12 || $month <1) 
				throw new Exception("Wrong month");
			$this->currentMonth = $month;
			$_SESSION['currentMonth'] = $this->currentMonth;
			
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}
	
}


class Route {
	
	public $from;
	public $to;
	public $distance;
	public $purpose;
	public $wayBack;
	public $dayOfMonth;
	public $month;
	public $year;
	
	function __construct($from, 
						$to, 
						$distance,
						$purpose, 
						$wayBack, 
						$dayOfMonth, 
						$month, 
						$year) {
						
		if(IsNullOrEmptyString($from))
		
		$this->from = $form;
		$this->to = $to;
		$this->distance = $distance;
		$this->purpose = $purpose;
		$this->wayBack = $wayBack;
		$this->dayOfMonth = $dayOfMont;
		$this->month = $month;
		$this->year = $year;
		
	}
	
	public function getRouteById($routeId) {
	
	}
	
	public function getRoutesByDate($routeId) {
	
	}
}

function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}

$ew = new record();
$ew->setCurrentMonth(12);
$ew->setCurrentYear(2018);
echo "AA";

?>