<?php 
require_once 'Db_Class_conn.php';


class adminDisplay{

 public $connection; 

public function DisplayUSER($connection){
try{
    $sql = 'SELECT * FROM `users` ORDER BY `id` ASC'; 
    $result_fetch = $connection ->query($sql);
    $userResult = $result_fetch ->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($userResult);
   
}catch(PDOException $e)
{
 die('Error: User display error') . $e->getMessage(); 
}
}

public function DisplayProduct($connection){
  try{
   $sql = 'SELECT * FROM `product` ORDER BY `id` ASC';
   $result_fetch = $connection ->query($sql); 
   return json_encode($result_fetch->fetchAll(PDO::FETCH_ASSOC));

  }catch(Exception $e)
  {
    die('Error: product display error') . $e->getMessage();
  }
}

}


?>