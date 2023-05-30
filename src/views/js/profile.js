

let profile_Icon= document.getElementById('profile_icon');
let  profile_list_banner =  document.querySelector('.head_links_m'); 

profile_Icon.addEventListener('mouseover',()=>{
    profile_list_banner.style.display ='block'; 
});
profile_Icon.addEventListener('mouseout',()=>{
    profile_list_banner.style.display ='none'; 
});