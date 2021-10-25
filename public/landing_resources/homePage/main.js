const mainMenuBtn = document.getElementById("main_menu_btn");
const blurBg = document.getElementById("blur_bg");
const navigations = document.getElementById("navigations");
const closeNav = document.getElementById("close_nav");

// main page
mainMenuBtn.addEventListener("click", () => {
  blurBg.classList.toggle("show");
  navigations.classList.toggle("show");
});
blurBg.addEventListener("click", () => {
  blurBg.classList.remove("show");
  navigations.classList.remove("show");
});
closeNav.addEventListener("click", () => {
  blurBg.classList.remove("show");
  navigations.classList.remove("show");
});
