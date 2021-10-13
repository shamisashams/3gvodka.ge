<template>
    <footer id="footer">
        <div class="wrapper flex">
            <div class="col col_1">
                <a :href="'mailto:' + getValueByFields(contact.fields,'email')">
                    <img src="/landing_resources/img/icons/header/2.svg" alt="" />
                    {{getValueByFields(contact.fields,'email')}}
                </a>
                <a>
                    <img src="/landing_resources/img/icons/header/7.svg" alt="" />
                    {{ getValueByFields(contact.fields,'address') }}
                </a>
                <a :href="'tel://' + getValueByFields(contact.fields,'phone')">
                    <img src="/landing_resources/img/icons/header/1.svg" alt="" />
                    {{ getValueByFields(contact.fields,'phone') }}
                </a>
                <div class="title">{{__('Working hours')}}</div>
                <a>
                    <img src="/landing_resources/img/icons/header/3.svg" alt="" />
                    <span v-html="getValueByFields(contact.fields, 'working')"></span>
                </a>
                <div class="sm">
                    <a  v-if="getValueByFields(social.fields,'facebook')"
                        target="_blank"
                        :href="getValueByFields(social.fields,'facebook')">
                        <img src="/landing_resources/img/icons/header/4.svg" alt="" />
                    </a>
                    <a v-if="getValueByFields(social.fields,'linkedin')"
                       :href="getValueByFields(social.fields,'linkedin')" target="_blank"
                       >
                        <img src="/landing_resources/img/icons/header/5.svg" alt="" />
                    </a>
                    <a v-if="getValueByFields(social.fields,'youtube')"
                       :href="getValueByFields(social.fields,'youtube')" target="_blank">
                        <img src="/landing_resources/img/icons/header/6.svg" alt="" />
                    </a>
                </div>
            </div>
            <div class="col col_2">
                <a href="home.html" class="title">Home</a>
                <a href="#" class="title">Products & Partners</a>
                <a href="#" class="title">News</a>
                <a href="#" class="title">About Us</a>
                <a href="#" class="title">Contact</a>
            </div>
            <div class="col col_3 form">
                <input type="text " placeholder="Name" />
                <input type="text " placeholder="e-mail" />
                <textarea placeholder="Text Here"></textarea>
                <button>
            <span id="send_msg"
            ><img src="/landing_resources/img/icons/header/8.svg" alt="" />Send Message</span
            >
                    <span id="sent"
                    ><img src="/landing_resources/img/icons/header/9.svg" alt="" /> Message Sent</span
                    >
                </button>
            </div>
            <div class="col col_4">
                <div class="map" v-html="getValueByFields(contact.fields,'map_iframe')">
                </div>
                <div class="title">{{__('Find Us On A Map')}}</div>
            </div>
        </div>
        <div class="flex center">
            <div>{{__('Designed by')}}</div>
            <img src="/landing_resources/img/logo/insite.svg" alt="" />
        </div>
    </footer>

</template>

<script>

export default {
    name: "Footer",
    components: {
    },
    computed: {
        contact () {
            return this.$page.props.layoutData ? this.$page.props.layoutData.contact : {}
        },
        social () {
            return this.$page.props.layoutData ? this.$page.props.layoutData.social : {}
        },
    },
    methods: {
        getValueByFields (fields, key) {
            if (!fields[key]) {
                return ''
            }
            return fields[key].value
        }
    },
}
</script>
