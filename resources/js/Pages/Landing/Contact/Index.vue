<template>
    <landing>
        <template v-slot:main>

            <div class="wrapper">
                <section class="contact_page">
                    <div class="title60">Contact Us</div>
                    <div class="grid">
                        <div>
                            <div class="title">Contact</div>
                            <p v-if="contact"><img src="/landing_resources/img/icons/contact/1.svg" alt="" />
                                {{ getValueByFields(contact.fields, 'phone') }}</p>
                            <p v-if="contact"><img src="/landing_resources/img/icons/contact/2.svg" alt="" />
                                {{ getValueByFields(contact.fields, 'email') }}</p>
                            <p v-if="contact"><img src="/landing_resources/img/icons/contact/3.svg" alt="" />
                                {{ getValueByFields(contact.fields, 'address') }}
                            </p>
                        </div>
                        <div>
                            <div class="title">Working hours</div>
                            <p>
                                <img src="/landing_resources/img/icons/contact/4.svg" alt="" />
                                {{ getValueByFields(contact.fields, 'working') }}
                            </p>
                        </div>
                        <div>
                            <div class="title">Write To Us</div>
                            <form @submit.prevent="submit">
                                <div v-if="errors.name">{{ errors.name }}</div>
                                <input type="text " placeholder="Name" v-model="form.name"/>
                                <div v-if="errors.name">{{ errors.email }}</div>
                                <input type="text " placeholder="e-mail" v-model="form.email"/>
                                <div v-if="errors.name">{{ errors.message }}</div>
                                <textarea placeholder="Text Here" v-model="form.message"></textarea>
                                <button class="title">
                                    <img src="/landing_resources/img/icons/contact/5.svg" alt="" />Send Message
                                </button>
                            </form>
                        </div>
                        <div>
                            <div class="title">Find Us On A Map</div>
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
                        </div>
                    </div>
                </section>
            </div>
        </template>

    </landing>
</template>
<script>
import Landing from "@/Layouts/Landing"


export default {
    components: {
        Landing
    },
    props: {
        errors: Object,
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
    computed: {
        contact() {
            return this.$page.props.layoutData ? this.$page.props.layoutData.contact : {}
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/mail', this.form)
        },
        getValueByFields(fields, key) {
            if (!fields[key]) {
                return ''
            }
            return fields[key].value
        },
    },
}
</script>
