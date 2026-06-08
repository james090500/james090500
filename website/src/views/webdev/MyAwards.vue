<template>
    <section class="bg-dark p-5">
        <h1 class="text-center">My Awards & Achievements</h1>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <AwardCard
                    class="col-md-4"
                    img="/img/awards/mta-html5-application-development-fundamentals-certified-2018.png"
                    name="MTA: HTML5 Application Development Fundamentals"
                    link="https://docs.microsoft.com/en-us/certifications/exams/98-375"
                />
                <AwardCard
                    class="col-md-4"
                    img="/img/awards/microsoft-365-certified-modern-desktop-administrator-associate.png"
                    name="Microsoft 365 Certified: Modern Desktop Administrator Associate"
                    link="https://docs.microsoft.com/en-gb/certifications/modern-desktop/"
                />
            </div>
        </div>
    </section>
</template>

<script>
import AwardCard from '@/partials/AwardCard.vue'

export default {
    components: {
        AwardCard,
    },
}
</script>

<style lang="scss" scoped>
section {
    min-height: 10vh;
}
</style>
