// import { json } from "express";
let shop_head = document.getElementById('shop_cart_dir');
let Cart_box= document.getElementById('cart_box_side'); 
let Close_cartCont = document.getElementById('close_crt_vid'); 

let strcart = localStorage.getItem('cart_storage');

// localStorage.removeItem('cart_storage'); 

if(localStorage.getItem('cart_storage')==null){
    localStorage.setItem('cart_storage',"[]");
}
// let expire = (24*60*60); 
    // console.log(Date.now()+expire*1000);
    // localStorage.setItem('cart_storage','Expiration',Date.now()+expire*1000)
function Set_expiredCart_storage(key){
 const storage_cart_str = localStorage.getItem(key); 
 if(!storage_cart){
    return null; 
 }
 let storage_cart = JSON.parse(storage_cart_str); 
 const current_time = new Date();
}



//Close and Display cart functionality (event).
Close_cartCont.addEventListener('click', ()=>{
    Cart_box.style.width = '0'; 
    Cart_box.style.padding = '0'; 
});
shop_head.addEventListener('click', ()=>{
    Cart_box.style.width = '30%'; 
});


//Cart loading state (all case)
if(document.readyState == 'loading'){
   document.addEventListener('DOMcontentloaded',ready);
}else{
    ready();
}

function setCart_items(product){
   localStorage.setItem('cart_storage',JSON.stringify(product)); 
}

function getCart_items(){
    return JSON.parse(localStorage.getItem('cart_storage')); 
}
function remove_stordItem(){
    localStorage.removeItem('cart_storage'); 
}

function lengthgetCart_items(){
    let Object_prod = getCart_items(); 
    return Object_prod.length;
}

function add_Basket(product){
  let basket = getCart_items(); 
  basket.push(product);
  setCart_items(basket);
}


function ready(){
    let remove_cartItem_btn = document.getElementsByClassName('remove_article');

    for(let i=0; i<remove_cartItem_btn.length; i++){
        let button = remove_cartItem_btn[i];
        button.addEventListener('click',removeCart_item); 
    }

    //quantity update 
    let quantity_input = document.getElementsByClassName('quantity_article');  
    for(let j=0; j<quantity_input.length; j++){
        var input = quantity_input[j];
        input.addEventListener('change',ChangeQte); 
    }

    //Add cart article (update cart)
    let addCart = document.getElementsByClassName('add_artCart_product');
    for(let i=0; i<addCart.length; i++){
        var button_add = addCart[i]; 
        button_add.addEventListener('click',Add_aricle_cart); 
    }

    //buy articles button 
    let buy_button = document.getElementsByClassName('buy_shops_btn')[0];
    buy_button.addEventListener('click',buy_itemsFunc); 
}

//buy Shops 
 function buy_itemsFunc(e){
    //verify session 3th part allow
    e.preventDefault();
    let cart_options = document.getElementsByClassName('cart_box'); 
    let cart_optionsSize = cart_options.length; 
    
  if(cart_optionsSize <= 0){
        alert('please select prducts before cheking'); 
    }
    else{
    axios.get('https://localhost/Shopy-net/src/views/action/session_api.php')
    .then(response =>{
        const user_session = response.data;
        console.log(response.data); 
        if(user_session == 'session user not logged'){
           //window.location.href = ('/login');
        }else{
            window.location.href = ('/checkout'); 
        }
    }).catch(
        error => console.log(error)
    );
   }
}

//remove item cart
function removeCart_item(event){
    let removerButton = event.target; 
    let c = removerButton.parentElement.parentElement.remove();
    let product_set_cart = getCart_items();
    for(let x=0; x<lengthgetCart_items; x++){

    }
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
   
   
   let Shoping_items = getCart_items(); 
   for(let i=0; i<lengthgetCart_items();i++){
    if(Shoping_items[i]['title_item'] == title_product){
        alert('product already selected');
        return;
    }else{
        Add_Product_toCart(Shoping_items[i]['title_item'],Shoping_items[i]['price'],Shoping_items[i]['image']);
    setTimeout(() => {
        history.go(0);
    }, 0);
    
    }
   }
   
   //Json cart item object
   for(let i=0 ; i<=title_product.length; i++){
   var Cart_Local = {
    title_item : title_product, 
    price : price_product, 
    image: image_product
   }
   }
   add_Basket(Cart_Local); 
   
   UpdateCart_cont();
}

// function Setproduct_cart(){
//     let product__ = localStorage.getItem(('cart_storage')); 
//     var product_ifos__= JSON.parse(product__); 
//     let length_product__ = JSON.parse(product__).length; 
//     for(let i=0; i<length_product__; i++){
//         Add_Product_toCart(product_ifos__[i]['image'],product_ifos__[i]['title_item'],product_ifos__[i]['price']);
//     }
// }

//part 02: insertion article to cart
function Add_Product_toCart(title, price, image){
    var Cart_box_Shop = document.createElement('div');
    Cart_box_Shop.classList.add('cart_box')
    let cart_items = document.getElementsByClassName('details_box_cart')[0]; 
    let items_title = cart_items.getElementsByClassName('article_name');

    let items_nameCart = localStorage.getItem('cart_storage'); 
    let array_items_nameCart = JSON.parse(items_nameCart);

let Cart_Shops = `
       <img src="${image}" style="width:25%" />
          <svg class="cursor-pointer list" xmlns="http://www.w3.org/2000/svg" 
          width="28" height="28" viewBox="0 0 24 24" 
            style="fill: #f54b4b;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 
           12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path>
        </svg>
        <div class="cart_products_elements">
          <div class="article_name">${title}</div>
          <div class="article_price">${price} </div>
          <!-- product quantity -->
          <input type="number" class="quantity_article" value="1" max="5"/>
        </div>
`; 


Cart_box_Shop.innerHTML = Cart_Shops;
cart_items.append(Cart_box_Shop)

Cart_box_Shop.getElementsByClassName('list')[0].
addEventListener('click',function remove_item(){
    let product_set_cart = getCart_items();
    Object.values(product_set_cart).map(item=>{
        console.log(product_set_cart); 
    })
}); 

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
        Total +=  (price * __qte);
        if(__qte == 0)
        Total = 0; 

        // update cart btn article number
        let cart_boxes_lenght = cart_boxes.length; 
        
        var Total_roud = Math.round(Total);
    
        document.getElementsByClassName('article_price_total')[0].innerHTML = Total + 'DA'; 
    }

    // return Total; 
    let cart_items_count_storage = localStorage.getItem('cart_storage');
    let  cart_StorageCount = JSON.parse(cart_items_count_storage).length;

    // if(cart_StorageCount == null){
    //     document.getElementById('article_cart_quantity').innerHTML = 0; 
    // }

}
