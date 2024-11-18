<template>
    <div
      v-if="isVisible"
      :class="['modal', { 'modal--hidden': isHiding }]"
      @animationend="onAnimationEnd"
    >
      <div :class="['modal__content', { 'modal__content--hidden': isHiding }]">
        <h2 class="modal__title">
          Создание новой <span class="light-blue">системы</span>
        </h2>
        <form @submit.prevent="handleContinue">
          <label class="modal__label">
            Имя администратора:
            <input
              class="modal__input"
              autocomplete="new-password"
              type="text"
              placeholder="Введите имя"
              required
            />
          </label>
          <label class="modal__label">
            Пароль:
            <input
              class="modal__input"
              autocomplete="new-password"
              type="password"
              placeholder="Введите пароль"
              required
            />
          </label>
          <label class="modal__label">
            Повторите пароль:
            <input
              class="modal__input"
              autocomplete="new-password"
              type="password"
              placeholder="Повторите пароль"
              required
            />
          </label>
          <label class="modal__label">
            Институт:
            <input
              class="modal__input"
              autocomplete="new-password"
              type="text"
              placeholder="Название института"
              required
            />
          </label>
          <div class="modal__actions">
            <button type="button" @click="closeModal" class="button-cancel">
              Отмена
            </button>
            <button type="submit" class="button-submit">
              Продолжить
            </button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      visible: {
        type: Boolean,
        required: true,
      },
    },
    data() {
      return {
        isHiding: false,
        isVisible: this.visible,
      };
    },
    watch: {
      visible(val) {
        if (val) {
          this.isVisible = true;
          this.isHiding = false;
        }
      },
    },
    methods: {
      closeModal() {
        this.isHiding = true;
      },
      onAnimationEnd() {
        if (this.isHiding) {
          this.isVisible = false;
          this.$emit("close");
        }
      },
      handleContinue() {
        this.isHiding = true;
        this.$emit("continue");
      },
    },
  };
  </script>
<style>
.modal {
    animation: darkBackground 0.8s forwards;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal__title {
    padding-bottom: 20px;
}

.modal--hidden {
    animation: darkBackgroundReverse 0.4s forwards;
}

.modal__content {
    animation: showModal 0.8s;
    background: #fff;
    padding: 30px;
    border-radius: 30px;
    width: 400px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.modal__content--hidden {
    animation: hideModal 0.4s;
}

.modal__content h2 {
    margin: 0 0 20px;
    font-size: 22px;
    text-align: center;
}

.modal__content form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.modal__content label {
    display: flex;
    flex-direction: column;
    font-weight: 600;
}

.modal__actions {
    display: flex;
    gap: 30px;
    margin-top: 20px;
}

.button-cancel {
    width: 180px;
    background-color: #FFF;
    border: 1px solid #E6E6E6;
    padding: 10px 15px;
    border-radius: 10px;
    cursor: pointer;
    color: #a2a2a2;
    transition: .3s;
}

.button-submit {
    width: 180px;
    background-color: #80b7ff;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 10px;
    cursor: pointer;
    transition: .3s;
    font-weight: 500;
    
}

.button-cancel:hover {
    border: 0.5px solid #a2a2a2;
    color: #000;
  }

.button-submit:hover {
    background-color: #1A6EDC;
}

.modal__label {
    display: flex;
    gap: 5px;
    font-size: 14px;
}

.modal__input {
    border: none;
    outline: none;
    padding: 0 10px;
    height: 40px;
    border-bottom: 1px solid #A2A2A2;
}

@keyframes darkBackground {
    to {
        background-color: rgba(0, 0, 0, 0.5);
    }
}

@keyframes darkBackgroundReverse {
    from {
        background-color: rgba(0, 0, 0, 0.5);
    }
    to {
        background-color: transparent;
    }
}

@keyframes showModal {
    from {
        transform: translateY(-300%);
    }
    to {
        transform: translateY(0);
    }
}

@keyframes hideModal {
    from {
        transform: translateY(0);
    }
    to {
        transform: translateY(-300%);
    }
}
</style>
