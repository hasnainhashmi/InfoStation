
setTimeout(()=>{
    const navigation = document.querySelector(".links");
    let menu = document.querySelector(".menu");
    
    menu.addEventListener("click", () => {
      navigation.style.setProperty("--childenNumber", navigation.children.length);
    
      navigation.classList.toggle("active");
      menu.classList.toggle("active");
    });


},1000)









window.addEventListener('scroll',function() {      
    let scroll = this.scrollY;
    console.log(this.scrollY);
    if (scroll > 0) {
        document.querySelector("header").classList.add("shadow-active");
    }
    else {
        document.querySelector("header").classList.remove("shadow-active");
    }
});


