import { createPinia } from "pinia";
import { defineStore } from "pinia";

export const pinia = createPinia();

export const useMyStore = defineStore("myStore", {
    state: () => ({
        allFoods: [],
        user: undefined,
        admin: undefined,
    }),
    actions: {},
    mutations: {},
});
