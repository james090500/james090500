import { createRouter, createWebHistory } from 'vue-router'

// Views
import HomeView from '@/views/HomeView.vue'

// Routes
const routes = [
    {
        path: '/',
        name: 'home',
        meta: {
            title: 'Home'
        },
        component: HomeView
    }
]

const router = new createRouter({
    history: createWebHistory(),
    routes: routes
})

router.beforeEach((to, from, next) => {
    halfmoon.deactivateAllDropdownToggles()

    if(to.meta.title != undefined) {
        document.title = `${to.meta.title}  | MinecraftCapes.Net`
        document.querySelector('meta[name="title"]').setAttribute("content", document.title);
        document.querySelector('meta[property="og:title"]').setAttribute("content", document.title);
        document.querySelector('meta[property="twitter:title"]').setAttribute("content", document.title);
    }

    let contentWrapper = document.getElementsByClassName('content-wrapper')[0];
    if(contentWrapper) {
        contentWrapper.scrollTo({ top: 0, behavior: 'smooth' });
    }

    next();
})

export default router;