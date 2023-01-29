<template>
    <section>
        <MyWorkView/>
        <ExperienceView/>
        <MyAwards/>
    </section>
</template>

<script>
    import MyWorkView from '@/views/sysadmin/MyWorkView.vue'
    import ExperienceView from '@/views/sysadmin/ExperienceView.vue'
    import MyAwards from '@/views/webdev/MyAwards.vue'

    export default {
        components: {
            MyWorkView,
            ExperienceView,
            MyAwards
        }
    }
</script>