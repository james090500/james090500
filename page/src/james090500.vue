<template>
    <main>
        <HomeView id="home"/>
        <MyWorkView id="my-work"/>
        <ExperienceView/>
        <LargeData/>
        <MyAwards/>
    </main>
</template>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    h1, h2, h3, h4, h5 {
        font-family: 'Bebas Neue', cursive;
    }

    .content-wrapper {
        scroll-behavior: smooth;
    }

    @keyframes slideInLeft {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInUp {
        0% {
            opacity: 0;
            transform: translateY(100%);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn {
        border: none !important;
        padding: 0 3rem !important;
    }
</style>

<script>
    import HomeView from '@/views/HomeView.vue'
    import MyWorkView from '@/views/MyWorkView.vue'
    import ExperienceView from '@/views/ExperienceView.vue'
    import LargeData from '@/views/LargeData.vue'
    import MyAwards from '@/views/MyAwards.vue'

    export default {
        components: {
            HomeView,
            MyWorkView,
            ExperienceView,
            LargeData,
            MyAwards
        }
    }
</script>