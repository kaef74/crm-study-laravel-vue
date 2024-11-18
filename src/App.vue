<template>
  <div class="window">
    <TheHeader
      :isAuthorized="isAuthorized"
      :userData="userData"
      @openModal="showModal = true"
    />
    <section class="window__content">
      <TheNavigation v-if="isNavigationVisible" />
      <router-view @openModal="showModal = true" />
    </section>
    <TheRegistration
      :visible="showModal"
      @close="showModal = false"
      @continue="goToSystem"
    />
  </div>
  <p class="copyright">© Menteos</p>
</template>

<script>
import TheHeader from "./components/TheHeader.vue";
import TheNavigation from "./components/TheNavigation.vue";
import TheRegistration from "./components/TheRegistration.vue";

export default {
  components: {
    TheHeader,
    TheNavigation,
    TheRegistration,
  },
  data() {
    return {
      showModal: false,
      isAuthorized: false,
      isNavigationVisible: false, // Скрываем навигацию по умолчанию
      userData: null,
    };
  },
  mounted() {
    this.loadUserData();
  },
  methods: {
    goToSystem() {
      this.showModal = false;
      this.isAuthorized = true;
      this.isNavigationVisible = true; // Показываем навигацию
      this.$router.push("/system");
    },
    async loadUserData() {
      try {
        const response = await fetch("/data/data.json");
        this.userData = await response.json();
      } catch (error) {
        console.error("Ошибка загрузки данных пользователя:", error);
      }
    },
  },
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

a {
  text-decoration: none;
}

.window {
  width: 1280px;
  height: 700px;
  border-radius: 30px;
  background-color: #FFFFFF;
  box-shadow: 0 4px 8px rgba(0,0,0,0.25);
  padding: 25px;
}

.window__content {
  display: flex;
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
  font-size: 10px;
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
