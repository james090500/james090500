<template>
    <section class="bg-very-dark">
        <div class="header z-10 shadow-lg rounded">
            <div class="row justify-content-center">
                <div class="col-md-6 name">
                    <h1>Hi, I'm James Harrison</h1>
                    <h1>Web Developer*</h1>
                    <small>* but not a graphic designer</small>
                    <div class="row mt-20">
                        <div class="col-4 text-right">
                            <router-link class="btn btn-primary btn-hire-me" to="/hire">Hire Me</router-link>
                        </div>
                        <div class="col-3 ml-10">
                            <router-link class="btn btn-primary btn-my-work" to="/work">My Work</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 image">
                    <img class="w-full img-fluid" src="/img/half-james.png"/>
                </div>
            </div>
        </div>
        <Particles id="background-particles" url="/particlesjs-config.json" :particlesInit="particlesInit" :particlesLoaded="particlesLoaded"/>
    </section>
</template>

<style lang="scss">
    section {
        background: linear-gradient(45deg, #7F0012 5%, #1B0A07 86%);
        height: 100vh;
    }

    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    .header {
        background: #0e0e0e;
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: 0;
        left: 0;
        margin: 0 auto;
        height: 75vh;
        width: 75vw;

        & > .row {
            height: 100%;
        }
    }

    .name {
        padding-top: 25vh;

        & > h1 {
            font-family: 'Bebas Neue', cursive;
            font-size: 8rem;
        }

        & > h1:last-of-type {
            margin-bottom: 0;
            padding-bottom: 0;
            line-height: 5rem;
        }

        & .btn {
            border: none !important;
            padding: 0 3rem !important;
        }

        .btn-hire-me {
            background-position: center;
            transition: 0.5s;
            background-size: 200% auto;
            background-image: linear-gradient(228deg, #178fff 0%, #ab37b9 100%) !important;

            &:hover {
                background-position: top left;
            }
        }

        .btn-my-work {
            background-position: center;
            transition: 0.5s;
            background-size: 200% auto;
            background-image: linear-gradient(228deg, #dcdf5b 0%, #db470d 100%) !important;

            &:hover {
                background-position: top left;
            }
        }
    }

    .image > img {
        position: absolute;
        bottom: 0;
    }

    #home-particles {
        width: 100vw;
        height: 100vh;
        overflow: hidden;
    }
</style>

<script>
    import { loadFull } from "tsparticles";

    export default {
        methods: {
            particlesInit: async (engine) => {
                await loadFull(engine);
            },
            particlesLoaded: async (container) => {
                console.log("Particles container loaded", container);
            }
        }
    }
</script>