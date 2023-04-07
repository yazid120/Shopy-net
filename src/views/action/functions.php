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

function user_infosExistense($connection,$email){
  $sql ="SELECT * FROM `users` WHERE user_name = ? OR email = ?;"; 
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    return 'Error: Technical error statement'; 
    exit(); 
  }
  mysqli_stmt_bind_param($stmt,'ss',$email,$email); 
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
    $success_message= 'user created successfuly'; 
    $sql ="INSERT INTO `users`(user_name,email,gender,password) VALUES(?,?,?,?) ;"; 
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
    #redirect user to login page once created
    header('location: http://localhost:8080/login?success='.$success_message); 
    exit(); 
}




/*** Login function ***/
function empty_input_login($username,$password){
    $return_result = false; 
    if(empty($username) || empty($password)){
        $return_result = true;
    }else{
        $return_result = false;
    }
    return $return_result;
}

function invalid_pwd($connection, $password){
    $return_result =false; 
    $sql="SELECT password FROM `users` WHERE password = ? ;"; 
    $stmt = mysqli_stmt_init($connection); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header('location: http://localhost:8080/login?error=Technical_error');
       exit();
    }
    mysqli_stmt_bind_param($stmt,'s',$password); 
    mysqli_stmt_execute($stmt); 
    
    $result_pwd = mysqli_stmt_get_result($stmt); 
    var_dump(mysqli_fetch_assoc($result_pwd)); 
    if($row = mysqli_fetch_assoc($result_pwd)){
        $pwd_getted = $row; 
    }

    if($pwd_getted == $password){ 
        $return_result = false; 
    }else{
        $result_pwd = true; 
    }
    echo $return_result; 
    mysqli_stmt_close($connection); 
}

?> 