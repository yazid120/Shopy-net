<?php 
if(session_status() == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/db_conn.php';
require_once '../Config/config.php';

$PostData = file_get_contents('php://input');
$request_prod = json_decode($PostData); 
echo $request_prod; 
$method_request = REQUEST_METHOD; 
switch($method_request){
    case'GET':
      if(isset($PostData)){
        $product_name = array(); 
        $sql = "SELECT `name_prod` FROM `product` WHERE '$request_prod' = `product`.`cat_prod_name`"; 
        $response = mysqli_query($connection,$sql); 
        while($rows = mysqli_fetch_assoc($response)){
            $product_name[] = $rows['name_prod']; 
        }
        $product_name_json = json_encode($product_name);
        echo($product_name_json); 

        mysqli_free_result($response); 
        mysqli_close($connection);
      }
}
?>

