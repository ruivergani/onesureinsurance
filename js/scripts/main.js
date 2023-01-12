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

// Script for the Tab Navigation
const allFilters = document.querySelectorAll(".js-nav-product li a");
const tabPane = document.querySelectorAll(".text-content");
if (allFilters && tabPane) {
  // get the click of the nav for the tabs
  allFilters.forEach((filter, index) =>
    filter.addEventListener("click", (Event) => {
      Event.preventDefault();
      // remove active from all others
      allFilters.forEach((item) => {
        item.classList.remove("active");
      });
      tabPane.forEach((item) => {
        item.classList.remove("active");
      });
      // add active when click
      tabPane[index].classList.add("active"); // link the index from the nav to the tab
      filter.classList.add("active"); // add active to the nav buttons
    })
  );
}

// Script for the FAQs open
const question = document.querySelectorAll(".js-question"); // all cards question
if (question) {
  // Check if the question exists or not
  question.forEach(function (event) {
    event.addEventListener("click", () => {
      event.parentElement.classList.toggle("active");
    });
  });
}

// Script for Swipper Slide Logos
var swiper = new Swiper(".slide-logos", {
  slidesPerView: 1,
  spaceBetween: 32,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 60,
    },
    768: {
      slidesPerView: 2.3,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 90,
    },
  },
});
// Swiper Slide Products Page
var slide_product = new Swiper(".slide-product", {
  slidesPerView: 4,
  spaceBetween: 32,
  pagination: {
    el: ".s-slide-product .container .top .ctrl-slide .swiper-pagination",
    clickable: true,
  },
  // navigation section
  navigation: {
    nextEl: ".s-slide-product .top .btn-next",
    prevEl: ".s-slide-product .top .btn-prev",
  },
  // smooth pagination
  speed: 600,
  // responsive part of the slide
  breakpoints: {
    // mobile
    275: {
      slidesPerView: 1.1, // part of the other slide
      spaceBetween: 15,
    },
    // tablet
    320: {
      slidesPerView: 1.4,
      spaceBetween: 15,
    },
    480: {
      slidesPerView: 2.2,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 15,
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 32,
    },
  },
});

// Button Scroll Top
const btnScrollTop = document.getElementById("js-btn-scroll-top");
btnScrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Add class active to menu button
const menuButton = document.getElementById("js-menu-button");
menuButton.addEventListener("click", () => {
  menuButton.classList.toggle("is-active"); // add the CSS configuration on this button
  document.documentElement.classList.toggle("menu-opened");
});

// Menu Header Change >20 scroll
const header = document.getElementById("js-header");
function fixedMenu() {
  if (window.pageYOffset > 60) {
    header.classList.add("changeHeight");
  } else {
    header.classList.remove("changeHeight");
  }
}
document.addEventListener("scroll", fixedMenu);
