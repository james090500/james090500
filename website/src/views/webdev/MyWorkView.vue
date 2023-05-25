<template>
    <section class="bg-very-dark">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h1 class="mb-0">My Work</h1>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <MyWorkComponent
                            image="https://minecraftcapes.net/images/capes-meta.jpg"
                            title="MinecraftCapes"
                            description="A Minecraft Mod to allow users to wear any cape in game, cost free, also allows all users to see other users capes. With around 1,500,000 users and 200,000,000 API requests a month this is my biggest project."
                            url="https://minecraftcapes.net"
                        />
                    </div>
                    <div class="col-md-4">
                        <MyWorkComponent
                            image="https://capecraft.net/images/banner.jpg"
                            title="CapeCraft"
                            description="A SMP Minecraft server with around 30-50 concurrent players and a voluntary staff team consisting of 10 people. With a custom plugins and website hosted on a dedicated debian server in Germany."
                            url="https://capecraft.net"
                        />
                    </div>
                </div>
                <div class="github-stats">
                    <h1>With various Open Source contributions on GitHub</h1>
                    <a href="https://github.com/james090500" target="_blank">
                        <img class="w-full w-md-half" src="https://github-readme-stats.vercel.app/api?username=james090500&count_private=true&show_icons=true&theme=algolia&hide_border=true"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
    h1 {
        font-size: 10rem;
    }

    .github-stats {
        height: 95vh;
        padding: 5rem;
        background-image: url("/svg/github-blob.svg");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    @media(max-width: 768px) {
        h1 {
            font-size: 4rem;
        }

        .github-stats {
            padding: 0 !important;
            background-position: top;
            height: auto;
        }
    }
</style>

<script>
    import MyWorkComponent from '@/partials/MyWorkComponent.vue'

    export default {
        components: {
            MyWorkComponent
        }
    }
</script>