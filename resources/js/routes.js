import { createWebHistory, createRouter } from "vue-router";
import NotFound404 from "./Pages/Errors/404.vue";
import Home from "./Pages/Home.vue";

const routes = [
    { path: '/', name: "Home", component: Home },
    { path: '/:pathMatch(.*)*', name: 'NotFound404', component: NotFound404 },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
