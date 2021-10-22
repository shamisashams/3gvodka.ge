<template>
    <landing class="home">
        <template v-slot:main>
            <section id="hero">
                <div class="wrapper flex">
                    <div class="content" v-if="slider">
                        <div class="title" v-html="slider.fields.title.value">
                        </div>
                        <p v-html="slider.fields.description.value">
                        </p>
<!--                        <p>-->
<!--                            {{slider.fields.fields.value[0][0].value}}-->
<!--                        </p>-->
                    </div>
                    <div class="slider" v-if="slider">
                        <div id="hero_slider" >
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
            <section class="brands wrapper">
                <div class="title60" v-if="brand_text" v-html="brand_text.fields.title.value"></div>
                <p v-if="brand_text" v-html="brand_text.fields.description.value">
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
import LazyImage from "@/Components/Web/Image/Image";
import Pagination from "@/Components/Pagination/Pagination";

export default {
    components: {
        landing,
        HeroSection,
        GallerySection,
        LazyImage,
        Pagination
    },
    props: {
        page: {
            type: Array
        },
        brands: {
            type: Array
        },

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
        brand_text() {
            let i;
            this.page.forEach(element => {
                if (element.key==="brands"){
                    i = element;
                }
            });
            return i;
        },
    },

    methods: {
        getValueByFields(fields, key) {
            let value = '';
            fields.forEach((item) => {
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
