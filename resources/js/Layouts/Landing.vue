<template>
    <div>
        <Header />
        <slot></slot>
        <Footer />
    </div>
</template>

<script>
import AOS from "aos"

import Header from "@/Components/Layout/Header/Header";
import Footer from "@/Components/Layout/Footer/Footer";

export default {
    components: {
        Header,
        Footer,
    },
    mounted() {
        AOS.init({
            startEvent: 'load'
        })
    },
}
</script>
<style>

</style>
