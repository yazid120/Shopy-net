<?php 
 
$localhost = 'localhost';
$user_name = 'root'; 
$db_password = '1234'; 
$db_name = 'Shopy_net'; 

$port = null; 
//CREATE connection myqli

$connection = mysqli_connect($localhost,$user_name,$db_password,$db_name); 

$valid_conn = $connection ? 'Connection open successfuly' : die("Error: error found !!" . mysqli_connect_error() . "</BR>" ); 

//echo $valid_conn; 


?>          