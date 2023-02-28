// Configure the modal
const btnOpenModal = document.querySelector('.js-open-modal');
const btnCloseModal = document.querySelector('.js-close');

if(btnOpenModal){
  btnOpenModal.addEventListener('click', (Event) => {
    Event.preventDefault();
    let html = document.documentElement;
     // add the class to the html (not to the specific element)
     html.classList.add('show-modal'); // selecting
  })
}
if (btnCloseModal){
  btnCloseModal.addEventListener('click', (Event) => {
    Event.preventDefault();
    let html = document.documentElement;
     // add the class to the html (not to the specific element)
     html.classList.remove('show-modal'); // selecting
  })
}

// Script for the Mobile Button
const btnDropdownSelect = document.querySelector('.js-open-select-custom');
const dropdownArea = document.querySelector('.select-custom');
if(btnDropdownSelect){
  btnDropdownSelect.addEventListener('click', () => {
    dropdownArea.classList.toggle('active');
  });
}

// Script for the mobile sub menu
const btnMobileSubMenu = document.querySelectorAll('.js-mobile-menu-item');
const subMenuDropdownArea = document.querySelectorAll('.js-menu-dropdown-mobile');
// link which menu dropdown you need to click
if(btnMobileSubMenu){
  btnMobileSubMenu.forEach((btn, index) => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      // Remove the class active from all
      btnMobileSubMenu.forEach(itemBtn => {
        itemBtn.classList.remove('active');
      })
      // Put active class to one sub menu
      btn.classList.toggle('active');
      // Add active
      subMenuDropdownArea[index].classList.toggle('active');
    })
  })
}

// Script for the mobile sub menu level 2
const btnMobileSubMenuLevel2 = document.querySelectorAll('.js-mobile-sub-item-menu');
const subMenuDropdownAreaLevel2 = document.querySelectorAll('.js-sub-area-level2');
if(btnMobileSubMenuLevel2){
  btnMobileSubMenuLevel2.forEach((btn, index) => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      // Remove the class active from all
      btnMobileSubMenuLevel2.forEach(itemBtn => {
        itemBtn.classList.remove('active');
      })
      // Put active class to one sub menu
      btn.classList.toggle('active');
      // Add active class
      subMenuDropdownAreaLevel2[index].classList.toggle('active');
    })
  })
}

// Script for the FAQs open
const question = document.querySelectorAll(".js-question"); // all cards question
// Check if the question exists or not
if(question){
  question.forEach(function (event) {
    event.addEventListener("click", () => {
      event.parentElement.classList.toggle("active");
    });
  });
}

// Script for Table of Contents
const itemContent = document.querySelectorAll('.js-nav-product li a'); // all items from table content
if(itemContent){
  itemContent.forEach(function (event) {
    event.addEventListener("click", () => {
      // remove active from all others
      itemContent.forEach(item => {
        item.classList.remove("active");
      })
      // add active when click
      event.classList.add("active");
    });
  });
}

// Script for the Topics Navigation
const listTopics = document.querySelector('.js-nav-blog-post');
const topics = document.querySelectorAll('.info-post-general .container .info-post-bottom .left-content .content-post h2');
if(listTopics){
  topics.forEach(topic => {
    let listElement = document.createElement('li');
    listTopics.appendChild(listElement);

    let ancorTopic = document.createElement('a');
    ancorTopic.setAttribute('href', '#');
    listElement.appendChild(ancorTopic);

    let textTopic = document.createElement('span');
    ancorTopic.textContent = topic.textContent;
    ancorTopic.appendChild(textTopic);
  });
  const allTopics = document.querySelectorAll('.js-nav-blog-post li a');
  allTopics[0].classList.add('active');

  // Function to return the element position
  function offset(el) {
    if (document) {
      const rect = el.getBoundingClientRect()
      const scrollLeft =
        window.pageXOffset || document.documentElement.scrollLeft
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }
  }

  // Function to scroll until the position H2
  function handleScrollTop(position) {
    if(document) {
      const topics = document.querySelectorAll('.info-post-general .container .info-post-bottom .left-content .content-post h2')[position];
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: offset(topics).top - 110
      })
    }
  }

  // Map and make the event click in the topics to scroll based on layout
  allTopics.forEach((item, index) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      allTopics.forEach(all => {
        all.classList.remove('active');
      })
      item.classList.add('active');
      handleScrollTop(index);
    })
  })
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
// Swiper Slide Van Page
var slide_product = new Swiper(".slide-van", {
  slidesPerView: 4,
  spaceBetween: 32,
  pagination: {
    el: ".s-slide-van .container .top .ctrl-slide .swiper-pagination",
    clickable: true,
  },
  // navigation section
  navigation: {
    nextEl: ".s-slide-van .top .btn-next",
    prevEl: ".s-slide-van .top .btn-prev",
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
// Swiper Slide About Us
var slide_product = new Swiper(".slide-about", {
  slidesPerView: 5,
  spaceBetween: 20,
  pagination: {
    el: ".s-slide-about .container .top .ctrl-slide .swiper-pagination",
    clickable: true,
  },
  // navigation section
  navigation: {
    nextEl: ".s-slide-about .top .btn-next",
    prevEl: ".s-slide-about .top .btn-prev",
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
      slidesPerView: 2,
      spaceBetween: 15,
    },
    480: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 15,
    },
    991: {
      slidesPerView: 5,
      spaceBetween: 15,
    },
    1200: {
      slidesPerView: 5,
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
  document.body.classList.toggle('fixed-position');
});

// Menu Header Change >20 scroll
const header = document.getElementById("js-header");
function fixedMenu() {
  if (window.pageYOffset > 50) {
    header.classList.add("changeHeight");
  } else {
    header.classList.remove("changeHeight");
  }
}
document.addEventListener("scroll", fixedMenu);

// Sub Menu Configuration
const btnMenu = document.querySelectorAll('.js-btn-menu');
const MenuDropdown = document.querySelectorAll('.js-menu');

// link which menu dropdown you need to click
btnMenu.forEach((btn, index) => {
  btn.addEventListener('mouseenter', (event) => {
    event.preventDefault(); // negar o comportamento da tag A
    // remove from all the active
    MenuDropdown.forEach(itemMenu => {
      itemMenu.classList.remove('active');
      // if the user leave mouse from the menu section => close the event
      itemMenu.addEventListener('mouseleave', () => {
        itemMenu.classList.remove('active');
        btnMenu.forEach(itemBtn => {
          itemBtn.classList.remove('active');
        })
      })
    })
    // remove the class active from all
    btnMenu.forEach(itemBtn => {
      itemBtn.classList.remove('active');
    })
    // put active class to one menu
    btn.classList.add('active');
    // add active
    MenuDropdown[index].classList.add('active');
  })
})
