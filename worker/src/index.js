import router from './router'

// CORS
const addCorsheaders = response => {
    response.headers.set('Access-Control-Allow-Origin', '*')
    response.headers.set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
    response.headers.set('Access-Control-Allow-Headers', 'authorization, referer, origin, content-type')
    response.headers.set('Access-Control-Max-Age', '3600')
    return response
}


// Return the router
addEventListener('fetch', (event) => {
    event.respondWith(router.handle(event.request).then(addCorsheaders))
})