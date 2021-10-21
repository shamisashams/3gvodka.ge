<template>
    <Landing >

        <template v-slot:main>

            <div class="news_page wrapper">
                <div class="title60">News</div>
                <div class="grid">
                    <div class="news_item" v-for="neww in news">
                        <div class="img">
                            <LazyImage :src="neww.profile_image" a:lt="neww.title" />
                        </div>
                        <p class="bold">{{ neww.title }}</p>
                        <p v-html="neww.description"></p>
                        <p class="bold">{{ neww.created_at }}</p>
                        <inertia-link :href="neww.show_url">Learn More</inertia-link>
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


    </Landing>
</template>
<script>
import Landing from "@/Layouts/Landing";
import LazyImage from "@/Components/Web/Image/Image"

export default {
    components: {
        Landing,
        LazyImage
    },
    props: {
        news: {
            type: Array
        },
    },
}
</script>
