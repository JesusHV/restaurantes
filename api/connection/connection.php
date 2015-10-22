<?php 

	class Connection { 
	    public $spName = ''; 
	    public $values = [];
	    public $pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');

	    function __construct(){

		}
	    
	    public function sp() { 
	        $statement = $pdo->query('CALL '. $this->sp);
	        $row = $statement->fetch(PDO::FETCH_ASSOC);
	        return $row;
	    } 
	}

	public function callSp($valor){
		$this->sp = $valor;
	}

?>