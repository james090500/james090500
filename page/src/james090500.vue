<template>
    <main>
        <!-- <router-view v-slot="{ Component }">
            <transition name="fade" mode="out-in">
                <component :is="Component" />
            </transition>
        </router-view> -->
        <HomeView/>
        <MyWorkView/>
    </main>
</template>

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