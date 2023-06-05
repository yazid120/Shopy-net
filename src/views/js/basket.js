document.addEventListener('DOMcontentloaded',Sett_cartInfos()); 

function Display_basketPay(image,title,price){
    let wrapp_type = document.createElement('div'); 
    wrapp_type.classList.add('item_num_list'); 
    let wrapp_prod_pay = document.getElementsByClassName('items_product_container')[0];

    let list_cart_infos = `
    <img src="${image}" style="width:20%" />
        <div class="cart_products_elements_pay">
          <div class="article_name_pay font-semibold">${title}</div>
          <div class="article_price_pay">${price} </div>
          <!-- product quantity -->
          <input type="number" class="quantity_article_pay" value="1" max="5"/>
    </div>
    <button class="delete_item p-2 bg-red-600 rounded">Delete item</button>
    `;

    wrapp_type.innerHTML = list_cart_infos; 
    wrapp_prod_pay.append(wrapp_type); 
}

function Sett_cartInfos(){
    let product__ = localStorage.getItem(('cart_storage')); 
    var product_ifos__= JSON.parse(product__); 
    let length_product__ = JSON.parse(product__).length; 
    for(let i=0; i<length_product__; i++){
    Display_basketPay(product_ifos__[i]['image'],product_ifos__[i]['title_item'],product_ifos__[i]['price']);
    }
}

function get_bascket(){
    let product__ = localStorage.getItem(('cart_storage')); 
    let basket_store = JSON.parse(product__); 
    return basket_store; 
}

function deleteCart_Item(event){
   let removerButton = event.target; 
   console.log(removerButton); 
}
document.getElementsByClassName('delete_item')[0].addEventListener('click',deleteCart_Item); 

  
