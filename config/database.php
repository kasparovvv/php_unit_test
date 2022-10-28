<?php


class db {
    
    private $host   = 'localhost';
    private $user   = 'root';
    private $pass   = 'password';
    private $dbname = 'UNIT_TEST';

    private $dbh;
    private $error;
    private $stmt;

    public function __construct() 
    {
      
        $dsn = 'mysql:host='. $this->host . ';dbname'. $this->dbname;

       
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );

        
        try
        { 
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        catch(PDOException $e) 
        {
            $this->error = $e->getMessage();
        }
    }
    


}




?>