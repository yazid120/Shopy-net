<?php 
require_once __DIR__.'/db_conn.php';
require_once __DIR__.'/functions.php';

if(isset($_POST['add_prod'])){
    // upload image product file to folder
  
    $product_image_name_error = $_FILES['image_product']['error'];
    $product_image_name = $_FILES['image_product']['name'];
    $product_image_type = $_FILES['image_product']['type'];
    $product_image_tmp_name = $_FILES['image_product']['tmp_name'];

    // $folder = $_SERVER['DOCUMENT_ROOT'].'/Shopy-net/src/views/images/prod/'.$product_image_name;
    // if(move_uploaded_file($product_image_tmp_name,$folder)){
    //     echo 'image uploaded';
    // }else{
    //     echo 'error uploading image'.$_SERVER['DOCUMENT_ROOT'];
    // }
    


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
    $image_product = row_Data($_FILES['image_product']['name']);
    $quantity_product = row_Data($_POST['quantity_product']);
    $id_categorie_product = row_Data($_POST['categorie_product']);

    // if(empty_product($name_product,$code_product,$description_product,$price_unit_product,$quantity_product) !== true):
    //  $empty_prod_infos = 'empty_product_infos';
    //  array_push($errors,$empty_prod_infos);
    //     header('location: http://localhost:8080/admin/product_managment?error='.$empty_prod_infos);
    // endif;

    $catgorie_product__assoc = get_cateagorieProductName($connection,$id_categorie_product);
    $catgorie_product =  $catgorie_product__assoc['cat_prod_name']; 


    if(count($errors) <=0):
     if(Upload_product_image($product_image_name,$product_image_tmp_name)){
        AddProduct($connection,$id_categorie_product,$code_product,$catgorie_product,$name_product,
        $description_product,$price_unit_product,$image_product,$quantity_product);
       header('location:http://localhost:8080/admin/product_managment?success=Product_added'); 
     }else{
        header('location:http://localhost:8080/admin/product_managment?success=error_uploading_product'); 
     }
    endif;
    
}
?>