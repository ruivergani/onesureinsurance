"use strict";var offset,handleScrollTop,allTopicsFaqMobile,_offset,_handleScrollTop,allTopicsFaq,_offset2,_handleScrollTop2,allTopics,_offset3,_handleScrollTop3,allTopics2,btnOpenModalList=document.querySelectorAll(".js-open-modal"),btnCloseModal=document.querySelector(".js-close"),btnOpenModalInsuranceList=(0<btnOpenModalList.length&&btnOpenModalList.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault();e=document.body;e.classList.remove("show-modal-insurance"),e.classList.add("show-modal")})}),btnCloseModal&&btnCloseModal.addEventListener("click",function(e){e.preventDefault(),document.body.classList.remove("show-modal")}),document.querySelectorAll(".js-open-modal-insurance")),btnCloseModalInsurance=document.querySelector(".js-close-insurance"),btnOpenModalSupport=(0<btnOpenModalInsuranceList.length&&btnOpenModalInsuranceList.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),document.body.classList.add("show-modal-insurance")})}),btnCloseModalInsurance&&btnCloseModalInsurance.addEventListener("click",function(e){e.preventDefault(),document.body.classList.remove("show-modal-insurance")}),document.querySelector(".js-open-modal-support")),btnCloseModalSupport=document.querySelector(".js-close-support"),btnMobileSubMenu=(btnOpenModalSupport&&btnOpenModalSupport.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.add("show-modal-support")}),btnCloseModalSupport&&btnCloseModalSupport.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.remove("show-modal-support")}),document.querySelectorAll(".js-mobile-menu-item")),subMenuDropdownArea=document.querySelectorAll(".js-menu-dropdown-mobile"),question=(btnMobileSubMenu&&btnMobileSubMenu.forEach(function(t,n){t.addEventListener("click",function(e){e.preventDefault(),btnMobileSubMenu.forEach(function(e){e.classList.remove("active"),t.classList.remove("active")}),subMenuDropdownArea.forEach(function(e){e.classList.remove("active")}),t.classList.toggle("active"),subMenuDropdownArea[n].classList.toggle("active")})}),document.querySelectorAll(".js-question")),question02=(question&&question.forEach(function(e){e.addEventListener("click",function(){e.parentElement.classList.toggle("active")})}),document.querySelectorAll(".js-accordion-plus-item")),itemContent=(question02&&question02.forEach(function(e){e.addEventListener("click",function(){e.classList.toggle("active")})}),document.querySelectorAll(".js-nav-product li a")),listTopicsFaqMobile=(itemContent&&itemContent.forEach(function(e){e.addEventListener("click",function(){itemContent.forEach(function(e){e.classList.remove("active")}),e.classList.add("active")})}),document.querySelector(".js-dropdown-select")),topicsFaqMobile=document.querySelectorAll(".s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2"),listTopicsFaq=(listTopicsFaqMobile&&(offset=function(e){var t,n;if(document)return e=e.getBoundingClientRect(),t=window.pageXOffset||document.documentElement.scrollLeft,n=window.pageYOffset||document.documentElement.scrollTop,{top:e.top+n,left:e.left+t}},handleScrollTop=function(e){document&&(e=document.querySelectorAll(".s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2")[e],window.scroll({behavior:"smooth",left:0,top:offset(e).top-130}))},topicsFaqMobile.forEach(function(e){var t=document.createElement("li"),n=(listTopicsFaqMobile.appendChild(t),document.createElement("a")),t=(n.setAttribute("href","#"),t.appendChild(n),document.createElement("p"));t.textContent=e.textContent,n.appendChild(t)}),(allTopicsFaqMobile=document.querySelectorAll(".js-dropdown-select li a"))[0].classList.add("active"),allTopicsFaqMobile.forEach(function(t,n){t.addEventListener("click",function(e){e.preventDefault(),allTopicsFaqMobile.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),handleScrollTop(n)})})),document.querySelector(".js-nav-faq-post")),topicsFaq=document.querySelectorAll(".s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2"),listTopics=(listTopicsFaq&&(_offset=function(e){var t,n;if(document)return e=e.getBoundingClientRect(),t=window.pageXOffset||document.documentElement.scrollLeft,n=window.pageYOffset||document.documentElement.scrollTop,{top:e.top+n,left:e.left+t}},_handleScrollTop=function(e){document&&(e=document.querySelectorAll(".s-faq-content .container .main-content-faq .all-faqs-section .faq-box h2")[e],window.scroll({behavior:"smooth",left:0,top:_offset(e).top-130}))},topicsFaq.forEach(function(e){var t=document.createElement("li"),n=(listTopicsFaq.appendChild(t),document.createElement("a")),t=(n.setAttribute("href","#"),t.appendChild(n),document.createElement("p"));t.textContent=e.textContent,n.appendChild(t)}),(allTopicsFaq=document.querySelectorAll(".js-nav-faq-post li a"))[0].classList.add("active"),allTopicsFaq.forEach(function(t,n){t.addEventListener("click",function(e){e.preventDefault(),allTopicsFaq.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),_handleScrollTop(n)})})),document.querySelector(".js-nav-blog-post")),topics=document.querySelectorAll(".info-post-general .container .info-post-bottom .left-content .content-post h2"),listTopics2=(listTopics&&(_offset2=function(e){var t,n;if(document)return e=e.getBoundingClientRect(),t=window.pageXOffset||document.documentElement.scrollLeft,n=window.pageYOffset||document.documentElement.scrollTop,{top:e.top+n,left:e.left+t}},_handleScrollTop2=function(e){document&&(e=document.querySelectorAll(".info-post-general .container .info-post-bottom .left-content .content-post h2")[e],window.scroll({behavior:"smooth",left:0,top:_offset2(e).top-110}))},topics.forEach(function(e){var t=document.createElement("li"),n=(listTopics.appendChild(t),document.createElement("a")),t=(n.setAttribute("href","#"),t.appendChild(n),document.createElement("span"));n.textContent=e.textContent,n.appendChild(t)}),(allTopics=document.querySelectorAll(".js-nav-blog-post li a"))[0].classList.add("active"),allTopics.forEach(function(t,n){t.addEventListener("click",function(e){e.preventDefault(),allTopics.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),_handleScrollTop2(n)})})),document.querySelector(".js-nav-template-text")),topics2=document.querySelectorAll(".s-page-text .container .left-page-text .content-post h2"),swiper=(listTopics2&&(_offset3=function(e){var t,n;if(document)return e=e.getBoundingClientRect(),t=window.pageXOffset||document.documentElement.scrollLeft,n=window.pageYOffset||document.documentElement.scrollTop,{top:e.top+n,left:e.left+t}},_handleScrollTop3=function(e){document&&(e=document.querySelectorAll(".s-page-text .container .left-page-text .content-post h2")[e],window.scroll({behavior:"smooth",left:0,top:_offset3(e).top-110}))},topics2.forEach(function(e){var t=document.createElement("li"),n=(listTopics2.appendChild(t),document.createElement("a")),t=(n.setAttribute("href","#"),t.appendChild(n),document.createElement("span"));n.textContent=e.textContent,n.appendChild(t)}),(allTopics2=document.querySelectorAll(".js-nav-template-text li a"))[0].classList.add("active"),allTopics2.forEach(function(t,n){t.addEventListener("click",function(e){e.preventDefault(),allTopics2.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),_handleScrollTop3(n)})})),new Swiper(".slide-logos",{slidesPerView:"auto",spaceBetween:32,breakpoints:{320:{slidesPerView:1,spaceBetween:20},768:{slidesPerView:1,spaceBetween:30},1200:{slidesPerView:3,spaceBetween:90}}})),slide_product=new Swiper(".slide-product",{slidesPerView:4,spaceBetween:32,pagination:{el:".s-slide-product .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-product .top .btn-next",prevEl:".s-slide-product .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:1.4,spaceBetween:15},480:{slidesPerView:2.2,spaceBetween:15},768:{slidesPerView:3,spaceBetween:15},991:{slidesPerView:4,spaceBetween:15},1200:{slidesPerView:4,spaceBetween:32}}}),slide_product=new Swiper(".slide-van",{slidesPerView:4,spaceBetween:32,pagination:{el:".s-slide-van .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-van .top .btn-next",prevEl:".s-slide-van .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:1.4,spaceBetween:15},480:{slidesPerView:2.2,spaceBetween:15},768:{slidesPerView:3,spaceBetween:15},991:{slidesPerView:4,spaceBetween:15},1200:{slidesPerView:4,spaceBetween:32}}}),slide_product=new Swiper(".slide-about",{slidesPerView:5,spaceBetween:20,pagination:{el:".s-slide-about .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-about .top .btn-next",prevEl:".s-slide-about .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:2,spaceBetween:15},480:{slidesPerView:3,spaceBetween:15},768:{slidesPerView:4,spaceBetween:15},991:{slidesPerView:5,spaceBetween:15},1200:{slidesPerView:5,spaceBetween:32}}}),btnScrollTop=document.getElementById("js-btn-scroll-top"),menuButton=(btnScrollTop.addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})}),document.getElementById("js-menu-button")),header=(menuButton.addEventListener("click",function(){menuButton.classList.toggle("is-active"),document.documentElement.classList.toggle("menu-opened"),document.body.classList.toggle("fixed-position")}),document.getElementById("js-header"));function fixedMenu(){50<window.pageYOffset?header.classList.add("changeHeight"):header.classList.remove("changeHeight")}document.addEventListener("scroll",fixedMenu);var btnMenu=document.querySelectorAll(".js-btn-menu"),MenuDropdown=document.querySelectorAll(".js-menu"),navLi=(btnMenu.forEach(function(t,n){t.addEventListener("mouseenter",function(e){e.preventDefault(),MenuDropdown.forEach(function(e){e.classList.remove("active"),e.addEventListener("mouseleave",function(){e.classList.remove("active"),btnMenu.forEach(function(e){e.classList.remove("active")})})}),btnMenu.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),MenuDropdown[n].classList.add("active")})}),document.querySelectorAll(".js-nav-product li a")),sections=document.querySelectorAll("section"),btnDropdownSelect=(navLi.length&&sections.length&&(window.addEventListener("scroll",function(){var n="";sections.forEach(function(e){var t=e.offsetTop;window.pageYOffset>=t-160&&(n=e.getAttribute("id"))}),navLi.forEach(function(e){e.classList.remove("active");e=document.querySelector('.js-nav-product li a[href*="'+n+'"]');e&&e.classList.add("active")})}),navLi.forEach(function(t){t.addEventListener("click",function(e){e.preventDefault();var e=t.getAttribute("href").substring(1),e=document.getElementById(e);e&&(e=e.offsetTop,window.scrollTo({top:e-160,behavior:"smooth"}))})})),document.querySelector(".js-open-select-custom")),dropdownArea=document.querySelector(".select-custom"),navMobileLink=document.querySelectorAll(".dropdown-select li");btnDropdownSelect&&(btnDropdownSelect.addEventListener("click",function(){dropdownArea.classList.toggle("active")}),navMobileLink.forEach(function(t,e){t.addEventListener("click",function(e){navMobileLink.forEach(function(e){e.classList.remove("active"),dropdownArea.classList.remove("active")}),t.classList.add("active")})}));