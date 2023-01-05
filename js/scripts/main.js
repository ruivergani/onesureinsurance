// Hover Buttons
// const btnOutline = document.getElementById('btn-outline');
// const refreshImage = document.getElementById('refresh');
// btnOutline.addEventListener('mouseover', () => {
//         refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-red.svg');
// });
// btnOutline.addEventListener('mouseleave', () => {
//     refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-btn.svg');
// });

// Configure the modal
// const btnOpenModal = document.querySelector('.js-open-modal'); 
// const btnCloseModal = document.querySelector('.js-close');

// btnOpenModal.addEventListener('click', (Event) => {
//   Event.preventDefault();
//   let html = document.documentElement;
//    // add the class to the html (not to the specific element)
//    html.classList.add('show-modal'); // selecting 
// })

// btnCloseModal.addEventListener('click', (Event) => {
//   Event.preventDefault();
//   let html = document.documentElement;
//    // add the class to the html (not to the specific element)
//    html.classList.remove('show-modal'); // selecting 
// })

// Script for Swipper Slide
var swiper = new Swiper(".slide-logos", {
  slidesPerView: 3,
  spaceBetween: 32,
  pagination: {
    el: ".s-card-depoimentos .container .top .swiper-pagination",
    clickable: true,
  },
  breakpoints:{
    320 : {
        slidesPerView: 1.3,
        spaceBetween: 16,
    },
    600: {
      slidesPerView: 2.3,
      spaceBetween: 15,
    },
    1200: {
        slidesPerView: 3,
        spaceBetween: 32,
    }
  }
});

// Button Scroll Top
const btnScrollTop = document.getElementById("js-btn-scroll-top");
btnScrollTop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

// Add class active to menu button
const menuButton = document.getElementById('js-menu-button');
menuButton.addEventListener('click', () => {
  menuButton.classList.toggle('is-active'); // add the CSS configuration on this button
  document.documentElement.classList.toggle('menu-opened');
});

// Menu Header Change >20 scroll
const header = document.getElementById('js-header')
function fixedMenu () {
    if(window.pageYOffset > 60) {
        header.classList.add('changeHeight');
    } else {
        header.classList.remove('changeHeight');
    }
}
document.addEventListener('scroll', fixedMenu);

