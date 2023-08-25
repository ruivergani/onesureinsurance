// Configure Claim modal
const btnOpenModalListClaims = document.querySelectorAll('.js-open-claim-modal');
const btnCloseModalClaims = document.querySelectorAll('.js-close-claim');
if (btnOpenModalListClaims.length > 0) {
  btnOpenModalListClaims.forEach((btnOpenModalClaim) => {
    btnOpenModalClaim.addEventListener('click', (event) => {
      event.preventDefault();
      //It retrieves the value of the 'data-modalTarget' attribute from the clicked element using btnOpenModalClaim.dataset.modalTarget and stores it in the modalId variable. This attribute is expected to contain a valid selector for the modal window.
      let modalId = btnOpenModalClaim.dataset.modalTarget;
      let modal = document.querySelector(modalId);
      //It then uses document.querySelector to find the modal element based on the modalId selector. If a modal element is found, it adds the 'show-modal-claim' class to it. This class is likely used to control the visibility of the modal window.
      if (modal) {
        modal.classList.add('show-modal-claim');
      }
    });
  });
}
if (btnCloseModalClaims.length > 0) {
  btnCloseModalClaims.forEach((btnCloseModal) => {
    btnCloseModal.addEventListener('click', (event) => {
      event.preventDefault();
      let modal = btnCloseModal.closest('.modal-claim');
      if (modal) {
        modal.classList.remove('show-modal-claim');
      }
    });
  });
}
// Configure the modal
const btnOpenModalList = document.querySelectorAll('.js-open-modal');
const btnCloseModal = document.querySelector('.js-close');
if (btnOpenModalList.length > 0) {
  btnOpenModalList.forEach((btnOpenModal) => {
    btnOpenModal.addEventListener('click', (event) => {
      event.preventDefault();
      let html = document.body;
      html.classList.remove('show-modal-insurance');
      html.classList.add('show-modal');
    });
  });
}
if (btnCloseModal) {
  btnCloseModal.addEventListener('click', (event) => {
    event.preventDefault();
    let html = document.body;
    html.classList.remove('show-modal');
  });
}
// Configure modal list of insurance
const btnOpenModalInsuranceList = document.querySelectorAll('.js-open-modal-insurance');
const btnCloseModalInsurance = document.querySelector('.js-close-insurance');
if(btnOpenModalInsuranceList.length > 0){
  btnOpenModalInsuranceList.forEach((btnOpenModalInsurance) => {
    btnOpenModalInsurance.addEventListener('click', (event) => {
      event.preventDefault();
      let html = document.body;
       // add the class to the html (not to the specific element)
       html.classList.add('show-modal-insurance'); // selecting
    });
  });
}
if (btnCloseModalInsurance){
  btnCloseModalInsurance.addEventListener('click', (Event) => {
    Event.preventDefault();
    let html = document.body;
     // add the class to the html (not to the specific element)
     html.classList.remove('show-modal-insurance'); // selecting
  })
}
// Configure the modal Support
const btnOpenModalSupport = document.querySelector('.js-open-modal-support');
const btnCloseModalSupport = document.querySelector('.js-close-support');
if(btnOpenModalSupport){
  btnOpenModalSupport.addEventListener('click', (Event) => {
    Event.preventDefault();
    let html = document.documentElement;
     // add the class to the html (not to the specific element)
     html.classList.add('show-modal-support'); // selecting
  })
}
if (btnCloseModalSupport){
  btnCloseModalSupport.addEventListener('click', (Event) => {
    Event.preventDefault();
    let html = document.documentElement;
     // add the class to the html (not to the specific element)
     html.classList.remove('show-modal-support'); // selecting
  })
}
// Script for the mobile sub menu
const btnMobileSubMenu = document.querySelectorAll('.js-mobile-menu-item');
const subMenuDropdownArea = document.querySelectorAll('.js-menu-dropdown-mobile');
// Check if 'btnMobileSubMenu' elements exist
if (btnMobileSubMenu) {
  // Iterate over each 'btnMobileSubMenu' element (tag a)
  btnMobileSubMenu.forEach((btn, index) => {
    // Add a click event listener to each 'btnMobileSubMenu' element
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      // Remove 'active' class from all 'btnMobileSubMenu' elements except the current one
      btnMobileSubMenu.forEach(itemBtn => {
        if (itemBtn !== btn) {
          itemBtn.classList.remove('active');
        }
      });
      // Remove 'active' class from all 'subMenuDropdownArea' elements except the corresponding one
      subMenuDropdownArea.forEach((dropdown, dropdownIndex) => {
        if (dropdownIndex !== index) {
          dropdown.classList.remove('active');
        }
      });
      // Toggle 'active' class on the current 'btnMobileSubMenu' element
      btn.classList.toggle('active');
      // Toggle 'active' class on the corresponding 'subMenuDropdownArea' element
      subMenuDropdownArea[index].classList.toggle('active');
    });
  });
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
// Script for the FAQs open main page
const question02 = document.querySelectorAll(".js-accordion-plus-item"); // all cards question
// Check if the question exists or not
if(question02){
  question02.forEach(function (event) {
    event.addEventListener("click", () => {
      event.classList.toggle("active");
    });
  });
}
// Script for Table of Contents
const itemContent = document.querySelectorAll('.js-nav-product li'); // all items from table content
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
// Script for the Topics Navigation Mobile Version
const listTopicsFaqMobile = document.querySelector('.js-dropdown-select');
const topicsFaqMobile = document.querySelectorAll('.s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2');
if(listTopicsFaqMobile){
  topicsFaqMobile.forEach(topic => {
    let listElementFaqMobile = document.createElement('li');
    listTopicsFaqMobile.appendChild(listElementFaqMobile);

    let ancorTopicFaqMobile = document.createElement('a');
    ancorTopicFaqMobile.setAttribute('href', '#');
    listElementFaqMobile.appendChild(ancorTopicFaqMobile);

    let textTopicFaqMobile = document.createElement('p');
    textTopicFaqMobile.textContent = topic.textContent;
    ancorTopicFaqMobile.appendChild(textTopicFaqMobile);
  });
  const allTopicsFaqMobile = document.querySelectorAll('.js-dropdown-select li a');
  allTopicsFaqMobile[0].classList.add('active');
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
      const topicsFaq = document.querySelectorAll('.s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2')[position];
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: offset(topicsFaq).top - 130
      })
    }
  }
  // Map and make the event click in the topics to scroll based on layout
  allTopicsFaqMobile.forEach((item, index) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      allTopicsFaqMobile.forEach(all => {
        all.classList.remove('active');
      })
      item.classList.add('active');
      handleScrollTop(index);
    })
  })
}

