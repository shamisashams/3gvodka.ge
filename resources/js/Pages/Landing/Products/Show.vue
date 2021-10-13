<template>
    <Landing >

        <section class="wrapper show_product flex">
            <div class="img">
                <img src="/landing_resources/img/hero/2.png" alt="" />
            </div>
            <div>
                <div class="name">Cracker</div>
                <div class="info_grid">
                    <p class="op">Manufacturer</p>
                    <p>Croco</p>
                    <p class="op">Country</p>
                    <p>Turkey</p>
                </div>
                <div class="description">
                    Now Is The Winter Of Our Discontent Made Glorious Summer By This Sun
                    Of York; And All The Clouds That Lour'd Upon Our House In The Deep
                    Bosom Of The Ocean Buried. Now Are Our Brows Bound With Victorious
                    Wreaths; Our Bruised Arms Hung Up For Monuments; Our Stern Alarums
                    Changed To Merry Meetings, Our Dreadful Marches To Delightful
                    Measures.
                </div>
                <div>
                    <span class="op">For Order:</span>
                    <a href="contact.html" class="contact">Contact us</a>
                </div>

                <button class="back">
                    <img src="/landing_resources/img/icons/pag/back.svg" alt="" />Back to products
                </button>
            </div>
        </section>

    </Landing>
</template>
<script>
import Landing from "@/Layouts/Landing";

export default {
    components: {
        Landing,

    }
}
</script>
