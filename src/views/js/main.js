let shop_head = document.getElementById('shop_cart_dir');
let Cart_box= document.getElementById('cart_box_side'); 
let Close_cartCont = document.getElementById('close_crt_vid'); 
//let Cart_shop_box = document.querySelector('.details_box_cart'); 

//Close and Display cart functionality (event).
Close_cartCont.addEventListener('click', ()=>{
    Cart_box.style.display = 'none'; 
});
shop_head.addEventListener('click', ()=>{
    Cart_box.style.display = 'flex'; 
});


//Cart loading state (all case)
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
    for(let j= 0; j<quantity_input.length; j++){
        var input = quantity_input[j];
        input.addEventListener('change',ChangeQte); 
    }

    //Add cart article (update cart)
    let addCart = document.getElementsByClassName('add_artCart_product');
    for(let i=0; i<addCart.length; i++){
        var button_add = addCart[i]; 
        button_add.addEventListener('click',Add_aricle_cart); 
    }
}

//remove item cart
function removeCart_item(event){
    let removerButton = event.target; 
    removerButton.parentElement.parentElement.remove();
    UpdateCart_cont();
}

//change quatity of an article
function ChangeQte(event){
  var input = event.target; 
  var input_Value = input.value;
  if(isNaN(input_Value) || input_Value <=0){
    input.value = 1; 
    alert('you can not submit a null numbre');
  }
  UpdateCart_cont(); 
}

//add article to cart
function Add_aricle_cart(event){
   let button_Add = event.target; 
   let Shop_product = button_Add.parentElement; 
    
   // added cart article infos
   let title_product = Shop_product.getElementsByClassName('title_product')[0].innerText; 
   let price_product = Shop_product.getElementsByClassName('price_unity_product')[0].innerText; 
   let image_product = Shop_product.getElementsByClassName('product_image')[0].src; 
   Add_Product_toCart(title_product,price_product,image_product); 
   UpdateCart_cont();
}

//part 02: insertion article to cart
function Add_Product_toCart(title, price, image){
    var Cart_box_Shop = document.createElement('div');
    Cart_box_Shop.classList.add('cart_box')
    let cart_items = document.getElementsByClassName('details_box_cart')[0]; 
    let items_title = cart_items.getElementsByClassName('article_name');
    
    console.log(items_title.length); 

    for(let i=0; i<items_title.length; i++){
     if(items_title[i].innerText == title){
        alert('alert 123');
       return; 
     }
    }


let Cart_Shops = `
     <img src="http://localhost/Shopy-net/src/views/images/Ps4_Pro.jpg" style="width:25%"  />
      
          <svg class="remove_article" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" 
            ><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 
        12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>

        <div class="cart_products_elements">
          <div class="article_name">article name</div>
          <div class="article_price">32000 DA</div>
          <!-- product quantity -->
          <input type="number" class="quantity_article" value="1" id=""/>
        </div>
`; 

Cart_box_Shop.innerHTML = Cart_Shops;
cart_items.append(Cart_box_Shop)

Cart_box_Shop.getElementsByClassName('remove_article')[0].
addEventListener('click',removeCart_item); 

Cart_box_Shop.getElementsByClassName('quantity_article')[0].
addEventListener('change',ChangeQte); 
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

        var Total_roud = Math.round(Total);

        document.getElementsByClassName('article_price_total')[0].innerHTML = Total + 'DA'; 
    }
    return Total; 
}
//console.log(UpdateCart_cont());