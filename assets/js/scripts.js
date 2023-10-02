//Variables
const menuButton = document.querySelector("#menu-mobile");
const mainMenu = document.querySelector(".main-menu");
const subMenuToggler = document.querySelectorAll(".menu-item-has-children");

document.addEventListener("DOMContentLoaded", () => {
  eventListeners();
});

function eventListeners() {
  //Main Menu
  menuButton.addEventListener("click", toggleMenu);

  //SubMenu
  subMenuToggler.forEach((item) => {
    item.addEventListener("click", (e) => {
      toggleSubMenu(e);
    });
  });
}

//Main Menu
function toggleMenu(e) {
  e.preventDefault();
  mainMenu.classList.toggle("active");
  menuButton.classList.toggle("active");
}

//SubMenu
function toggleSubMenu(e) {
  let target = e.target;
  if (target.tagName !== "A") {
    target.classList.toggle("active");
  }
}

//Swiper
//Events Banner
var swiperEvents = new Swiper(".events__wrapper.swiper", {
  slidesPerView: 1,
  autoHeight: true,
  spaceBetween: 30,
  loop: true,
  createElements: true,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1440: {
      slidesPerView: 4,
      rewind: true,
      keyboard: true,
      allowSlideNext: true,
      allowSlidePrev: true,
      simulateTouch: false,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    },
  },
});

//Articles Banner
var swiperArticles = new Swiper(".articles__wrapper.swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  autoHeight: true,
  loop: true,
  createElements: true,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1440: {
      enabled: false,
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
