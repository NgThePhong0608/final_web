import axios from "axios";
window.axios = axios;
axios.defaults.withCredentials = false;
let backendUrl = "http://localhost:8080/api";
axios.defaults.baseURL = backendUrl;
