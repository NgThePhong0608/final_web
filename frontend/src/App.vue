<script setup>
import Navbar from '../src/components/Navbar.vue'
import Footer from '../src/components/Footer.vue'
</script>

<template>
  <div id="app">
    <div v-if="admin">
      <router-view></router-view>
    </div>
    <div v-else>
      <Navbar />

      <div class="auth-wrapper">
        <div class="auth-inner">
          <router-view></router-view>
        </div>
      </div>
      <Footer />
    </div>
  </div>
</template>

<style scoped>
@import "./assets/css/global_style.css";
</style>
