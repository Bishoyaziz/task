var modal = document.getElementById('checkout-modal');
var closeBtn = document.getElementsByClassName('close')[0];
var body = document.getElementsByTagName('body')[0];

function showModal() {  
    modal.style.display = 'block';
    if(modal) {
        modal.classList.add('close-modal');        
    }
};

closeBtn.onclick = function(){
    modal.style.display = 'none';
};


// document.body.addEventListener("click", function() {
//     if (modal == true) {
//         modal.classList.add('close-modal');
//     }
// });