<template>
    <section>
        <MyWorkView/>
        <ExperienceView/>
    </section>
</template>

<script>
    import MyWorkView from '@/views/sysadmin/MyWorkView.vue'
    import ExperienceView from '@/views/sysadmin/ExperienceView.vue'

    export default {
        components: {
            MyWorkView,
            ExperienceView
        }
    }
</script>