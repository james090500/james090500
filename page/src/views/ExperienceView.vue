<template>
    <section>
        <div class="experience-start"></div>
        <div class="experience">
            <h1 class="text-center mb-0" id="my-experience">My Experience</h1>
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
            <div class="row justify-content-center pt-10">
                <div class="col-md-4">
                    <CloudflareAnalyticsComponent class="rounded bg-dark shadow-lg"/>
                </div>
                <div class="col-md-4 offset-md-1 bg-dark p-20 shadow rounded">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a eros a lorem rutrum porttitor. Vestibulum ut quam ut metus placerat condimentum ut eu lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec porta lorem et mollis bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer tempus vitae felis id facilisis. Sed lacinia magna eu dignissim consectetur. Donec dignissim auctor diam, nec imperdiet eros convallis at. Vestibulum tincidunt, odio sed dignissim luctus, nulla tortor aliquam urna, eu accumsan erat tellus eget velit. Donec ultricies felis justo, pharetra ultricies urna ultrices a. Duis id tempus lectus. Cras velit nibh, gravida sit amet ornare non, tristique id ligula. Vivamus a dolor leo. Sed massa eros, vulputate eget odio at, lobortis congue orci. Proin gravida magna id dignissim convallis. Sed placerat tincidunt neque.</p>
                    <p>Pellentesque tempus risus quis nisi auctor pulvinar ut sodales enim. Aenean placerat nisl sed varius scelerisque. Aenean pellentesque semper congue. Vestibulum molestie, arcu at commodo sagittis, orci nunc blandit neque, non aliquet metus nisi at tortor. Aenean sed odio laoreet, blandit enim at, feugiat tortor. Aenean in faucibus tellus, at accumsan odio. Curabitur eu consequat dolor. Pellentesque at erat a ante euismod ullamcorper. Fusce ex metus, pulvinar at tristique ut, placerat vitae lectus. Fusce tempor sem ac pharetra mollis. Suspendisse elementum mattis consequat. Nulla hendrerit gravida velit, sit amet venenatis dolor.</p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
    h1 {
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
        min-height: 110vh;
        width: 100%;
        background-image: url('/img/experience.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .cloudflare {
        padding-top: 5vh;
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
</style>

<script>
    import CloudflareAnalyticsComponent from '@/partials/CloudflareAnalyticsComponent.vue'

    export default {
        components: {
            CloudflareAnalyticsComponent
        }
    }
</script>