<template>
    <section class="bg-very-dark">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h1 class="mb-0">My Work</h1>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <MyWorkComponent
                            title="College of West Anglia"
                            job="BTEC Level 3 Extended Diploma in computing"
                            time="2016 - 2018"
                            description="Passed with a DDM"
                        />
                    </div>
                    <div class="col-md-4">
                        <MyWorkComponent
                            title="System 3 Business Solutions"
                            job="Support Technician"
                            time="2018 - Present"
                            description="System 3 is an established Microsoft Gold certified business IT services company based in East Anglia."
                        />
                    </div>
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