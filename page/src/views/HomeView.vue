<template>
    <div>
        <div class="header-split">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#111417" fill-opacity="1" d="M0,64L60,80C120,96,240,128,360,122.7C480,117,600,75,720,69.3C840,64,960,96,1080,96C1200,96,1320,64,1380,48L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>
        <section class="header">
            <div class="row justify-content-center">
                <div class="col-md-6 name">
                    <h1>Hi, I'm James Harrison</h1>
                    <h1>Web Developer</h1>
                    <div class="row mt-20">
                        <div class="col-4 text-right">
                            <a class="btn btn-primary btn-hire-me" href="#hire-me">Hire Me</a>
                        </div>
                        <div class="col-3 ml-10">
                            <a class="btn btn-primary btn-my-work" href="#my-work">My Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 image">
                    <img class="w-three-quarter img-fluid border shadow rounded" src="/img/james-header.jpg"/>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss">
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    .header-split > svg {
        position: absolute;
        bottom: 0;
    }

    .header {
        z-index: 0;
        height: 100vh;
        background: #004c82;

        & > .row {
            height: 100%;
        }

    }

    .image {
        padding-top: 12vh;
    }

    .name {
        padding-top: 20vh;

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
</style>