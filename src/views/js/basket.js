document.addEventListener('DOMcontentloaded',Sett_cartInfos()); 

function Display_basketPay(image,title,price){
    let wrapp_type = document.createElement('div'); 
    wrapp_type.classList.add('item_num_list'); 
    let wrapp_prod_pay = document.getElementsByClassName('items_product_container')[0];

    let list_cart_infos = `
    <img src="${image}" style="width:25%" />

        <div class="cart_products_elements_pay">
          <div class="article_name_pay">${title}</div>
          <div class="article_price_pay">${price} </div>
          <!-- product quantity -->
          <input type="number" class="quantity_article_pay" value="1" max="5"/>
    </div>
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


