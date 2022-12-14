const mainMenuBtn = document.getElementById("main_menu_btn");
const blurBg = document.getElementById("blur_bg");
const navigations = document.getElementById("navigations");
const closeNav = document.getElementById("close_nav");
const playMusic = document.getElementById("play_music");
const pauseMusic = document.getElementById("pause_music");
const loaderCount = document.getElementById("loaderCount");
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

window.addEventListener("load", function () {
    // setTimeout(function () {
    document.querySelector(".ctn-preloader").classList.add("loaded");

    // }, 3000);
});

let count = 0;

setInterval(() => {
    if (count < 100) {
        count += 1;
        loaderCount.innerText = count + "%";
    }
}, 50);
