<template>
    <Landing >

    <template v-slot:main>
        <div class="showcase news flex"><span>{{ neww.title }}</span></div>
        <div class="wrapper show_news">
            <img :src="neww.profile_image" alt="" />
            <p v-html="neww.description"></p>
            <button class="back" v-on:click="goBack">
                <img src="/landing_resources/img/icons/pag/back.svg" alt="" />Back to News
            </button>
        </div>

    </template>

    </Landing>
</template>
<script>
import Landing from "@/Layouts/Landing";
export default {
    components: {
        Landing,
    },
    props: {
      news:{
          type: Array
      }
    },
    computed: {
        neww: function (){
            return this.news[0];
        }
    },
    methods: {
        goBack: function () {
            window.location.href = '/news';
        }
    }
}
</script>
