// navbar becomes sticky and background of navbar become dark
$(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $(".navbar").addClass("back");
      } else {
        $(".navbar").removeClass("back");
      }
    });
  });
  
//disable preloader  
function preloader(){
  document.querySelector(".preloaderBox").style.display = "none";
}

setTimeout(function(){ document.querySelector(".preloaderBox").style.display = "none";}, 10000);

//toggle menu
function toggleMenu(){
    const btn = document.querySelector('.openBtn');
    const menu = document.querySelector('.navbar');
    menu.classList.toggle('active');
    btn.classList.toggle('active');
}


// function regPopup(){
//     const popUp = document.querySelector('.requestCall');
//     popUp.classList.toggle('active');
//     const regForm = document.querySelector('.login');
//     regForm.classList.toggle('active');
// }


//results swiper
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
    },
    loop: true,
});