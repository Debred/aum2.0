const menuButton=document.querySelector("#menu-mobile"),mainMenu=document.querySelector(".main-menu"),subMenuToggler=document.querySelectorAll(".menu-item-has-children");function eventListeners(){menuButton.addEventListener("click",toggleMenu),subMenuToggler.forEach(e=>{e.addEventListener("click",e=>{toggleSubMenu(e)})})}function toggleMenu(e){e.preventDefault(),mainMenu.classList.toggle("active"),menuButton.classList.toggle("active")}function toggleSubMenu(e){let t=e.target;"A"!==t.tagName&&t.classList.toggle("active")}document.addEventListener("DOMContentLoaded",()=>{eventListeners()});var swiperEvents=new Swiper(".events__wrapper.swiper",{slidesPerView:1,autoHeight:!0,spaceBetween:30,loop:!0,createElements:!0,autoplay:{delay:5e3},pagination:{el:".swiper-pagination"},breakpoints:{768:{slidesPerView:2},1440:{slidesPerView:4,rewind:!0,keyboard:!0,allowSlideNext:!0,allowSlidePrev:!0,simulateTouch:!1,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}}}}),swiperArticles=new Swiper(".articles__wrapper.swiper",{slidesPerView:1,spaceBetween:30,autoHeight:!0,loop:!0,createElements:!0,autoplay:{delay:5e3},breakpoints:{768:{slidesPerView:2},1440:{enabled:!1,slidesPerView:4}}}),swiper=new Swiper(".mySwiper",{navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});