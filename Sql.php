<?php  

class Sql extends PDO {

	private $conn;

	public function __construct(){ // FUNCAO CONSTRUTORA QUE FAZ CONEXAO COM BANCO.

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($stantment, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($key, $value);
		}
	}

	public function setParam($stantment, $key, $value){

		$stantment->bindParam($key, $value);

	}

	public function query($RawQuery, $params = array()){

		$stmt = $this->conn->prepare("$RawQuery");

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($RawQuery, $params = array()):array
	{

		$stmt = $this->query($RawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}

?>