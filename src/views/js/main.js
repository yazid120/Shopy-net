let shop_head = document.getElementById('shop_cart_dir');
let Cart_box= document.getElementById('cart_box_side'); 
let Close_cartCont = document.getElementById('close_crt_vid'); 

//Close and Display cart functionality (event).
Close_cartCont.addEventListener('click', ()=>{
    Cart_box.style.display = 'none'; 
});
shop_head.addEventListener('click', ()=>{
    Cart_box.style.display = 'flex'; 
});


//Cart loading state 
if(document.readyState == 'loading'){
   document.addEventListener('DOMcontentloaded',ready);
}else{
    ready();
}

function ready(){
    let remove_cartItem_btn = document.getElementsByClassName('remove_article');

    for(let i=0; i<remove_cartItem_btn.length; i++){
        let button = remove_cartItem_btn[i];
        button.addEventListener('click',removeCart_item); 
    }

    //quantity update 
    let quantity_input = document.getElementsByClassName('quantity_article'); 
    console.log(quantity_input.value); 
    for(let j= 0; j<quantity_input.length; j++){
        var input = quantity_input[j];
        input.addEventListener('change',ChangeQte); 
    }
}

function removeCart_item(event){
    let removerButton = event.target; 
    removerButton.parentElement.parentElement.remove();
    UpdateCart_cont();
}

function ChangeQte(event){
  var input = event.target; 
  var input_Value = input.value;
  if(isNaN(input_Value) || input_Value <=0){
    input.value = 1; 
    alert('you can not submit a null numbre');
  }
  UpdateCart_cont(); 
}

function UpdateCart_cont(){
    let cart_detailSet = document.getElementsByClassName('details_box_cart')[0]; 
    let cart_boxes = cart_detailSet.getElementsByClassName('cart_box'); 
    let Total = 0; 

    let cart_prod = document.getElementsByClassName('cart_products_elements')[0];

    for(let i=0; i<cart_boxes.length; i++){
        var cart_box = cart_boxes[i];
        var article_price = cart_box.getElementsByClassName('article_price')[0];
        var quantity_product = cart_box.getElementsByClassName('quantity_article')[0];
        var price = parseFloat(article_price.innerHTML.replace('DA',''));

        var __qte = quantity_product.value; 
        Total = Total + (price * __qte);

        document.getElementsByClassName('article_price_total')[0].innerHTML = Total + 'DA'; 
    }
    return Total; 
}
console.log(UpdateCart_cont());