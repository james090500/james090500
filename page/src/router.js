import { createRouter, createWebHistory } from 'vue-router'

import WebDev from '@/views/WebDev.vue'
import SysAdmin from '@/views/SysAdmin.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        meta: {
            title: 'Home'
        },
        component: null
    },
    {
        path: '/webdev',
        name: 'webdev',
        meta: {
            title: 'Web Developer'
        },
        component: WebDev
    },
    {
        path: '/sysadmin',
        name: 'sysadmin',
        meta: {
            title: 'System Administrator'
        },
        component: SysAdmin
    }
]

const router = new createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router;