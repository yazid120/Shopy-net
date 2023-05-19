// Categorie Product Manage Script
// const { default: axios } = require("axios");

let categorie_select_btn = document.getElementById('select_cat_button');

function serach_json_products(e){
    e.preventDefault(); 
    let selection_cat_list = document.getElementById('production_list');
    let selection_value = selection_cat_list.options[selection_cat_list.selectedIndex].value;
    let max_val_cat = document.getElementById('maximum_price').value; 
    let min_val_cat = document.getElementById('minimum_price').value;

if(min_val_cat > max_val_cat){
    document.getElementById('minimum_price').value = 0;    
}else{
// Post request axios data (Object)
let data_post = {
    data: selection_value,
    max_price: max_val_cat,
    min_price: min_val_cat
}
  axios.post('http://localhost/Shopy-net/src/views/action/categorieProd_api.php',data_post)
    .then(response=>{
        console.log(response.data);
    }).catch(
        error => console.log(error)
    )
    return selection_value 
}
}

categorie_select_btn.addEventListener('click',function(event){
    event.preventDefault(); 
    let all_product = document.querySelectorAll('.products_elments_sets');
    // name all product 
    let products_name = document.getElementsByClassName('title_product');
    
        console.log(serach_json_products(event)); 
    
    
    
    let Filter_value = event.target.elements; 
    
}); 