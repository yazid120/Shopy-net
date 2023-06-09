

let profile_Icon= document.getElementById('profile_icon');
let  profile_list_banner =  document.getElementsByClassName('head_links_m'); 

profile_Icon.addEventListener('click',()=>{
    profile_list_banner.style.display ='block'; 
});
profile_list_banner.addEventListener('mouseout',()=>{
    setTimeout(()=>{
      profile_list_banner.style.display ='none';   
    }, 2000);
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
    </div>`;
}