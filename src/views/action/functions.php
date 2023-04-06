<?php 
require './db_conn.php';
#partie function contient les script php du site

function empty_inputs($userName,$email,$gender,$password){
    $return_result = false; 
    if(empty($userName) || empty($email) || empty($gender) || empty($password)){ 
     $return_result = true; 
    }else{
        $return_result = false;
    }
    return $return_result;
}

function invalid_userName($userName){
    $return_result = false; 
    if(!preg_match('/^[a-zA-Z0-9]*$/',$userName)){
        $return_result = true;
    }else{
        $return_result = false; 
    }
    return $return_result;
}

function invalid_email($email){
    $return_result = false; 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}

function inmatched_password($password,$repassword){
    $return_result = false; 
    if($password !== $repassword){
        $return_result = true; 
    }else{ 
       $return_result = false;
    }
    return $return_result;
}

function user_infosExistense($connection,$email,$name){
  $sql ="SELECT * FROM `users` WHERE user_name = ? OR email = ?;"; 
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    return 'Error: Technical error statement'; 
    exit(); 
  }
  mysqli_stmt_bind_param($stmt,'ss',$email,$name); 
  mysqli_stmt_execute($stmt); 
  
  #get data (user) if exists
  $user_data = mysqli_stmt_get_result($stmt); 
  if($row = mysqli_fetch_assoc($user_data)){
    return $row; 
  }else{
    $return_result = false; 
    return $return_result; 
  }
  #close statement connexion
  mysqli_stmt_close($connection); 

} 

function Create_user($connection,$name,$email,$sexe,$password){

    $sql ="INSERT INTO `users`(user_name,email,gender,password) VALUES(?,?,?,?,?) ;"; 
    $stmt = mysqli_stmt_init($connection); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: http://localhost:8080/register?error=Error_Technical_error_Statement'); 
      exit(); 
    }
     #Hashing password
    $hashed_pwd = password_hash($password,PASSWORD_DEFAULT); 
    
    mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$sexe,$hashed_pwd); 
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt); 
    header('location: http://localhost:8080/profile'); 
    exit(); 
}




/*** Login function ***/
function empty_input_login($username,$password){
    $return_result = false; 
    if(empty($userName) || empty($userName)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}
function invalid_pwd($connection){
    $sql="SELECT * FROM `users`"; 

}

?> 