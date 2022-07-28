import { createApp } from "vue";

// Create the app
import james090500 from "@/james090500.vue";
const app = createApp(james090500);

// Halfmoon
import halfmoon from "halfmoon";
import "halfmoon/css/halfmoon.min.css"
window.halfmoon = halfmoon;
document.addEventListener("DOMContentLoaded", () => {
    halfmoon.onDOMContentLoaded();
});

// Font Awesome
import { FontAwesomeIcon, FontAwesomeLayers } from './fontawesome'
app.component('FontAwesomeIcon', FontAwesomeIcon);
app.component('FontAwesomeLayers', FontAwesomeLayers);

// Axios
import axios from 'axios'
app.config.globalProperties.axios = axios;

// Mount the app
app.mount("#app");
