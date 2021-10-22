<template>
    <Landing >
        <template v-slot:main>
            <section id="hero">
                <div class="wrapper about_us" v-if="slider">
                    <div class="content" >
                        <div class="title" v-html="slider.fields.title.value"></div>
                        <p v-html="slider.fields.description.value">
                        </p>
                    </div>
                    <div class="slider">
                        <div id="hero_slider">
                            <img v-for="img in slider.fields.fields.value" :src="img[0].value" alt="" />
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

    },
    props: {
        page: {
            type: Array
        }

    },
    computed: {
        slider() {
            let i;
            this.page.forEach(element => {
                if (element.key==="slider"){
                    i = element;
                }
            });
            return i;

        },
    }
}
</script>
