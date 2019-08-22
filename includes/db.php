<?php

class db{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this ->host = 'localhost';
        $this ->db = 'usuarios';
        $this ->user = 'root';
        $this ->password ="";
        $this ->charset ="utf8_general_ci";
        
    }

     function connect(){
          try{
              $connection = "mysql:host =" . $this->host . ";dbname =" . $this->db . ";user =" . $this->user . ";password =" . $this->password . ";charset =" . $this->charset;
              $options = [
                  PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_EMULATE_PREPARES =>false,
              ] ;
              $pdo = new PDO($connection,$this->user,$this->password,$options);
              return $pdo;
          }
          catch(PDOexception $e){
            print_r('Error connection :'.$e->getMessage());
         }    
    }
 }  
?>