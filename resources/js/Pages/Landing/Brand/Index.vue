<template>
    <landing class="home">
        <template v-slot:main>
            <section class="showcase product" :style="cssProps"></section>

            <div class="product_page wrapper">
                <div class="brnd">
                    <LazyImage :src="brand.icon_image" alt="" />
                    {{brand.title}}
                </div>
                <p v-html="brand.description"></p>
                <div class="grid">
                    <div class="item" v-for="product in products">
                        <img v-if="product.images[0]" :src="'/storage/'+product.images[0].src" alt="" />
                        <button class="name">{{ product.title }}</button>
                        <p v-html="product.short_description"></p>
                        <a :href="productUrl(product)">{{ __('learn more') }}</a>
                    </div>

                </div>
                <pagination
                    :current-page="brand.products.current_page"
                    :prev_page_url="brand.products.prev_page_url"
                    :next_page_url="brand.products.next_page_url"
                    :links="brand.products.links"
                />
            </div>

        </template>
    </landing>
</template>
<script>
import landing from "@/Layouts/Landing";
import Pagination from "@/Components/Pagination/Pagination";
import LazyImage from "@/Components/Web/Image/Image";



export default {
    components: {
        landing,
        Pagination,
        LazyImage
    },
    props: {
        brand: {
            type: Array
        },
    },
    data() {
        return {
            cssProps: {
                background: `url(${this.brand.banner_image}) no-repeat`
            }
        }
    },

    computed: {
        products: function () {
            return this.brand.products.data;
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
