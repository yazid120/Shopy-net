
// const UseState = require('../.././js/UseState'); 


const openSidebar = () => {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
};

const closeSidebar = () => {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
};
 
// admin space users infos

let api_user = axios.get('http://localhost/Shopy-net/src/views/admin/admin_api/admin_platform_api.php')
    .then((response) => {
      let search_ap = response.data; 
    }).catch((error) => {
       console.log(error); 
});
console.log(api_user); 

    


