// categorie product manage script
// const { default: axios } = require("axios");

let categorie_select_btn = document.getElementById('select_cat_button');
function serach_json_products(){
    axios.get('')
}
categorie_select_btn.addEventListener('click',function(event){
    event.preventDefault();
    console.log(categorie_select_btn);
    let Filter_value = event.target.elements; 
}); 