<template>
    <Landing >

    <template v-slot:main>
        <div class="showcase news flex" :style="cssProps"><span>{{ neww.title }}</span></div>
        <div class="wrapper show_news">
            <img :src="neww.profile_image" alt="" />
            <p v-html="neww.description"></p>
            <button class="back" v-on:click="goBack">
                <img src="/landing_resources/img/icons/pag/back.svg" alt="" />{{ __('back to news') }}
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
      },
        goBack:{
          type: String
        }
    },
    data() {
        return {
            cssProps: {
                background: `url(${this.news[0].banner_image}) no-repeat`
            }
        }
    },
    computed: {
        neww: function (){
            console.log(this.news[0])
            return this.news[0];
        }
    },
    methods: {
        goBack: function () {
            window.location.href = this.goBack;
        }
    }
}
</script>
