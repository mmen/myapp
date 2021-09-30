<?php 

class Model{
	
	static $connections = array();

	public $conf = 'default';
	public $table = false;
	public $db;

	public function __construct(){
		// Jme connecte à la base
		$conf = Conf::$databases[$this->conf];
		if(isset(Model::$connections[$this->conf])){
			$this->db = Model::$connections[$this->conf];
			return true;
		}
		try{
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',
				$conf['login'],
				$conf['password'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') //forcer encodage utf8 pour le query
			);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			Model::$connections[$this->conf] = $pdo;
			$this->db = $pdo;
		}catch(PDOException $e){
			if(Conf::$debug >= 1){
				die($e->getMessage());
			}else{
				die('Impossible de se connecter à la base de donnée');
			}
		}
		// J'initialise qques variables
		if($this->table === false){
			$this->table = strtolower(get_class($this)).'s';
			//$this->table = 'posts';
		}
	}

	public function find($req){
		$sql = 'SELECT * FROM '.$this->table.' as '.get_class($this).' ';
		
		// Contruction de la condition
		if(isset($req['conditions'])){
			$sql .= 'WHERE ';
			if(!is_array($req['conditions'])){
				$sql .= $req['conditions'];
			}else{
				$cond = array();
				foreach($req['conditions'] as $key => $value){
					if(!is_numeric($value)){
						//$value = mysql_escape_string($value); // This function exist only in mysql version 5
						$value = $this->db->quote($value);
					}
					$cond[] = "$key=$value";
				}
				$sql .= implode(' AND ', $cond);
			}
		}
		//die($sql);
		
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

	public function findFirst($req){
		return current($this->find($req));
	}
	
}