
jQuery(document).ready(function(){
    const menuBtn = document.getElementById("menu_btn");
    const header = document.getElementById("main_header");
    const sendMsg = document.getElementById("send_msg");
    const sent = document.getElementById("sent");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("clicked");
        header.classList.toggle("open");
    });

    sendMsg.addEventListener("click", () => {
        sendMsg.style.opacity = "0";
        sent.classList.add("sent");
    });

});

