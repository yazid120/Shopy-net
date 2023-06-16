<?php 
require_once __DIR__.'/functions.php';
require_once __DIR__.'/db_conn.php';

    $code_produit = $_GET['code_prod'];
    echo $code_produit;
    if(Delete_product($connection,$code_produit)){
      header('location: http://localhost:8080/admin/product_list?success=produit_effacer');
    }
    else{
        header('location: http://localhost:8080/admin/product_list?error=error_produit_effacer');
    }
    

?>
