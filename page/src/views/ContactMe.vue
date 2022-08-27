<template>
    <section>
        <div class="contactme">
            <h1 class="text-center mb-0">Contact Me</h1>
            <p class="text-center mt-0">Hire, Enquire or Chat</p>
            <div class="pt-10 text-center">
                <button class="btn btn-discord mr-10">
                    <font-awesome-icon :icon="['fab', 'discord']"/> james090500#0001
                </button>
                <a href="https://github.com/james090500" target="_blank" class="btn btn-github">
                    <font-awesome-icon :icon="['fab', 'github']"/> james090500
                </a>
                <a href="mailto:james@fasttortoise.co.uk" class="btn btn-primary ml-10">
                    <font-awesome-icon icon="envelope"/> james@fasttortoise.co.uk
                </a>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
    h1 {
        line-height: 5rem;
        font-size: 7rem;
    }

    .contactme {
        background-image: url('/svg/contactme.svg');
        background-size: cover;
        background-position: center;
        min-height: 10vh;
        width: 100%;
        padding-top: 5vh;
        padding-bottom: 5vh;
    }

    .btn {
        margin-bottom: 1rem;
        box-sizing: content-box;
        border-bottom: 0.5rem solid #115ea5 !important;
    }

    .btn-discord {
        background-color: #5865F2 !important;
        border-color: #454FBF !important;

        &:active {
            background-color: #454FBF !important;
        }
    }

    .btn-github {
        background-color: #333333 !important;
        border-color: #0e0e0e !important;

        &:active {
            background-color: #0e0e0e !important;
        }
    }
</style>