// Script for the Topics Navigation
const listTopicsFaq = document.querySelector('.js-nav-faq-post');
const topicsFaq = document.querySelectorAll('.s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2');
if(listTopicsFaq){
  topicsFaq.forEach(topic => {
    let listElementFaq = document.createElement('li');
    listTopicsFaq.appendChild(listElementFaq);

    let ancorTopicFaq = document.createElement('a');
    ancorTopicFaq.setAttribute('href', '#');
    listElementFaq.appendChild(ancorTopicFaq);

    let textTopicFaq = document.createElement('p');
    textTopicFaq.textContent = topic.textContent;
    ancorTopicFaq.appendChild(textTopicFaq);
  });
  const allTopicsFaq = document.querySelectorAll('.js-nav-faq-post li a');
  allTopicsFaq[0].classList.add('active');
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
      const topicsFaq = document.querySelectorAll('.s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2')[position];
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: offset(topicsFaq).top - 130
      })
    }
  }
  // Map and make the event click in the topics to scroll based on layout
  allTopicsFaq.forEach((item, index) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      allTopicsFaq.forEach(all => {
        all.classList.remove('active');
      })
      item.classList.add('active');
      handleScrollTop(index);
    })
  })
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
// Script for the Topics Navigation Template Text
const listTopics2 = document.querySelector('.js-nav-template-text');
const topics2 = document.querySelectorAll('.s-page-text .container .left-page-text .content-post h2');
if(listTopics2){
  topics2.forEach(topic => {
    let listElement2 = document.createElement('li');
    listTopics2.appendChild(listElement2);

    let ancorTopic2 = document.createElement('a');
    ancorTopic2.setAttribute('href', '#');
    listElement2.appendChild(ancorTopic2);

    let textTopic2 = document.createElement('span');
    ancorTopic2.textContent = topic.textContent;
    ancorTopic2.appendChild(textTopic2);
  });
  const allTopics2 = document.querySelectorAll('.js-nav-template-text li a');
  allTopics2[0].classList.add('active');
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
      const topics2 = document.querySelectorAll('.s-page-text .container .left-page-text .content-post h2')[position];
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: offset(topics2).top - 110
      })
    }
  }
  // Map and make the event click in the topics to scroll based on layout
  allTopics2.forEach((item, index) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();
      allTopics2.forEach(all => {
        all.classList.remove('active');
      })
      item.classList.add('active');
      handleScrollTop(index);
    })
  })
}
// Script for Swipper Slide Logos
var swiper = new Swiper(".slide-logos", {
  slidesPerView: 'auto',
  spaceBetween: 32,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
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
if((MenuDropdown.length > 0) && (btnMenu)){
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
  });
}
// Configure tab navigation based on scroll
const navLi = document.querySelectorAll('.js-nav-product li a');
const sections = document.querySelectorAll('section');
if (navLi.length && sections.length) {
  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      let sectionTop = section.offsetTop;
      if (window.pageYOffset >= sectionTop - 160) {
        current = section.getAttribute('id');
      }
    });
    navLi.forEach(li => {
      li.classList.remove('active');
      const currentLink = document.querySelector('.js-nav-product li a[href*="' + current + '"]');
      if (currentLink) {
        currentLink.classList.add('active');
        //window.location.hash = current;
      }
    });
  });
  // Add click event listeners to the navigation links
  navLi.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent default navigation behavior
      let targetId = link.getAttribute('href').substring(1); // Get the target section ID
      let targetSection = document.getElementById(targetId); // Get the target section element

      if (targetSection) {
        let targetOffset = targetSection.offsetTop; // Get the target section's top offset
        window.scrollTo({
          top: targetOffset - 160,
          behavior: 'smooth' // Enable smooth scrolling
        });
      }
    });
  });
}
// Script for the mobile tab navigation
const btnDropdownSelect = document.querySelector('.js-open-select-custom');
const dropdownArea = document.querySelector('.select-custom');
const navMobileLink = document.querySelectorAll('.dropdown-select li');
if(btnDropdownSelect){
  btnDropdownSelect.addEventListener('click', () => {
    dropdownArea.classList.toggle('active');
  });
 navMobileLink.forEach((item, index) => {
  item.addEventListener('click', (event) => {
    navMobileLink.forEach(all => {
      all.classList.remove('active');
      dropdownArea.classList.remove('active');
    })
    item.classList.add('active');
  })
 })
}