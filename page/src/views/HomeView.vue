<template>
    <div>
        <div class="header-split">
            <img src="/svg/home-split.svg"/>
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
                    <img class="w-three-quarter img-fluid border shadow-lg rounded" src="/img/james-header.jpg"/>
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss">
    .header-split > img {
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
        overflow: hidden;

        & > img {
            animation: 1s ease-out 0s 1 slideInRight;
        }
    }

    .name {
        padding-top: 20vh;

        & > h1 {
            animation: 1s ease-out 0s 1 slideInUp;
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