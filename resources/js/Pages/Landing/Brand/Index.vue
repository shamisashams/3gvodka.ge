<template>
    <landing class="home">
        <template v-slot:main>
            <section class="showcase product"></section>

            <div class="product_page wrapper">
                <div class="brnd">
                    <img src="/landing_resources/img/products/logo.png" alt="" />
                    Croco
                </div>
                <p>
                    Lorem Ipsum Madolor Sit Amet, Consectetur Adipisicing Elit, Sed Do
                    Eiusmod Tempor Coli Incidit Labore Lorem Ipsum Amet Madolor Sit Amet.
                </p>
                <div class="grid">
                    <div class="item" v-for="product in products">
                        <img :src="'/storage/'+product.images[0].src" alt="" />
                        <button class="name">{{ product.title }}</button>
                        <p v-html="product.short_description"></p>
                        <inertia-link :href="productUrl(product)">Learn More</inertia-link>
                    </div>

                </div>
                <div class="pagination flex center">
                    <button class="arr"><img src="/landing_resources/img/icons/pag/prev.svg" alt="" /></button>
                    <button class="num active">1</button>
                    <button class="num">2</button>
                    <button class="num">3</button>
                    <button class="arr"><img src="/landing_resources/img/icons/pag/next.svg" alt="" /></button>
                </div>
            </div>

        </template>
    </landing>
</template>
<script>
import landing from "@/Layouts/Landing";


export default {
    components: {
        landing,
    },
    props: {
        brand: {
            type: Array
        },
    },

    computed: {
        products: function () {
            return this.brand.products;
        }
    },

    methods: {
        productUrl: function (product){
            if (product.title){
                return '/product/'+product.id+'-'+product.title.split(" ").join("-");
            }
        }
    }


}
</script>
