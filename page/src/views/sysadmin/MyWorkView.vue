<template>
    <section class="bg-very-dark">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h1 class="mb-0">My Work</h1>
                <vue-horizontal-timeline
                    :items="items"
                    :title-substr="300"
                />
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

    .vue-horizontal-timeline {
        background: none;
        box-shadow: none;
    }
</style>
<style>
    .timeline {
        padding: 4em 0 !important;
        overflow-x: hidden !important;
    }

    .time {
        min-width: 280px !important;
    }

    .time > .content {
        margin: 0;
    }
</style>

<script>
    import MyWorkComponent from '@/partials/MyWorkComponent.vue'
    import VueHorizontalTimeline from "vue-horizontal-timeline";

    export default {
        data() {
            return {
                items: [
                    {
                        title: "College of West Anglia (2016 - 2018)",
                        content: "BTEC Level 3 Extended Diploma in computing",
                    },
                    {
                        title: "System 3 Business Solutions (2018 - Present)",
                        content: "Support Technician in an established Microsoft Gold certified business IT services company based in East Anglia .",
                    }
                ]
            }
        },
        components: {
            MyWorkComponent,
            VueHorizontalTimeline
        }
    }
</script>