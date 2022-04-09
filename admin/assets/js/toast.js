const getToast = document.querySelector(".toast-mes-container");
const closeToast = document.querySelector(".toast-close")
if(getToast.textContent!=''){
    setTimeout(() => {
        getToast.style.display ="none"
    }, 3000);
}
closeToast.onclick = () =>{
    getToast.style.display ="none"
}


