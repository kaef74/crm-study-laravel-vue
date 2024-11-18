<template>
  <div>
    <header>
      <router-link to="/" class="header__logo">Menteos</router-link>
      <div
        :class="isAuthorized ? 'authorized' : 'just-start'"
      >
        <div class="header__buttons" v-if="!isAuthorized">
          <button class="button button-language">RU</button>
          <button class="button button-create" @click="$emit('openModal')">
            Создать систему
          </button>
        </div>
        <div class="header__buttons authorized" v-else>
          <div class="authorized__info">
            <p class="info__welcome">
              Добрый день, {{ fullName }}!
            </p>
            <p class="info__comment">Мы рады, что ты вернулся!</p>
          </div>
          <div class="authorized__container">
            <div class="header__search">
              <input
                class="search__input"
                placeholder="Найди то, что тебе нужно!"
              />
              <img src="@/assets/search.png" class="header__icon" />
            </div>
            <div class="header__notification">
              <img src="@/assets/notification.png" class="header__icon" />
            </div>
            <div class="header__user">
              <img src="@/assets/user.png" class="user__photo" />
              <div class="user__info">
                <h3>{{ userData?.lastName }} {{ userData?.firstName }}</h3>
                <h4>{{ userData?.position }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  props: {
    isAuthorized: {
      type: Boolean,
      required: true,
    },
    userData: {
      type: Object,
      default: null,
    },
  },
  computed: {
    fullName() {
      if (this.userData) {
        return `${this.userData.firstName} ${this.userData.patronymic}`;
      }
      return "";
    },
  },
};
</script>
  
  <style scoped>
  header {
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-between;
    padding: 0 5px;
    padding-bottom: 40px;
  }
  
  .header__logo {
    font-size: 20px;
    font-weight: 800;
    color: #333333;
  }
  
  .header__buttons {
    display: flex;
    gap: 30px;
  }

  .just-start {
    height: 50px;
    align-items: center;
  }

  .authorized {
    width: 1080px;
    height: 30px;
    gap: 15px;
    display: flex;
    justify-content: space-between;
  }
  
  .button-language {
    background-color: #FFF;
    font-weight: 500;
  }
  
  .button-create:hover {
    background-color: #2D88FF;
  }

  .header__search {
    width: 230px;
    height: 30px;
    background-color: #F4F4F4;
    border-radius: 30px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .search__input {
    color: #A2A2A2;
    width: 100%;
    font-size: 10px;
    outline: none;
    border: none;
    background-color: transparent;
  }

  .header__icon {
    width: 15px;
    height: 15px
  }

  .header__notification {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #F4F4F4;
    border-radius: 50%;
    cursor: pointer;
    transition: .3s;
  }

  .header__notification:hover {
    background-color: #d9d9d9;
  }

  .header__user {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
  }

  h3 {
    font-size: 12px;
  }

  h4 {
    font-size: 10px;
    color: #A2A2A2;
    font-weight: 500;
  }

  .user__photo {
    width: 30px;
    height: 30px;
    border-radius: 50%;
  }

   .header__user:hover h4 {
    text-decoration: underline;
    text-underline-position: under;
  } 
  
  .authorized__info {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }

  .authorized__container {
    display: flex;
    gap: 15px;
    align-items: center;
    justify-content: center;
  }

  .info__comment {
    font-size: 12px;
    font-weight: 500;
    color: #A2A2A2;
  }

  .info__welcome {
    font-size: 16px;
    font-weight: 600;
  }

  </style>
  