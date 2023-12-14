<template>
  <div>
    <!-- Home Main Section -->
    <div class="container my-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="content">
            <span class="text-success">welcome foodies</span>
            <h3>Original taste from Mexico 😋</h3>
            <p>
              We guarantee to use fresh food with the best quality. Customers
              will enjoy Mexican cuisine with explosive, sophisticated flavors.
            </p>
            <router-link @click="scrollToTop()" to="/menu" class="btn btn-success">order now</router-link>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image">
            <img src="../assets/images/b.png" alt="" class="img-fluid home-img">
            <img src="../assets/images/a.png" alt="" class="img-fluid home-parallax-img">
          </div>
        </div>
      </div>
    </div>

    <!-- Home Category Section -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <router-link @click="scrollToTop()" to="/menu" class="box">
            <img src="../assets/images/taco-img.png" alt="" class="img-fluid">
            <h3>taco</h3>
          </router-link>
        </div>
        <!-- Repeat the above structure for other categories -->
      </div>
    </div>

    <!-- Home Banner Section -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="grid">
            <img src="../assets/images/dis-1.jpg" alt="" class="img-fluid">
            <div class="content">
              <span>special offer</span>
              <h3>upto 50% off</h3>
              <router-link @click="scrollToTop()" to="/menu" class="btn btn-success">order now</router-link>
            </div>
          </div>
        </div>
        <!-- Repeat the above structure for other banner items -->
      </div>
    </div>

    <!-- Home About Section -->
    <div class="container-fluid bg-light py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="image">
              <img src="../assets/images/about-img.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <span class="text-success">why choose us?</span>
              <h3 class="title">what's make our food delicious!</h3>
              <p>
                Food to customers is always guaranteed of the best quality. Our
                dishes are made by chef Quang (a 5 Michelin stars chef),
                promising to bring explosive, delicate, impressive flavors. Our
                delivery service is very professional, customers can enjoy the
                same quality at the restaurant
              </p>
              <router-link @click="scrollToTop()" to="/about" class="btn btn-success">read more</router-link>

              <div class="row mt-4">
                <div class="col-md-3">
                  <div class="icons">
                    <img src="../assets/images/serv-1.png" alt="" class="img-fluid">
                    <h3>fast delivery</h3>
                  </div>
                </div>
                <!-- Repeat the above structure for other icons -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  methods: {
    scrollToTop() {
      window.scrollTo(0, 0);
    },
  },
};
</script>

<style scoped>
/* Your scoped styles here, if any */
</style>
