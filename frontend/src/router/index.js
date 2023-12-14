import { createWebHistory, createRouter } from "vue-router";
import LoginView from "../views/authentication/LoginView.vue";
import RegisterView from "../views/authentication/RegisterView.vue";
import HomeView from "../views/HomeView.vue";
const routes = [
    {
        path: '/',
        name: "Home",
        component: HomeView
    },
    {
        path: "/login",
        name: "Login",
        component: LoginView,
    },
    {
        path: "/register",
        name: "Register",
        component: RegisterView,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
