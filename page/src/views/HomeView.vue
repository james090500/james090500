<template>
    <section class="header">
        <div class="row justify-content-center">
            <div class="col-md-6 name">
                <h1>Hi, I'm James Harrison</h1>
                <h1>Web Developer</h1>
                <div class="row mt-20">
                    <div class="col-4 mr-10 text-right">
                        <a class="btn btn-primary btn-my-work" href="#my-work">My Work</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary btn-experience" href="#my-experience">My Experience</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 offset-lg-0 image">
                <img class="w-three-quarter img-fluid border shadow-lg rounded" src="/img/james-header.jpg"/>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
    .header {
        background-image: url('/svg/home-split.svg');
        background-position: center;
        background-size: cover;

        height: 100vh;

        & > .row {
            height: 100%;
        }

    }

    @media(max-width: 768px) {
        .image {
            padding-top: 1rem !important;
            text-align: center;
        }
    }

    .image {
        padding-top: 12vh;
        overflow: hidden;

        & > img {
            animation: 1s ease-out 0s 1 slideInRight;
        }
    }

    @media(max-width: 768px) {
        .name {
            padding: 1rem;
            padding-top: 0vh !important;

            & > h1 {
                font-size: 5rem;
            }

            & > h1:last-of-type {
                line-height: 8rem !important;
            }
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

        .btn-experience {
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