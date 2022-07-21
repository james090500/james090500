import { createApp } from "vue";

// Create the app
import james090500 from "@/james090500.vue";
const app = createApp(james090500);

//Router
import Router from "./router";
app.use(Router);

// Halfmoon
import halfmoon from "halfmoon";
import "halfmoon/css/halfmoon.min.css"
window.halfmoon = halfmoon;
document.addEventListener("DOMContentLoaded", () => {
    halfmoon.onDOMContentLoaded();
});

import Particles from 'particles.vue3'
app.use(Particles)

// Mount the app
app.mount("#app");
