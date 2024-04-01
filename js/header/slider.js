const sliderHandle = () => {
    const slider = document.querySelector(".slider");
const firstBanner = document.querySelectorAll(".slider-banner")[0];
let firstBannerWidth = firstBanner.offsetWidth;
const slideButton = document.querySelectorAll(".slider-btn div");
const sliderImg = document.querySelectorAll(".right-banner")
const sliderTitle = document.querySelectorAll(".left-banner")
const autoScroll = () => setInterval(()=>{
    slider.scrollLeft<3038 ? slider.scrollLeft +=firstBannerWidth : slider.scrollLeft=1;  
    sliderImg.forEach((imgs) => {imgs.classList.remove('active');})
    sliderTitle.forEach((titles) => {titles.classList.remove('active');});
},3000);
autoScroll();
slideButton.forEach(icons => {
    icons.addEventListener("click", ()=>{
        if(slider.scrollLeft<3038){
            slider.scrollLeft += icons.className == "prev-btn" ?-firstBannerWidth : firstBannerWidth;    
        } else slider.scrollLeft=0;  
    })
})
sliderTitle.forEach((titles) => {
    slider.addEventListener("scroll", ()=>{
        titles.classList.add('active');
        slideButton.forEach(icons => {
            icons.addEventListener("click", ()=>{
                titles.classList.remove('active');
            })})
})
})
sliderImg.forEach((imgs) => {
    slider.addEventListener("scroll", ()=>{
        imgs.classList.add('active');
        slideButton.forEach(icons => {
            icons.addEventListener("click", ()=>{ 
                imgs.classList.remove('active');
            })})
})
})
}
const slider = document.querySelector(".slider");
const firstBanner = document.querySelectorAll(".slider-banner")[0];
let firstBannerWidth = firstBanner.offsetWidth;
const slideButton = document.querySelectorAll(".slider-btn div");
const sliderImg = document.querySelectorAll(".right-banner")
const sliderTitle = document.querySelectorAll(".left-banner")
const autoScroll = () => setInterval(()=>{
    slider.scrollLeft<3038 ? slider.scrollLeft +=firstBannerWidth : slider.scrollLeft=1;  
    sliderImg.forEach((imgs) => {imgs.classList.remove('active');})
    sliderTitle.forEach((titles) => {titles.classList.remove('active');});
},3000);
autoScroll();
slideButton.forEach(icons => {
    icons.addEventListener("click", ()=>{
        if(slider.scrollLeft<3038){
            slider.scrollLeft += icons.className == "prev-btn" ?-firstBannerWidth : firstBannerWidth;    
        } else slider.scrollLeft=0;  
    })
})
sliderTitle.forEach((titles) => {
    slider.addEventListener("scroll", ()=>{
        titles.classList.add('active');
        slideButton.forEach(icons => {
            icons.addEventListener("click", ()=>{
                titles.classList.remove('active');
            })})
})
})
sliderImg.forEach((imgs) => {
    slider.addEventListener("scroll", ()=>{
        imgs.classList.add('active');
        slideButton.forEach(icons => {
            icons.addEventListener("click", ()=>{ 
                imgs.classList.remove('active');
            })})
})
})
sliderHandle();
