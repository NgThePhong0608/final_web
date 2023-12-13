import { defineConfig } from "vite";
import Vue from "@vitejs/plugin-vue";

export default defineConfig({
  plugins: [Vue()],
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "@fortawesome/fontawesome-free/css/all.css";`,
      },
    },
  },
});
