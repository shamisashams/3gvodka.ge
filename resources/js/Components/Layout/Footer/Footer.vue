<template>
    <footer id="footer">
        <div class="wrapper flex">
            <div class="col col_1">
                <a href="#">
                    <img src="/landing_resources/img/icons/header/2.svg" alt="" />
                    example@mail.com
                </a>
                <a href="#">
                    <img src="/landing_resources/img/icons/header/7.svg" alt="" />
                    30 Commercial Road <br />
                    Tbilisi, Georgia
                </a>
                <a href="#">
                    <img src="/landing_resources/img/icons/header/1.svg" alt="" />
                    0 32 2 444 777
                </a>
                <div class="title">Working hours</div>
                <a>
                    <img src="/landing_resources/img/icons/header/3.svg" alt="" />
                    Mon-Sat. 09:00 - 19:00 <br />Sunday: Closed
                </a>
                <div class="sm">
                    <a href="#">
                        <img src="/landing_resources/img/icons/header/4.svg" alt="" />
                    </a>
                    <a href="#">
                        <img src="/landing_resources/img/icons/header/5.svg" alt="" />
                    </a>
                    <a href="#">
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
            <div>Designed by</div>
            <img src="/landing_resources/img/logo/insite.svg" alt="" />
        </div>
    </footer>

</template>

<script>

export default {
    name: "Footer",
    components: {
    }
}
</script>
