<?php
use Symfony\Component\VarDumper\VarDumper;

require_once './db_conn.php';
require_once './functions.php';
#sign_up authentcation v 

if(isset($_POST['submit'])){
    $name = $_POST['user_name']; 
    $email = $_POST['user_email']; 
    $sexe = $_POST['sexe']; 
    $password = $_POST['user_password']; 
    $repassword = $_POST['repassword']; 
    //errors array 
    $error = array(); 

    if(empty_inputs($name,$email,$sexe,$password,$repassword) !== false){
    $empty_inpt_err= 'empty fields'; 
     array_push($error,$empty_inpt_err); 
      header('location: http://localhost:8080/register?error='.$empty_inpt_err); 
      exit();
    }
    if(invalid_userName($name) !== false){
    $Invalid_name = 'invalid user name'; 
      array_push($error,$Invalid_name); 
       header('location: http://localhost:8080/register?error='.$Invalid_name); 
       exit();
    }
    if(invalid_email($email) !== false){
     $invalid_mail = 'invalid email addr';
     array_push($error,$invalid_mail); 
     header('location: http://localhost:8080/register?error='.$invalid_mail); 
     exit();
    }
    if(inmatched_password($password,$repassword)!== false){
      $unmatched_pwd = 'password not matched'; 
      array_push($error,$unmatched_pwd); 
      header('location: http://localhost:8080/register?error='.$unmatched_pwd); 
      exit(); 
    }
    if(user_infosExistense($connection,$email) !== false){
      $user_alreadyExist = 'User already exists'; 
      array_push($error,$user_alreadyExist); 
      header('location: http://localhost:8080/register?error='.$user_alreadyExist); 
      exit(); 
    }

    #submiting new user by errors count
    if(count($error) <=0){
        Create_user($connection,$name,$email,$sexe,$password);
    }

}

?>