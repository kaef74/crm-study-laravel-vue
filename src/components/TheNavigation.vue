<template>
    <ul class="navigation">
        <li 
            class="navigation__item" 
            v-for="(item, index) in navigationItems" 
            :key="item.name" 
            :style="{ animationDelay: `${index * 0.08}s` }"
        >
            <router-link :to="`/${item.name}`" class="navigation__link">
                <img class="navigation__icon" :src="getIconPath(item.name)" alt="" />
                <p>{{ item.label }}</p>
            </router-link>
        </li>
        <div class="line" :style="{ animationDelay: `${navigationItems.length * 0.08}s` }" />
        <li 
            class="navigation__item" 
            v-for="(item, index) in additionalItems" 
            :key="item.name" 
            :style="{ animationDelay: `${(index + navigationItems.length + 1) * 0.08}s` }"
        >
            <router-link :to="`/${item.name}`" class="navigation__link">
                <img class="navigation__icon" :src="getIconPath(item.name)" alt="" />
                <p>{{ item.label }}</p>
            </router-link>
        </li>
    </ul>
</template>

<script>
export default {
    data() {
        return {
            navigationItems: [
                { name: "main", label: "Главная" },
                { name: "university", label: "Институт" },
                { name: "cathedra", label: "Кафедры" },
                { name: "directions", label: "Направления" },
                { name: "teachers", label: "Преподаватели" },
                { name: "students", label: "Студенты" },
                { name: "attendance", label: "Успеваемость" },
                { name: "grade", label: "Посещаемость" },
                { name: "schedule", label: "Расписание" },
                { name: "calendar", label: "Календарь" },
            ],
            additionalItems: [
                { name: "account", label: "Аккаунт" },
                { name: "settings", label: "Настройки" },
                { name: "exit", label: "Выйти" },
            ],
        };
    },
    methods: {
        getIconPath(name) {
            return require(`@/assets/${name}.png`);
        },
    },
};
</script>

<style scoped>

.navigation {
    width: 130px;
    height: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: flex-start;
}

.navigation__item {
    width: 100%;
    height: 25px;
    border-radius: 5px;
    padding: 0 10px;
    display: flex;
    gap: 10px;
    align-items: center;
    font-size: 10px;
    color: #A2A2A2;
    transition: 0.3s;
    opacity: 0; 
    animation: fadeIn 0.4s ease-in-out forwards; 
}

.navigation__link {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: inherit;
}

.navigation__icon {
    width: 15px;
    height: 15px;
}

.navigation__item:hover {
    background-color: #333;
    color: #fff;
    cursor: pointer;
}

.line {
    width: 100%;
    height: 1px;
    border-radius: 10px;
    background-color: #D9D9D9;
    opacity: 0;
    animation: fadeLine 0.8s ease-in-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeLine {
    from {
        opacity: 0;
        width: 0%;
    }
    to {
        opacity: 1;
        width: 100%;
    }
}
</style>
