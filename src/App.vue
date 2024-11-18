<template>
  <div class="window">
    <TheHeader @openModal="showModal = true" />
    <section class="window__content">
      <TheStartPage @openModal="showModal = true" />
    </section>
    <TheRegistration :visible="showModal" @close="showModal = false" />
  </div>
  <p class="copyright">© Menteos</p>
</template>

<script>
import TheHeader from './components/TheHeader.vue';
import TheStartPage from './views/TheStartPage.vue';
import TheRegistration from './components/TheRegistration.vue';

export default {
  components: {
    TheHeader,
    TheStartPage,
    TheRegistration
  },
  data() {
    return {
      showModal: false, 
    };
  }
};
</script>
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

#app {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: 'Montserrat', sans-serif
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif
}

h1 {
  padding-bottom: 40px;
}

.window {
  width: 1280px;
  height: 700px;
  border-radius: 30px;
  background-color: #FFFFFF;
  box-shadow: 0 4px 8px rgba(0,0,0,0.25);
  padding: 30px;
}



button {
  outline: none;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.copyright {
  margin-top: 20px;
  font-size: 14px;
  color: #A2A2A2;
}

/* Text Colors */

.light-blue {
  color: #80b7ff;
}

/* ---------------- */

/* Text Weight */

.bold {
  font-weight: 800;
}

/* ---------------- */

</style>
