const bodyCartHandle = () => {
    const cartBtn = document.querySelector(".cart-btn");
    const cartActive = document.querySelector(".body-cart-wrapper");
    const cartCloseBtn = document.querySelector('.right-bdc-header')
    const cartPopUp = document.querySelector('.body-cart')
    const emptySpaceFocusOut = document.querySelector(".empty-space");
    const openCart = () => {
       cartBtn.addEventListener("click", ()=>{  
        cartActive.classList.add("active-cart");
        cartPopUp.classList.remove("close-down-cart");
        cartPopUp.classList.add("open-up-cart");
    }) 
    } 
    const closeCart = () => {
       cartCloseBtn.addEventListener("click", ()=>{ 
        cartPopUp.classList.add("close-down-cart");
        cartActive.classList.remove("active-cart");
        cartPopUp.classList.remove("open-up-cart"); 
    }) 
    }
    
   const focusOutCard = () =>{
    emptySpaceFocusOut.addEventListener("click", ()=>{
        cartPopUp.classList.add("close-down-cart");
        cartActive.classList.remove("active-cart");
        cartPopUp.classList.remove("open-up-cart"); 
    })
   } 
   openCart();
   closeCart();
   focusOutCard();
}
bodyCartHandle();
