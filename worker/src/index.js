import router from './router'

// Return the router
addEventListener('fetch', (event) => {
    event.respondWith(router.handle(event.request))
})