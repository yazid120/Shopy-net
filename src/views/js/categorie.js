// categorie product manage script
// const { default: axios } = require("axios");

let categorie_select_btn = document.getElementById('select_cat_button');


function serach_json_products(e){
    e.preventDefault(); 
    let selection_cat_list = document.getElementById('production_list');
    let selection_value = selection_cat_list.options[selection_cat_list.selectedIndex].value;
    let max_val_cat = document.getElementById('maximum_price').value; 
    let min_val_cat = document.getElementById('minimum_price').value;

    axios.post('http://localhost/Shopy-net/src/views/action/categorieProd_api.php',{data: selection_value})
    .then(response=>{
        console.log(response.data);
    }).catch(error => console.log(error))
    return selection_value 
}

categorie_select_btn.addEventListener('click',function(event){
    event.preventDefault(); 
    console.log(serach_json_products(event)); 
    let Filter_value = event.target.elements; 
   
}); 