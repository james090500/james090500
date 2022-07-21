<template>
    <main>
        <router-view v-slot="{ Component }">
            <transition name="fade" mode="out-in">
                <component :is="Component" />
            </transition>
        </router-view>
    </main>
</template>

<script>
// import MainMenu from '@/views/partials/MainMenu.vue'
// import MainFooter from '@/views/partials/MainFooter.vue'

export default {
}
</script>