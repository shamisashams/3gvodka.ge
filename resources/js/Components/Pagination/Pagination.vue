<template>
    <div class="pagination flex center">
        <inertia-link v-if="prev_page_url" :href="prev_page_url">
            <button class="arr"><img src="/landing_resources/img/icons/pag/prev.svg" alt=""/></button>
        </inertia-link>
        <template
            v-for="(link, index) in links.slice(1, -1)"
            :key="index"
        >

            <inertia-link :href="link.url">
                <button
                    class="num"
                    :class="link.active ? 'active' : ''"
                >
                    {{ link.label }}
                </button>
            </inertia-link>
        </template>
        <inertia-link v-if="next_page_url" :href="next_page_url">

            <button class="arr"><img src="/landing_resources/img/icons/pag/next.svg" alt=""/></button>
        </inertia-link>

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
