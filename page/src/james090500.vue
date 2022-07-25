<template>
    <main>
        <HomeView id="home"/>
        <MyWorkView id="my-work"/>
    </main>
</template>

<style>
    .content-wrapper {
        scroll-behavior: smooth;
    }
</style>

<script>
    import HomeView from '@/views/HomeView.vue'
    import MyWorkView from '@/views/MyWorkView.vue'

    export default {
        components: {
            HomeView,
            MyWorkView
        }
    }
</script>