<template v-show="item">
    <section id="hero">
        <div class="wrapper flex">
            <div class="content">
                <div class="title" v-html="item.fields.title?.value">

                </div>
                <div v-html="item.fields.description?.value">

                </div>
            </div>
            <div class="slider" v-if="heroData.length">
                <div id="hero_slider">
                    <hero-item
                        v-for="(slide, index) in heroData"
                        :key="index"
                        :slide="slide"
                    />
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

<script>
import HeroItem from "@/Components/Home/Hero/HeroItem"

export default {
    components: {
        HeroItem,
    },

    props: {
        item: Array
    },

    computed: {
        heroData() {
            return this.item?.fields?.fields?.value
        },
    },
}
</script>
