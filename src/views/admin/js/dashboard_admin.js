import { UseState,UseEffect } from "https://localhost/Shopy-net/src/views/js/UseState.js";


const openSidebar = () => {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
};
const closeSidebar = () => {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
};

// admin space users infos
function FetchUsers(){ axios.get('http://localhost/Shopy-net/src/views/admin/admin_api/admin_platform_api.php')
    .then((response) => {
      const search_ap = response.data;
      return response.data;  
    }).catch((error) => {
       console.log(error); 
});
}
const [State,FetchUser] = UseState(FetchUsers());

console.log(State()); 





