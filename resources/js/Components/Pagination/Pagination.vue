<template>
    <div class="pagination flex center">
        <a v-if="prev_page_url" :href="prev_page_url">
            <button class="arr"><img src="/landing_resources/img/icons/pag/prev.svg" alt=""/></button>
        </a>
        <template
            v-for="(link, index) in links.slice(1, -1)"
            :key="index"
        >

            <a :href="link.url">
                <button
                    class="num"
                    :class="link.active ? 'active' : ''"
                >
                    {{ link.label }}
                </button>
            </a>
        </template>
        <a v-if="next_page_url" :href="next_page_url">

            <button class="arr"><img src="/landing_resources/img/icons/pag/next.svg" alt=""/></button>
        </a>

    </div>
</template>

<script>
export default {
    props: {
        links: Array,
        prev_page_url: String,
        next_page_url: String,

    }
}
</script>
