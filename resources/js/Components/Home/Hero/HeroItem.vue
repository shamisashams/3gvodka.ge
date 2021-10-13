<template>
    <img :src="image" alt="slide">
</template>

<script>
import { Slide } from "vue3-carousel"
import LazyImage from "@/Components/Web/Image/Image"

export default {
    components: {
        Slide,
        LazyImage
    },

    props: {
        slide: {
            type: Object
        },

        key: {
            type: Number
        }
    },

    computed: {
        image () {
            return this.getValueByFields('image')
        }
    },

    methods: {
        getValueByFields(key) {
            return this.slide.filter((item) => item.name === key)?.[0]?.value
        }
    },
}
</script>
