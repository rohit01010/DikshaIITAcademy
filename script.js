// navbar becomes sticky and background of navbar become dark
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
      $(".navbar").addClass("back");
    } else {
      $(".navbar").removeClass("back");
    }
  });
});

//Slideshow......
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

setInterval(() => {
  showSlides((slideIndex += 1));
}, 3000);

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Get the root element
// var r = document.querySelector(":root");

// // Create a function for getting a variable value
// function myFunction_get(prop) {
//   // Get the styles (properties and values) for the root
//   var rs = getComputedStyle(r);
//   // Alert the value of the --blue variable
//   return rs.getPropertyValue(prop);
// }

// const sliderContainer = document.querySelector(".slideshow-container");

// var slides = document.querySelectorAll(".mySlides");
// var containerWidth = slides.length;

// // Create a function for setting a variable value
// window.addEventListener(onload, function myFunction_set() {
//   // Set the value of variable --blue to another value (in this case "lightblue")
//   r.style.setProperty("--galleryConWid", containerWidth * 640 + "px");
// });

// var screenPos = 0;

// //slideshow change screen
// setInterval(function changeScreen() {
//   screenPos -= 640;
//   if (screenPos == containerWidth * 640 * -1) {
//     screenPos = 0;
//   }
//   sliderContainer.style.left = screenPos + "px";
// }, 2000);

//disable preloader
function preloader() {
  document.querySelector(".preloaderBox").style.display = "none";
}

setTimeout(function () {
  document.querySelector(".preloaderBox").style.display = "none";
}, 10000);

//toggle menu
function toggleMenu() {
  const btn = document.querySelector(".openBtn");
  const menu = document.querySelector(".navbar");
  menu.classList.toggle("active");
  btn.classList.toggle("active");
}

// function regPopup(){
//     const popUp = document.querySelector('.requestCall');
//     popUp.classList.toggle('active');
//     const regForm = document.querySelector('.login');
//     regForm.classList.toggle('active');
// }

//results swiper
var swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: true,
  },
  loop: true,
});

//scroll reveal animation
// const sr = ScrollReveal({
//   origin: "top",
//   distance: "80px",
//   duration: 1000,
//   reset: true,
// });
const sr = ScrollReveal();

sr.reveal(".contentInHome", {
  origin: "left",
  distance: "180px",
  duration: 1000,
  reset: true,
});
sr.reveal(".about", {});
sr.reveal(".testimonialContent", {});
sr.reveal(".contact", {});
sr.reveal(".revealit", {});
