import { createPinia } from "pinia";
import { defineStore } from "pinia";

export const pinia = createPinia();

export const useCounterStore = defineStore({
    id: "counter",
    state: () => ({ count: 0 }),
    actions: {
        increment() {
            this.count++;
        },
        decrement() {
            this.count--;
        },
    },
});
