<?php 
require_once __DIR__.'/db_conn.php';
require_once __DIR__.'/functions.php';

if(isset($_POST['add_prod'])){
    function row_Data($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = strip_tags($data);
        return $data;
    }

    $errors = array();
    $name_product = row_Data($_POST['name_product']);
    $code_product = row_Data($_POST['code_product']); 
    $description_product = row_Data($_POST['description_product']); 
    $price_unit_product = row_Data($_POST['price_unit_product']); 
    $image_product = row_Data($_POST['image_product']);
    $quantity_product = row_Data($_POST['quantity_product']);
    $categorie_product = row_Data($_POST['categorie_product']);

    if(empty_product($name_product,$code_product,$description_product,$price_unit_product,$quantity_product) !== true):
     $empty_prod_infos = 'empty_product_infos';
     array_push($errors,$empty_prod_infos);
        header('location: http://localhost:8080/admin/product_managment?error='.$empty_prod_infos);
    endif;

    if(count($errors) <=0): 
   
    endif;
    
}
?>