<?php 
include_once __DIR__.'/admin_component/header.php';
?>

<div class="wrapp-content-contact flex p-2 mt-5">
    <div class="background_prod_bann">
        <!-- <img src="https://localhost/Shopy-net/src/views/admin/img/profiles/12291270_Wavy_Tech-31_Single-04.jpg" alt=""/> -->
    </div>
  <form action="http://localhost/Shopy-net/src/views/action/Add_product_management.php" 
    method="POST" class="managment_FormWrapp" enctype="multipart/form-data">
    <label>Nom produit</label>
    <input type="text" name="name_product" /> 

    <label>Code produit</label>
    <input type="text" name="code_product" /> 

    <label>Description du produit</label>
    <textarea name="description_product" rows="4" cols="50">
    </textarea>

    <label>prix uniter produit</label>
    <input type="number" name="price_unit_product" /> 

    <label>image produit url</label>
    <input type="file" name="image_product" value="" />

    <label>quatite disponible produit</label>
    <input type="number" name="quantity_product" /> 

    <label>categorie produit</label>
    <select name="categorie_product">
        <option value="1">Appareil électronique</option>
        <option value="2">informatique</option>
        <option value="3">console & jeux video</option>
        <option value="4">electromenager & Tv</option>
        <option value="5">livre & e-books</option>
        <option value="6">vêtements et accessoires</option>
        <option value="7">montre et bijoux</option>
    </select>

    <div class="mt-5">
        <button type="submit" name="add_prod" class="bg-indigo-500 rounded p-3">Add product</button>
    </div>
</form>
</div>


<?php 
include_once __DIR__.'/admin_component/footer.php';
?>