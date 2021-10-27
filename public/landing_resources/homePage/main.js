const mainMenuBtn = document.getElementById("main_menu_btn");
const blurBg = document.getElementById("blur_bg");
const navigations = document.getElementById("navigations");
const closeNav = document.getElementById("close_nav");
const playMusic = document.getElementById("play_music");
const pauseMusic = document.getElementById("pause_music");
const audio = document.querySelector("audio");

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

window.addEventListener("DOMContentLoaded", () => {
  audio.volume = 0.2;
  audio.play();
  audio.muted = true;
  audio.play();
  audio.muted = false;
});

playMusic.addEventListener("click", () => {
  audio.play();
  playMusic.classList.remove("active");
  pauseMusic.classList.add("active");
});
pauseMusic.addEventListener("click", () => {
  audio.pause();
  playMusic.classList.add("active");
  pauseMusic.classList.remove("active");
});
