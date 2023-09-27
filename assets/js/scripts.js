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

var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

