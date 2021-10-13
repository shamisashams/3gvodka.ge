<template>
    <a :href="link_url" class="brand_item">
        <lazy-image
            :src="image"
            :show-placeholder="true"
            :alt="title"
        />
        <div>{{title}}</div>
    </a>
</template>

<script>
import LazyImage from "@/Components/Web/Image/Image"

export default {
    components: {
        LazyImage
    },
    props: {
        item: {
            type: Object
        }
    },

    computed: {
        image () {
            return this.getValueByFields('image')
        },
        title () {
            return this.getValueByFields('title')
        },
        link_url () {
            return this.getValueByFields('link_url')
        }
    },

    methods: {
        getValueByFields(key) {
            return this.item.filter((item) => item.name === key)?.[0]?.value
        }
    }
}
</script>
