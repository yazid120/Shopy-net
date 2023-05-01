//Search bar shopy_net script
/***
 * @param {string} search_up_val //The main search bar input value
 * @param {array} all_product // Node list of all products containers
 * @return {array}  //1.in indicateur that point elment from the courses inside
 *         //2. it verify if user the word inside the search bar is == products == lessence
 */

let search_delete_reset_input = document.getElementById('icon_close_search_val'); 
let search_in_value  = document.getElementById('search_bar'); 

 search_delete_reset_input.addEventListener('click' ,()=>{
    if(search_in_value.value != ''){
       search_in_value.value = '';
       search_delete_reset_input.classList.replace('block','none');
    }
   
}); 

let Search = function(){
    let search_input = document.getElementById('search_bar'); 
    let search_up_val = search_input.value.toUpperCase();

    let product_list = document.getElementById('product_list');
    let all_product = document.querySelectorAll('.products_elments_sets');
    //name product
    let product_name = document.getElementsByClassName('title_product');
   for(let i=0; i<product_name.length; i++){
        var match_n_product = all_product[i].getElementsByClassName('title_product')[0];
      //   console.log(search_up_val); 
        if(match_n_product){
           var Text_value = match_n_product.textContent || match_n_product.innerHTML; 
       
           if(Text_value.toUpperCase().includes(search_up_val)){
            all_product[i].style.display = 'flex';
           }
           else{
            all_product[i].style.display = 'none';
           }
        //set search close icon block || none display
        if(search_in_value.value != '' && search_in_value.value.length > 0){
            search_delete_reset_input.classList.replace('none','block'); 

         }else{
            search_delete_reset_input.classList.replace('block','none');
        }
    
       if(search_up_val.keycode == 13){
        console.log('search button enter pressed'); 
        }
        }
    }
    
}
