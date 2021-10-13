<template v-show="item">
    <section class="brands wrapper">
        <div class="title60" v-html="item.fields.title?.value">

        </div>
        <p v-html="item.fields.description?.value">
        </p>
        <div class="brand_grid">
            <template
                v-for="(item, key) in item.fields.fields.value"
                :key="key"
            >
                <gallery-item
                    :item="item"
                />
            </template>
        </div>
    </section>
</template>

<script>
import GalleryItem from "@/Components/Home/Gallery/GalleryItem"

export default {
    components: {
        GalleryItem
    },

    props: {
        item: Array
    }
}
</script>
