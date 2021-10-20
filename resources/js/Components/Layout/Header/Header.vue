<template>

    <header id="header">
        <div class="main" id="main_header">
            <div class="top">
                <div class="wrapper flex">
                    <div>
                        <a href="brands.html" class="info">
                            <img src="/landing_resources/img/icons/header/1.svg" alt="" />
                            0 32 2 444 777
                        </a>
                        <a href="brands.html" class="info">
                            <img src="/landing_resources/img/icons/header/2.svg" alt="" />
                            info@example.com
                        </a>
                    </div>
                    <div>
                        <div class="info">
                            <img src="/landing_resources/img/icons/header/3.svg" alt="" />
                            Mon-Fri: 09:00 - 19:00
                        </div>
                        <div class="sm">
                            <a href="#">
                                <img src="/landing_resources/img/icons/header/4.svg" alt="" />
                            </a>
                            <a href="#">
                                <img src="/landing_resources/img/icons/header/5.svg" alt="" />
                            </a>
                            <a href="#">
                                <img src="/landing_resources/img/icons/header/6.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="wrapper flex">
                    <a href="main.html" class="logo">
                        <img src="/landing_resources/img/logo/1.png" alt="" />
                    </a>
                    <div class="navbar">
                        <a href="main.html">home</a>
                        <a href="products.html">products & Partners</a>
                        <a href="news.html">news</a>
                        <a href="about.html">About us</a>
                        <a href="contact.html">contact</a>
                    </div>
                    <div class="languages">
                        ENG
                        <div class="drop">
                            <a href="#">RUS</a>
                            <a href="#">GEO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="wrapper flex">
                <a href="main.html" class="logo">
                    <img src="/landing_resources/img/logo/1.png" alt="" />
                </a>
                <button id="menu_btn"></button>
            </div>
        </div>
    </header>


</template>

<script>
import emitter from "@/Plugins/bus"
import {Inertia} from "@inertiajs/inertia"




export default {
    name: "Header",

}
</script>
