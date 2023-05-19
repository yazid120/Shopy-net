<?php 
require_once '../../action/db_conn.php';
require_once '../../action/functions.php';
require_once '../../Config/config.php';

$__REQUEST = REQUEST_METHOD;

switch($__REQUEST){
    case'GET':
        $sql_getLAST_CL="SELECT * FROM `users` ORDER BY `id` DESC LIMIT 5"; 
        $result_getLAST_CL = mysqli_query($connection,$sql_getLAST_CL);
        while($row = mysqli_fetch_assoc($result_getLAST_CL)){
            echo $row['id']; 
        }
}

?>