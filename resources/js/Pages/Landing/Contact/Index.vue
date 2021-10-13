<template>
    <landing>
        <div class="wrapper">
            <section class="contact_page">
                <div class="title60">Contact Us</div>
                <div class="grid">
                    <div>
                        <div class="title">Contact</div>
                        <p><img src="/landing_resources/img/icons/contact/1.svg" alt="" />0 32 2 444 777</p>
                        <p><img src="/landing_resources/img/icons/contact/2.svg" alt="" />example@mail.com</p>
                        <p>
                            <img src="/landing_resources/img/icons/contact/3.svg" alt="" />30 Commercial Road
                            Tbilisi, Georgia
                        </p>
                    </div>
                    <div>
                        <div class="title">Working hours</div>
                        <p>
                            <img src="/landing_resources/img/icons/contact/4.svg" alt="" /> Mon-Sat. 09:00 -
                            19:00
                            <br />
                            Sunday: Closed
                        </p>
                    </div>
                    <div>
                        <div class="title">Write To Us</div>
                        <form action="">
                            <input type="text " placeholder="Name" />
                            <input type="text " placeholder="e-mail" />
                            <textarea placeholder="Text Here"></textarea>
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

    </landing>
</template>
<script>
import Landing from "@/Layouts/Landing"

export default {
    components: {
        Landing,

    },
}
</script>
