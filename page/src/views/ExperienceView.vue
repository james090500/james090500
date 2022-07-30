<template>
    <section>
        <div  id="my-experience" class="experience-start"></div>
        <div class="experience">
            <h1 class="text-center mb-0">My Experience</h1>
            <p class="text-center mt-0">PHP, SQL, VueJS, HTML, CSS, JavaScript, Java, PowerShell, NodeJS</p>
            <div class="row justify-content-center pt-10">
                <div class="col-md-2 p-20 p-md-0">
                    <img class="w-full align-middle" src="https://github-readme-stats.vercel.app/api/top-langs/?username=james090500&langs_count=10&theme=algolia&hide_border=true">
                </div>
                <div class="col-md-5 offset-md-1 p-20 p-md-0">
                    <p>
                        I first started programming with Java in 2016 for MinecraftCapes. Since then I have broadened my knowlodge with various languages, libraries, packages and operating systems.
                    </p>
                    <p>
                        Most my experience is as a full stack developer. I am confident in server side languages such as PHP as well as key libraries such as Laravel.
                        I also am extremely confident in HTML, CSS and JavaScript with my choice of framework being VueJS to create seemless single page applications.
                    </p>
                    <p>
                        For example MinecraftCapes, which is my largest ongoing project, is hosted on a Debian VPS. I then use Laravel as the backend which is connected to a MySQL database
                        and also a Redis database for quick caching. MinecraftCapes also uses a Vue SPA so the user can quickly navigate around the website. All of this is behind CloudFlare
                         to ensure strict caching and security.
                    </p>
                    <p>
                        I have also recently been learning key web services such as CloudFlare Workers, CloudFlare Pages and R2 Buckets.
                    </p>
                    <p>
                        <strong>Read more on my experience handling large amounts of API Requests</strong>
                    </p>
                    <a class="btn btn-primary btn-large-data" href="#large-data">My Work</a>
                </div>
            </div>
        </div>
        <div class="cloudflare">
            <h1 class="text-center mb-0" id="large-data">Large Data Handling</h1>
            <p class="text-center mt-0">A Review on a High Performance and High Usage API</p>
            <div class="pt-20 row justify-content-center">
                <div class="col-md-5">
                    <CloudflareAnalyticsComponent class="h-full rounded bg-dark shadow-lg"/>
                </div>
                <div class="col-md-4 offset-md-1 shadow rounded px-20">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facilis modi optio, eius animi saepe in quisquam laborum ducimus sequi natus eveniet voluptates dignissimos nulla dolorem, nihil iure! Ratione, pariatur.</p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
    h1 {
        line-height: 5rem;
        font-size: 7rem;
    }

    .experience-start {
        position: absolute;
        height: 100vh;
        width: 100%;
        background-image: url('/svg/experience-start.svg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .experience {
        padding-top: 20vh;
        padding-bottom: 5vh;
        min-height: 110vh;
        width: 100%;
        background-image: url('/img/experience.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .cloudflare {
        padding: 5vh 0;
        min-height: 100vh;
        width: 100%;
        background-image: url('/svg/cf-graph.svg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .btn-large-data {
        transition: 0.5s;
        background-size: 200% auto;
        background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5  51%, #00d2ff  100%) !important;

        &:hover {
            background-position: right center;
        }
    }

    .frosted:before {
        content: "";
        position: absolute;
        background: inherit;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: inset 0 0 2000px #0e0e0e;
        filter: blur(50px);
        margin: -20px;
    }

    .frosted {
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);
        border-radius: 5px;
        position: relative;
        z-index: 1;
        background: inherit;
        overflow: hidden;
    }
</style>

<script>
    import CloudflareAnalyticsComponent from '@/partials/CloudflareAnalyticsComponent.vue'

    export default {
        components: {
            CloudflareAnalyticsComponent
        }
    }
</script>