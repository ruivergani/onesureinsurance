"use strict";var btnOpenModal=document.querySelector(".js-open-modal"),btnCloseModal=document.querySelector(".js-close"),question=(btnOpenModal&&btnOpenModal.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.add("show-modal")}),btnCloseModal&&btnCloseModal.addEventListener("click",function(e){e.preventDefault(),document.documentElement.classList.remove("show-modal")}),document.querySelectorAll(".js-question")),swiper=(question&&question.forEach(function(e){e.addEventListener("click",function(){e.parentElement.classList.toggle("active")})}),new Swiper(".slide-logos",{slidesPerView:1,spaceBetween:32,breakpoints:{320:{slidesPerView:1,spaceBetween:60},768:{slidesPerView:2.3,spaceBetween:30},1200:{slidesPerView:3,spaceBetween:90}}})),slide_product=new Swiper(".slide-product",{slidesPerView:4,spaceBetween:32,pagination:{el:".s-slide-product .container .top .ctrl-slide .swiper-pagination",clickable:!0},navigation:{nextEl:".s-slide-product .top .btn-next",prevEl:".s-slide-product .top .btn-prev"},speed:600,breakpoints:{275:{slidesPerView:1.1,spaceBetween:15},320:{slidesPerView:1.4,spaceBetween:15},480:{slidesPerView:2.2,spaceBetween:15},768:{slidesPerView:3,spaceBetween:15},991:{slidesPerView:4,spaceBetween:15},1200:{slidesPerView:4,spaceBetween:32}}}),btnScrollTop=document.getElementById("js-btn-scroll-top"),menuButton=(btnScrollTop.addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})}),document.getElementById("js-menu-button")),header=(menuButton.addEventListener("click",function(){menuButton.classList.toggle("is-active"),document.documentElement.classList.toggle("menu-opened")}),document.getElementById("js-header"));function fixedMenu(){60<window.pageYOffset?header.classList.add("changeHeight"):header.classList.remove("changeHeight")}document.addEventListener("scroll",fixedMenu);