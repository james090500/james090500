<template>
    <section>
        <MyWorkView/>
        <ExperienceView/>
        <LargeData/>
        <MyAwards/>
    </section>
</template>

<script>
    import MyWorkView from '@/views/webdev/MyWorkView.vue'
    import ExperienceView from '@/views/webdev/ExperienceView.vue'
    import LargeData from '@/views/webdev/LargeData.vue'
    import MyAwards from '@/views/webdev/MyAwards.vue'

    export default {
        components: {
            MyWorkView,
            ExperienceView,
            LargeData,
            MyAwards
        }
    }
</script>