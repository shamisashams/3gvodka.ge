<template>

    <header id="header">
        <div class="main" id="main_header">
            <div class="top">
                <div class="wrapper flex">
                    <div>
                        <a v-if="contact" :href="'tel://' + getValueByFields(contact.fields,'phone')" class="info">
                            <img src="/landing_resources/img/icons/header/1.svg" alt="" />
                            {{ getValueByFields(contact.fields, 'phone') }}
                        </a>
                        <a v-if="contact" :href="'mailto:' + getValueByFields(contact.fields,'email')" class="info">
                            <img src="/landing_resources/img/icons/header/2.svg" alt="" />
                            {{ getValueByFields(contact.fields, 'email') }}
                        </a>
                    </div>
                    <div>
                        <div class="info" v-if="contact">
                            <img src="/landing_resources/img/icons/header/3.svg" alt="" />
                            {{ getValueByFields(contact.fields, 'working') }}
                        </div>
                        <div class="sm" v-if="social">
                            <a v-if="getValueByFields(social.fields,'facebook')"
                               :href="getValueByFields(social.fields,'facebook')"
                               target="_blank"
                            >
                                <img src="/landing_resources/img/icons/header/4.svg" alt="" />
                            </a>
                            <a v-if="getValueByFields(social.fields,'linkedin')"
                               :href="getValueByFields(social.fields,'linkedin')"
                               target="_blank"
                            >
                                <img src="/landing_resources/img/icons/header/5.svg" alt="" />
                            </a>
                            <a v-if="getValueByFields(social.fields,'youtube')"
                               :href="getValueByFields(social.fields,'youtube')"
                               target="_blank"
                            >
                                <img src="/landing_resources/img/icons/header/6.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="wrapper flex">
                    <a href="main.html" class="logo">
                        <img src="/landing_resources/img/logo/1.png" alt="" />
                    </a>
                    <div class="navbar">
                        <a :href="locale_route(locales.current_locale,'/')">{{__('client.home_page')}}</a>
                        <a :href="locale_route(locales.current_locale,'/product')">products & Partners</a>
                        <inertia-link :href="locale_route(locales.current_locale,'/news')">news</inertia-link>
                        <a :href="locale_route(locales.current_locale,'/about')">About us</a>
                        <inertia-link :href="locale_route(locales.current_locale,'/contact')">contact</inertia-link>
                    </div>
                    <div class="languages">
                        {{locales.current_locale}}
                        <div class="drop">
                            <div v-for="(link,locale) in locales.available_locales">
                                <inertia-link  :href="link" v-if="locale != locales.current_locale">{{ locale }}</inertia-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="wrapper flex">
                <a href="main.html" class="logo">
                    <img src="/landing_resources/img/logo/1.png" alt="" />
                </a>
                <button id="menu_btn"></button>
            </div>
        </div>
    </header>


</template>

<script>
import emitter from "@/Plugins/bus"
import {Inertia} from "@inertiajs/inertia"




export default {
    name: "Header",
    computed: {
        contact() {
            return this.$page.props.layoutData ? this.$page.props.layoutData.contact : {}
        },
        social() {
            return this.$page.props.layoutData ? this.$page.props.layoutData.social : {}
        },
        locales() {
            let i={
                'current_locale': this.$page.props.locale,
                '.available_locales': this.$page.props.available_locales
            }
            return {
                'current_locale': this.$page.props.locale,
                'available_locales': this.$page.props.available_locales
            };
        }
    },

    methods: {
        getValueByFields(fields, key) {
            if (!fields[key]) {
                return ''
            }
            return fields[key].value
        }
    },
}
</script>
