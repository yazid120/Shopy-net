<?php 
require_once 'Db_Class_conn.php';


class adminDisplay{

 public $connection; 

public function DisplayUSER($connection){
try{
    $sql = 'SELECT * FROM `users`'; 
    $result_fetch = $connection ->query($sql);
    return $result_fetch ->fetchAll(PDO::FETCH_ASSOC);
   
}catch(PDOException $e)
{
 die('Error: User display error') . $e->getMessage(); 
}
}

public function DisplayProduct($connection){
  try{
   $sql = 'SELECT * FROM `product` BY ORDER ASC';
   $result_fetch = $connection ->query($sql); 
   return json_encode($result_fetch->fetchAll(PDO::FETCH_ASSOC));

  }catch(Exception $e)
  {
    die('Error: User display error') . $e->getMessage();
  }
}

}


?>