<?php 
include_once __DIR__.'/admin_component/header.php';

?>
<body>
<h1>product managment</h1>
<form>
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
</form>
</body>