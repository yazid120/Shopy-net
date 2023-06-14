<?php
//session_start();

use function PHPSTORM_META\sql_injection_subst;

require_once __DIR__.'/db_conn.php';
require_once __DIR__.'/functions.php';
#login authentcation v

if(isset($_POST['login'])){
  
//prevent SQL Injection by preventing slashes inside
function row_Data($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = strip_tags($data);
  return $data;
}
$email = row_data(mysqli_real_escape_string($connection,$_POST['user_email']));
$password = row_data(mysqli_real_escape_string($connection,$_POST['user_password']));

$error = array();

if(empty_input_login($email , $password) !== false){ 
$error_empty = 'empty fields';
array_push($error,$error_empty);
  header('location: http://localhost:8080/login?error='.$error_empty); 
  exit();
}
if(invalid_email_add($connection, $email) !== false){
$error_invalidemail = 'invalid email address'; 
array_push($error,$error_invalidPwd); 
 header('location: http://localhost:8080/login?error='.$error_invalidemail); 
 exit(); 
}

if(count($error) <= 0){ 
  login_user($connection,$email,$password); 
  exit();
}
$res = role_user($connection, $email);
var_dump($res); 

}
?>