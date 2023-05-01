<?php 
if(session_status() == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/db_conn.php';
require_once '../Config/config.php';

$PostData = file_get_contents('php://input');
$request_prod = json_decode($PostData); 
$request_prod_data_value = $request_prod -> data; 
$request_prod_data_max_price = $request_prod -> max_price; 
$request_prod_data_min_price = $request_prod -> min_price; 

$method_request = REQUEST_METHOD; 
switch($method_request){
    case'POST':
      if(isset($PostData)){
        $product_name = array(); 
      $sql = "SELECT `name_prod` FROM `product` WHERE '$request_prod_data_value' = `product`.`cat_prod_name` 
      AND '$request_prod_data_max_price' >= `product`.`price_unit` AND '$request_prod_data_min_price' <= `product`.`price_unit`"; 
        $response = mysqli_query($connection,$sql); 
        while($rows = mysqli_fetch_assoc($response)){
            $product_name[] = $rows['name_prod']; 
        }
      if($request_prod_data_value == '---'){
          echo(('no categorie prduct was chosed')); 
        }
      else{
          $product_name_json = json_encode($product_name);
          echo($product_name_json); 
      }
        mysqli_free_result($response); 
        mysqli_close($connection);
    }
}
?>

