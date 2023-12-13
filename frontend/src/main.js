import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";
import { createApp } from "vue";
import { createPinia } from "pinia";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import App from "./App.vue";
import ElementPlus from "element-plus";
import router from "../src/router";
import "@fortawesome/fontawesome-free/css/all.css";

const pinia = createPinia();
const app = createApp(App).component("font-awesome", FontAwesomeIcon);

app.use(pinia);
app.use(ElementPlus);
app.use(router);
app.mount("#app");
