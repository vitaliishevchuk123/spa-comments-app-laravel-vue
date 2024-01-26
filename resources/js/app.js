import './bootstrap';
import '../css/app.css';
import {createApp} from 'vue'
import app from "./Layouts/MainLayout.vue";
import router from "./routes";

createApp(app)
    .use(router)
    .mount("#app");
