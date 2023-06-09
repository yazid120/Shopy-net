let payement_button = document.getElementById('payment_btn');
payement_button.addEventListener('click',payement);

function payement(event){
  event.preventDefault(); 
  console.log('pay the bill');
}