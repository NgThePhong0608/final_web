import axios from "axios";

window.axios = axios;
axios.defaults.withCredentials = false;
// axios.defaults.baseURL = "http://localhost:8081/api";
// let backendUrl = "http://localhost:8081/api";
let backendURL = "http://127.0.0.1:8000/api";
axios.defaults.baseURL = backendURL;
