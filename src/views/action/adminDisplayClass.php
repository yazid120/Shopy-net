<?php 
require_once 'Db_Class_conn.php';


class adminDisplay{

 public $connection; 

public function DisplayUserbyRole($connection){
try{
  $sql='SELECT * FROM `user_info` ORDER BY `id` ASC'; 
  $result_fetch = $connection->query($sql); 
  // $userFetched_r = $result_fetch ->fetchAll(PDO::FETCH_ASSOC);
  while($row = $result_fetch->fetch()){
    echo '<tr><td>'.$row['id'].'</td>'.
    '<td>'.$row['user_name'].'</td>'.
    '<td>'.$row['email'].'</td>'.
    '<td>'.$row['gender'].'</td>'.
    '<td>'.$row['date_inscr'].'</td>'.
    '</tr>';
  }
}catch(PDOException $e){
  die('error: exception connection'). $e->getMessage(); 
}
}
public function DisplayUSER($connection){
try{
    $sql = 'SELECT * FROM `user_info` ORDER BY `id` ASC'; 
    $result_fetch = $connection ->query($sql);
    while($row = $result_fetch->fetch()){
      echo '<tr><td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['id'].'</td>'.
      '<td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['user_name'].'</td>'.
      '<td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['email'].'</td>'.
      '<td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['gender'].'</td>'.
      '<td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['date_inscr'].'</td>'.
      '<td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">'.$row['role'].'</td>'.
      '<td class="">
      <button class="p-3 bg-green-500 rounded-md">Modify</button>
      <button class="p-3 bg-red-500 rounded-md">Delete</button></td>'.
      '</tr>';
    }
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