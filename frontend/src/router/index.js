import LoginView from "../views/authentication/LoginView.vue";
import RegisterView from "../views/authentication/RegisterView.vue";
import { createWebHistory, createRouter } from "vue-router";

const routes = [
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
