document.addEventListener('DOMcontentloaded',Sett_cartInfos()); 

function Display_basketPay(image,title,price){
    let wrapp_type = document.createElement('div'); 
    wrapp_type.classList.add('item_num_list'); 
    let wrapp_prod_pay = document.getElementsByClassName('items_product_container')[0];

    let list_cart_infos = `
    <div class="item_cart_shop" data-title_item="${title}">
    <img src="${image}" style="width:20%" />
        <div class="cart_products_elements_pay">
          <div class="article_name_pay font-semibold">${title}</div>
          <div class="article_price_pay">${price} </div>
          <!-- product quantity -->
          <input type="number" class="quantity_article_pay" value="1" max="5"/>
    </div>
    <button class="delete_item p-2 bg-red-600 rounded">Delete item</button>
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
    deleteCart_Item();
}

function get_bascket(){
    let product__ = localStorage.getItem(('cart_storage')); 
    let basket_store = JSON.parse(product__); 
    return basket_store; 
}



function deleteCart_Item(){
  let deleteButton = document.querySelectorAll('.delete_item');
  let localStorageProducts = localStorage.getItem('cart_storage');

  for (let i = 0; i < deleteButton.length; i++) {
  // Get all remove buttons
  let buttons_delete = deleteButton[i];
  // Link to his parent
  let myData = deleteButton[i].closest('.item_cart_shop');
  let getStorageProducts = JSON.parse(localStorageProducts);

  buttons_delete.addEventListener("click",() =>
{
      getStorageProducts.forEach(localStorageProducts =>{
            if(localStorageProducts.title_item !== myData.dataset.title_item){
                // Delete the product
                myData.remove();
                localStorage.setItem('cart_storage',(JSON.stringify([localStorageProducts])));      
            }
                  
      })
})
}
}
