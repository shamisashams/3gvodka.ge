<template>
    <landing class="home">
        <template v-slot:main>
            <section class="wrapper show_product flex">
                <div class="img">
                    <LazyImage :src="prod.main_image" alt="" />
                </div>
                <div>
                    <div class="name">{{ prod.title }}</div>
                    <div class="info_grid">
                        <p class="op"> Manufacturer </p>
                        <p>{{ prod.manufacturer}}</p>
                        <p class="op">Country</p>
                        <p>{{ prod.country }}</p>
                    </div>
                    <div class="description" v-html="prod.description">
                    </div>
                    <div>
                        <span class="op">For Order:</span>
                        <a :href="locale_route(this.$page.props.locale,'/contact')" class="contact">Contact us</a>
                    </div>
                    <button class="back" @click="redirect">
                        <LazyImage src="/landing_resources/img/icons/pag/back.svg" alt="" />Back to products
                    </button>
                </div>
            </section>

        </template>
    </landing>
</template>
<script>
import landing from "@/Layouts/Landing";
import LazyImage from "@/Components/Web/Image/Image"

export default {
    components: {
        landing,
        LazyImage
    },
    props: {
        product: {
            type: Array
        },
        goBack: {
            type: String
        }
    },
    computed: {
        prod: function (){
            return this.product[0];
        }
    },
    methods: {
        redirect(){
            window.location.href = this.goBack;
        }
    }

}
</script>
