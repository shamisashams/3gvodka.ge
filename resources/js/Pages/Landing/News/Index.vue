<template>
    <Landing>
        <template v-slot:main>
            <div class="news_page wrapper">
                <div
                    class="title60"
                    v-if="news_title"
                    v-html="news_title.fields.title.value"
                ></div>
                <div class="grid">
                    <div class="news_item" v-for="neww in news_item">
                        <div class="img">
                            <LazyImage
                                :src="neww.profile_image"
                                a:lt="neww.title"
                            />
                        </div>
                        <p class="bold">{{ neww.title }}</p>
                        <p v-html="neww.description"></p>
                        <p class="bold">{{ neww.created_at }}</p>
                        <inertia-link :href="neww.show_url">{{
                            __("learn more")
                        }}</inertia-link>
                    </div>
                </div>

                <pagination
                    :current-page="news.current_page"
                    :prev_page_url="news.prev_page_url"
                    :next_page_url="news.next_page_url"
                    :links="news.links"
                />
            </div>
        </template>
    </Landing>
</template>
<script>
import Landing from "@/Layouts/Landing";
import LazyImage from "@/Components/Web/Image/Image";
import Pagination from "@/Components/Pagination/Pagination";

export default {
    components: {
        Landing,
        LazyImage,
        Pagination,
    },
    props: {
        news: {
            type: Array,
        },
        page: {
            type: Array,
        },
    },
    computed: {
        news_title() {
            let i;
            // console.log(this.news.next_page_url)
            this.page.forEach((element) => {
                if (element.key === "hero") {
                    i = element;
                }
            });
            return i;
        },
        news_item() {
            return this.news.data;
        },
    },
};
</script>
