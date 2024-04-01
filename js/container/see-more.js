const seeMoreProductHandle = () => {
    const seeMoreBtn = document.querySelector('.more-product-btn button');
    const hiddenProductLength = [...document.querySelectorAll('.new-product-list .product-item')].length;
    const hiddenProduct = document.querySelectorAll('.new-product-list .product-item');
    console.log(hiddenProductLength);
    let index = 8;
    for(let i=index;i<hiddenProductLength;i++){
        hiddenProduct[i].style.display='none';
    }
    seeMoreBtn.addEventListener("click", ()=>{
        for(let i=index;i<index+4;i++){
            hiddenProduct[i].style.display='block';
        }
        index+=4;
        console.log(index);
        if(index>=hiddenProductLength){
            seeMoreBtn.style.display='none';
        }
    })
}
seeMoreProductHandle();