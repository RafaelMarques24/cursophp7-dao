<?php  

class Sql extends PDO {

	private $conn;

	public function __construct(){ // FUNCAO CONSTRUTORA QUE FAZ CONEXAO COM BANCO.

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($stantement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($stantement,$key, $value);
		}
	}

	public function setParam($stantement, $key, $value){

		$stantement->bindParam($key, $value);

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