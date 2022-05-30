<?php


class Database {

    private $connection = "";
    private $server = "localhost";
    private $database = "clinique";
    private $user = "root";
    private $password = "";

    public function __construct(){
        $this->createConnection();
    }

    public function getConnection(){
        return  $this->connection;
    }

    public function createConnection(){
        $this->connection = new PDO("mysql:host=$this->server;dbname=$this->database", $this->user, $this->password);
    }
}

?>
