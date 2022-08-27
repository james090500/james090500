<template>
    <main>
        <HomeView/>
        <router-view v-slot="{ Component }">
            <transition>
                <component :is="Component" id="top-item" />
            </transition>
        </router-view>
        <ContactMe/>
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

    .v-enter-active,
    .v-leave-active {
        transition: opacity 0.5s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }
</style>

<script>
    import HomeView from '@/views/HomeView.vue'
    import WebDev from '@/views/WebDev.vue';
    import SysAdmin from '@/views/SysAdmin.vue';
    import ContactMe from '@/views/ContactMe.vue';

    export default {
        data() {
            return {
                webDev: true
            }
        },
        watch: {
            $route: {
                handler: function(to, _from) {
                    if(to.meta.title != undefined) {
                        document.title = `James Harrison | ${to.meta.title}`
                        document.querySelector('meta[name="title"]').setAttribute("content", document.title);
                        document.querySelector('meta[property="og:title"]').setAttribute("content", document.title);
                        document.querySelector('meta[property="twitter:title"]').setAttribute("content", document.title);
                    }

                    setTimeout(() => {
                        let contentWrapper = document.getElementsByClassName('content-wrapper')[0];
                        let topItem = document.getElementById('top-item')
                        if(contentWrapper && topItem) {
                            contentWrapper.scrollTo({ top: topItem.offsetTop, behavior: 'smooth' });
                        }
                    }, 200)
                },
                imediate: true
            }
        },
        components: {
            HomeView,
            WebDev,
            SysAdmin,
            ContactMe
        }
    }
</script>