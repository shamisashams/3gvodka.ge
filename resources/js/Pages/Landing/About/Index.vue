<template>
    <Landing >
        <template v-slot:main>
            <section id="hero">
                <div class="wrapper about_us">
                    <div class="content">
                        <div class="title">About Us</div>
                        <p>
                            Now Is The Winter Of Our Discontent Made Glorious Summer By This Sun
                            Of York; And All The Clouds That Lour'd Upoh Victorious Wreaths; Our
                            Bruised Arms Hung Up For Monuments; Our Stern Alarums Changed To
                            Merry Meetings, Our Dreadful Marc Bound With Victorious Wreaths; Our
                            Bruised Arms Hung Up Focontent Madhes To Delightful Measures.
                        </p>
                        <p>
                            Now Is The Winter Of Our Discontent Made Glorious Summer By This Sun
                            Of York; And All The Clouds That Lour'd Upon Our House In The Deep
                            Bosom Of The Ocean Buried. Now Are Our Bron Our House In The Deep
                            Bosom Of The Ocean Buried. Now Are Our Brows Bound Witwse Glorious
                            Summer By This Sun Of York; And All The Clouds That Lour'd Upon Our
                            House In The Deep Bosom Of The Ocean Buried. Now Are Our Browsr
                            Monuments; Our Stern Alarums Changed To Merry Meetings, Our Dreadful
                            Marches To Delightful Measures.
                        </p>
                        <p>
                            Now Is The Winter Of Our Dis Bound With Victorious Wreaths; Our
                            Bruised Arms Hung Up For Monuments; Our Stern Alarums Changed To
                            Merry Meetings, Our Dreadful Marches To Delightful Measures.
                        </p>
                    </div>
                    <div class="slider">
                        <div id="hero_slider">
                            <img src="/landing_resources/img/about/1.png" alt="" />
                            <img src="/landing_resources/img/about/2.png" alt="" />
                        </div>
                        <button id="prev_slide">
                            <img src="/landing_resources/img/icons/slider/prev.png" alt="" />
                        </button>
                        <button id="next_slide">
                            <img src="/landing_resources/img/icons/slider/next.png" alt="" />
                        </button>
                        <img class="bolb" src="/landing_resources/img/hero/bolb.png" alt="" />
                    </div>
                </div>
            </section>

        </template>


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
