

let profile_Icon= document.getElementById('profile_icon');
let  profile_list_banner =  document.querySelector('.head_links_m'); 

profile_Icon.addEventListener('mouseover',()=>{
    profile_list_banner.style.display ='block'; 
});
profile_Icon.addEventListener('mouseout',()=>{
    profile_list_banner.style.display ='none'; 
});


function Display_Profile_Cart(){
    let profile_cart = `
    <div class="head_links_m absolute bg-white rounded hidden">
               <ul class="list_box p-2">
                <li>profile</li>
                <li>settings</li>
                <li>products</li>
                <li>about</li>
               </ul>
    /div>`;
}