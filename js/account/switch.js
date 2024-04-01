const switchMode = () => {  
    const switchBtn = document.querySelectorAll('.switch-btn');
    const form = document.querySelectorAll(".form");
    form[0].classList.add('active');
    switchBtn.forEach( btn => {
        btn.addEventListener("click", ()=>{    
                const removeActive = btn.parentElement.parentElement.className;
                form.forEach(a=>{
                    if(a.className!=removeActive) a.classList.add('active');
                    else a.classList.remove('active');
                })
        })
    }
    )
}
switchMode();