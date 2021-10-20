<template>
    <landing class="home">
        <template v-slot:main>
            <section id="hero">
                <div class="wrapper flex">
                    <div class="content">
                        <div class="title">
                            Welcome To <br />
                            Georgian Global Group
                        </div>
                        <p>
                            Now Is The Winter Of Our Discontent Made Glorious Summer By This Sun
                            Of York; And All The Clouds That Lour'd Upon Our House In The Deep
                            Bosom Of The Ocean Buried. Now Are Our Brows Bound With Victorious
                            Wreaths; Our Bruised Arms Hung Up For Monuments; Our Stern Alarums
                            Changed To Merry Meetings, Our Dreadful Marches To Delightful
                            Measures.
                        </p>
                    </div>
                    <div class="slider">
                        <div id="hero_slider">
                            <img src="/landing_resources/img/hero/1.png" alt="" />
                            <img src="/landing_resources/img/hero/2.png" alt="" />
                            <img src="/landing_resources/img/hero/1.png" alt="" />
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
            <section class="brands wrapper">
                <div class="title60">Our Brands & Product</div>
                <p>
                    Lorem Ipsum Madolor Sit Amet, Consectetur Adipisicing Elit, Sed Do
                    Eiusmod Tempor Coli Incidit Labore Lorem Ipsum Amet Madolor Sit Amet.
                </p>
                <div class="brand_grid">
                    <inertia-link :href="brand.show_url" class="brand_item" v-for="brand in brands">
                        <LazyImage :src="brand.main_image" :alt="brand.title" />
                        <div>{{brand.title}}</div>
                    </inertia-link>

                </div>
            </section>
            <!--            <template v-for="(item,key) in page" v-if="page.length">-->
            <!--                <template v-if="item.key === 'slider'">-->
            <!--                    <hero-section :item="item"/>-->
            <!--                </template>-->
            <!--                <template v-if="item.key === 'galleries'">-->
            <!--                    <gallery-section :item="item"/>-->
            <!--                </template>-->
            <!--            </template>-->
        </template>
    </landing>
</template>
<script>
import landing from "@/Layouts/Landing";
import HeroSection from "../../../Components/Home/HeroSection";
import GallerySection from "../../../Components/Home/GallerySection";
import LazyImage from "@/Components/Web/Image/Image"

export default {
    components: {
        landing,
        HeroSection,
        GallerySection,
        LazyImage
    },
    props: {
        page: {
            type: Array
        },
        brands: {
            type: Array
        },
    },
    mounted() {
        function pagee() {
            console.log(this.page);
        }
    },
    methods: {
        getValueByFields(fieldss, key) {
            let value = '';
            fieldss.forEach((item) => {
                if (!value && item.name === key) {
                    value = item.value
                }
            })
            return value
        },
        stringLimit(string, limit = 100) {
            if (string) {
                return string.length > limit ? `${string.substring(0, limit)} ...` : string;
            }
            return '';
        }
    },
}
</script>
