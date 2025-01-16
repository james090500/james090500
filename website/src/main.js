import { createApp } from "vue";

// Create the app
import james090500 from "@/james090500.vue";
const app = createApp(james090500);

//Router
import Router from './router'
app.use(Router);

// Halfmoon
import "bootstrap/dist/css/bootstrap.min.css";

// Font Awesome
import { FontAwesomeIcon, FontAwesomeLayers } from './fontawesome'
app.component('FontAwesomeIcon', FontAwesomeIcon);
app.component('FontAwesomeLayers', FontAwesomeLayers);

// Axios
import axios from 'axios'
app.config.globalProperties.axios = axios;

// Mount the app
app.mount("#app");
