<template>
    <footer id="footer">
        <div class="wrapper flex">
            <div class="col col_1">
                <a v-if="contact" :href="'mailto:' + getValueByFields(contact.fields,'email')">
                    <img src="/landing_resources/img/icons/header/2.svg" alt=""/>
                    {{ getValueByFields(contact.fields, 'email') }}
                </a>
                <a v-if="contact">
                    <img src="/landing_resources/img/icons/header/7.svg" alt=""/>
                    {{ getValueByFields(contact.fields, 'address') }}
                </a>
                <a v-if="contact" :href="'tel://' + getValueByFields(contact.fields,'phone')">
                    <img src="/landing_resources/img/icons/header/1.svg" alt=""/>
                    {{ getValueByFields(contact.fields, 'phone') }}
                </a>
                <div class="title">{{ __('Working hours') }}</div>
                <a v-if="contact">
                    <img src="/landing_resources/img/icons/header/3.svg" alt=""/>
                    <span v-html="getValueByFields(contact.fields, 'working')"></span>
                </a>
                <div class="sm" v-if="social">
                    <a v-if="getValueByFields(social.fields,'facebook')"
                       target="_blank"
                       :href="getValueByFields(social.fields,'facebook')">
                        <img src="/landing_resources/img/icons/header/4.svg" alt=""/>
                    </a>
                    <a v-if="getValueByFields(social.fields,'linkedin')"
                       :href="getValueByFields(social.fields,'linkedin')" target="_blank"
                    >
                        <img src="/landing_resources/img/icons/header/5.svg" alt=""/>
                    </a>
                    <a v-if="getValueByFields(social.fields,'youtube')"
                       :href="getValueByFields(social.fields,'youtube')" target="_blank">
                        <img src="/landing_resources/img/icons/header/6.svg" alt=""/>
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
            <form class="col col_3 form" @submit.prevent="submit">
                <input type="text " placeholder="Name" v-model="form.name"/>
                <input type="text " placeholder="e-mail" v-model="form.email"/>
                <textarea placeholder="Text Here" v-model="form.message"></textarea>
                <button>
            <span id="send_msg"
            ><img src="/landing_resources/img/icons/header/8.svg" alt=""/>Send Message</span
            >
                    <span id="sent"
                    ><img src="/landing_resources/img/icons/header/9.svg" alt=""/> Message Sent</span
                    >
                </button>
            </form>
            <div class="col col_4">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11910.594738916752!2d44.767606787777794!3d41.72809916984403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sge!4v1633599411390!5m2!1sen!2sge"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="title">Find Us On A Map</div>
            </div>



        </div>
        <div class="flex center">
            <div>{{ __('Designed by') }}</div>
            <img src="/landing_resources/img/logo/insite.svg" alt=""/>
        </div>
    </footer>


</template>

<script>

export default {
    name: "Footer",
    components: {},

    computed: {
        contact() {
            return this.$page.props.layoutData ? this.$page.props.layoutData.contact : {}
        },
        social() {
            return this.$page.props.layoutData ? this.$page.props.layoutData.social : {}
        },
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                message: null,
            },
        }
    },
    methods: {
        getValueByFields(fields, key) {
            if (!fields[key]) {
                return ''
            }
            return fields[key].value
        },
        submit() {
            this.$inertia.post('/mail', this.form)
        },
    },
}
</script>
