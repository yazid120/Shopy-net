<?php 

class Db_connect{
    private $host = 'localhost';
    private $username = 'root'; 
    private $db_password = '1234';
    private $db_name ='Shopy_net'; 

    public function __construct($host=null,$username=null,$db_password=null,$db_name=null)
    {
     if($host != null)
     {
        $this -> host = $host; 
        $this -> username = $username; 
        $this -> db_password = $db_password; 
        $this -> db_name = $db_name;
     }   
    try{
     $PDO = new PDO('mysql:host=' .$this->host .';dbname='.$this->db_name ,$this->username , $this ->db_password); 
    }catch(Exception $e){
         echo 'data base error:' . $e->getMessage(); 
    }
    }

    public function connect() {
        try {
       $conn = new PDO('mysql:host=' .$this->host .';dbname='.$this->db_name, $this->username, $this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Database Error: db failed") . $e->getMessage();
        }
    }

}



?>