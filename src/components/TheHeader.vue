<template>
    <header>
        <p class="header__logo">Menteos</p>
        <div class="header__buttons">
            <button class="button button-language">
                RU
            </button>
            <button class="button button-create">
                Создать систему
            </button>
        </div>
    </header>
</template>
<script>
export default {
    
}
</script>
<style>

header {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
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

.button-language {
    background-color: #FFF;
    font-weight: 500;
}

.button-create:hover {
    background-color: #2D88FF;
}


</style>