const showMenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)
    
    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle','navbar')

const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))


// slider
let swiper = new Swiper('.swiper-container', {
  slidesPerView: 5.2,
  spaceBetween: 20,
  loop: true,
  breakpoints: {
   300: {
     slidesPerView: 2.8,
     spaceBetween: 10
   },
   400: {
     slidesPerView: 3.1,
     spaceBetween: 10
   },
   620: {
     slidesPerView: 3.3,
     spaceBetween: 20
   },
   770: {
     slidesPerView: 3.7,
     spaceBetween: 20
   },
   840: {
     slidesPerView: 4,
     spaceBetween: 20
   },
   1000: {
     slidesPerView: 4.4,
     spaceBetween: 20
   },
   1166: {
     slidesPerView: 5.2,
     spaceBetween: 30
   }
 }
});
// slider


