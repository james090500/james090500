<template>
    <section>
        <div class="experience-start"></div>
        <div class="experience" id="my-experience">
            <h1 class="text-center mb-0">My Experience</h1>
            <p class="text-center mt-0">PHP, SQL, VueJS, HTML, CSS, JavaScript, Java, PowerShell, NodeJS</p>
            <div class="row justify-content-center pt-10">
                <div class="col-md-2 p-20 p-md-0">
                    <img class="w-full align-middle" src="https://github-readme-stats.vercel.app/api/top-langs/?username=james090500&langs_count=10&theme=algolia&hide_border=true">
                </div>
                <div class="col-md-5 offset-md-1 p-20 p-md-0">
                    <p>
                        I first started programming with Java in 2016 for MinecraftCapes. Since then, I have broadened my knowledge with various languages, libraries, packages and operating systems.
                    </p>
                    <p>
                        Most my experience is as a full stack developer. I am confident in server-side languages such as PHP as well as key libraries such as Laravel.
                        I also am extremely confident in HTML, CSS and JavaScript with my choice of framework being VueJS to create seamless single page applications.
                    </p>
                    <p>
                        For example, MinecraftCapes, which is my largest ongoing project, is hosted on a Debian VPS. I then use Laravel as the backend which is connected to a MySQL database
                        and also a Redis database for quick caching. MinecraftCapes also uses a Vue SPA so the user can quickly navigate around the website. All of this is behind CloudFlare
                         to ensure strict caching and security.
                    </p>
                    <p>
                        I have also recently been learning key web services such as CloudFlare Workers, CloudFlare Pages and R2 Buckets.
                    </p>
                    <p>
                        <strong>Read more on my experience handling large amounts of API Requests</strong>
                    </p>
                    <a class="btn btn-primary btn-large-data" href="#large-data">Read More</a>
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

    .experience-start, .experience {
        height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .experience-start {
        position: absolute;
        background-image: url('/svg/experience-start.svg');
    }

    .experience {
        padding-top: 20vh;
        padding-bottom: 5vh;
        min-height: 110vh;
        background-image: url('/img/experience.jpg');
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