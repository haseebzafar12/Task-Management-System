<?php

class Database{

  

    // specify your own database credentials

    private $host = "localhost";

    private $db_name = "dbkr4fxz3ruiai";

    private $username = "un5j2yikexlrj";

    private $password = "un5j2yikexlrj";

    public $conn;

  

    // get the database connection

    public function getConnection(){

  

        $this->conn = null;

  

        try{

            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password,array(

                PDO::MYSQL_ATTR_LOCAL_INFILE => true,

        ));

        }catch(PDOException $exception){

            echo "Connection error: " . $exception->getMessage();

        }

  

        return $this->conn;

    }



    

}

?>