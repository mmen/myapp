<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "pdocrudoopl2";
    private $username = "dbadmin";
    private $password = "MdpAdmin@2019";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
