<?php 
include_once __DIR__.'/admin_component/header.php';
?>

<h1>product managment</h1>
<div class="wrapp-content-contact flex p-2">
    <div class="">
        <!-- <img src="https://localhost/Shopy-net/src/views/admin/img/profiles/12291270_Wavy_Tech-31_Single-04.jpg" alt=""/> -->
    </div>
<form action="" method="POST" class="managment_FormWrapp">
    <label>Nom produit</label>
    <input type="text" name="name_product" /> 

    <label>Description du produit</label>
    <textarea name="description_product" rows="4" cols="50">
    </textarea>

    <label>prix uniter produit</label>
    <input type="number" name="price_unit_product" /> 

    <label>image produit url</label>
    <input type="image" name="" /> 

    <label>quatite disponible produit</label>
    <input type="number" name="quantity_product" /> 

    <div class="mt-5">
        <button type="submit" name="add_prod" class="bg-green-500 rounded p-3">Add product</button>
    </div>
</form>
</div>


<?php 
include_once __DIR__.'/admin_component/footer.php';
?>