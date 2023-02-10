"use strict";var btnOpenModal=document.querySelector(".js-open-modal"),btnCloseModal=document.querySelector(".js-close"),btnDropdownSelect=(btnOpenModal&&btnOpenModal.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.add("show-modal")}),btnCloseModal&&btnCloseModal.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.remove("show-modal")}),document.querySelector(".js-open-select-custom")),dropdownArea=document.querySelector(".select-custom"),question=(btnDropdownSelect&&btnDropdownSelect.addEventListener("click",function(){dropdownArea.classList.toggle("active")}),document.querySelectorAll(".js-question")),itemContent=(question&&question.forEach(function(e){e.addEventListener("click",function(){e.parentElement.classList.toggle("active")})}),document.querySelectorAll(".js-nav-product li a")),listTopics=(itemContent&&itemContent.forEach(function(e){e.addEventListener("click",function(){itemContent.forEach(function(e){e.classList.remove("active")}),e.classList.add("active")})}),document.querySelector(".js-nav-blog-post")),topics=document.querySelectorAll(".info-post-general .container .info-post-bottom .left-content .content-post h2"),swiper=(listTopics&&topics.forEach(function(e){var t=document.createElement("li"),n=(listTopics.appendChild(t),document.createElement("a"));n.setAttribute("href","#"),n.textContent=e.textContent,t.appendChild(n)}),new Swiper(".slide-logos",{slidesPerView:1,spaceBetween:32,breakpoints:{320:{slidesPerView:1,spaceBetween:60},768:{slidesPerView:2.3,spaceBetween:30},1200:{slidesPerView:3,spaceBetween:90}}})),slide_product=new Swiper(".slide-product",{slidesPerView:4,spaceBetween:32,pagination:{el:".s-slide-product .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-product .top .btn-next",prevEl:".s-slide-product .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:1.4,spaceBetween:15},480:{slidesPerView:2.2,spaceBetween:15},768:{slidesPerView:3,spaceBetween:15},991:{slidesPerView:4,spaceBetween:15},1200:{slidesPerView:4,spaceBetween:32}}}),slide_product=new Swiper(".slide-van",{slidesPerView:4,spaceBetween:32,pagination:{el:".s-slide-van .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-van .top .btn-next",prevEl:".s-slide-van .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:1.4,spaceBetween:15},480:{slidesPerView:2.2,spaceBetween:15},768:{slidesPerView:3,spaceBetween:15},991:{slidesPerView:4,spaceBetween:15},1200:{slidesPerView:4,spaceBetween:32}}}),slide_product=new Swiper(".slide-about",{slidesPerView:5,spaceBetween:20,pagination:{el:".s-slide-about .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-about .top .btn-next",prevEl:".s-slide-about .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:2,spaceBetween:15},480:{slidesPerView:3,spaceBetween:15},768:{slidesPerView:4,spaceBetween:15},991:{slidesPerView:5,spaceBetween:15},1200:{slidesPerView:5,spaceBetween:32}}}),btnScrollTop=document.getElementById("js-btn-scroll-top"),menuButton=(btnScrollTop.addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})}),document.getElementById("js-menu-button")),header=(menuButton.addEventListener("click",function(){menuButton.classList.toggle("is-active"),document.documentElement.classList.toggle("menu-opened")}),document.getElementById("js-header"));function fixedMenu(){50<window.pageYOffset?header.classList.add("changeHeight"):header.classList.remove("changeHeight")}document.addEventListener("scroll",fixedMenu);var btnMenu=document.querySelectorAll(".js-btn-menu"),MenuDropdown=document.querySelectorAll(".js-menu");btnMenu.forEach(function(t,n){t.addEventListener("mouseenter",function(e){e.preventDefault(),MenuDropdown.forEach(function(e){e.classList.remove("active"),e.addEventListener("mouseleave",function(){e.classList.remove("active"),btnMenu.forEach(function(e){e.classList.remove("active")})})}),btnMenu.forEach(function(e){e.classList.remove("active")}),t.classList.add("active"),MenuDropdown[n].classList.add("active")})});