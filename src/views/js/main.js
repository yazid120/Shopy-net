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
        button.addEventListener('click',removeCart_item)
    }
}

function removeCart_item(event){
    let removerButton = event.target; 
    removerButton.parentElement.parentElement.remove();
}