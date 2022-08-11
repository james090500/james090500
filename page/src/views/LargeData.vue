<template>
    <div class="large-data">
        <h1 class="text-center mb-0" id="large-data">Large Data Handling</h1>
        <p class="text-center mt-0">A Review on a High Performance and High Usage API</p>
        <div class="pt-20 row justify-content-center">
            <div class="col-md-5">
                <CloudflareAnalyticsComponent class="h-full rounded bg-dark shadow-lg"/>
            </div>
            <div class="col-md-4 offset-md-1 px-20">
                <p>
                    MinecraftCapes is a mod for Minecraft to allow users to wear any cape on their character for free. It also offers the ability to purchase animated or glistening capes for a small price each.
                </p>
                <p>
                    The design and concept is fairly simple, users register on the website and upload a cape they like. They then install the mod on their minecraft client and everything works.
                </p>
                <p>
                    In a development sence it can be a little complicated, each time a player is loaded by the client it will send out a request to the website server to load their contents and then cache them
                    for the duration of the game. This helps stop repitive request to the API to keep it stable. Once a web request is made, the server uses the player UUID to look for their textures. If it
                    finds their textures it will then contact the SQL database to look for any of the features mention above that they have purchased. Once all this is done the response is cached in redis and
                    returned to the client.
                </p>
                <p>
                    A long side Redis caching, we also use CloudFlare to help cache the responses in their data centres further reducing load on the system. This is useful especially when we are reach requests
                    of up to 10,000,000 a day.
                </p>
                <div class="card rounded shadow-lg">
                    <strong>My Profile</strong><br>
                    <a target="_blank" href="https://minecraftcapes.net/profile/ba4161c03a42496c8ae07d13372f3371">https://minecraftcapes.net/profile/ba4161c03a42496c8ae07d13372f3371</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CloudflareAnalyticsComponent from '@/partials/CloudflareAnalyticsComponent.vue'

    export default {
        components: {
            CloudflareAnalyticsComponent
        }
    }
</script>

<style lang="scss">
    .large-data {
        padding: 5vh 0;
        min-height: 90vh;
        width: 100%;
        background-image: url('/svg/cf-graph.svg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>