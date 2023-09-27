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
var swiper = new Swiper(".events__wrapper.swiper", {
  slidesPerView: 1,
  autoHeight: true,
  grabCursor: true,
  loop: true,
  /* autoplay: {
    delay: 5000,
  }, */
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});