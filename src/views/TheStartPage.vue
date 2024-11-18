<template>
    <section class="start">
        <h1 class="start__title">Система управления <span class="light-blue">образовательным процессом</span></h1>
        <p class="start__text">
            Создайте свою систему управления образовательным процессом для
            высшего учебного заведения.  Конструктор собственной контрольной панели
            для управления учебным процессом в вашем ВУЗе.
        </p>
        <p class="start__text">
            Система ещё не создана. Для создания - <strong>зарегистрируйте</strong> нового администратора:
        </p>
        <div class="start__buttons">
            <button class="button button-create">
                Новая система
                <img src="@/assets/start-arrow.png" class="start__arrow"/>
            </button>
            <button class="button button-about">
                Подробнее
            </button>
        </div>
    </section>
</template>
<script>
export default {
    
}
</script>
<style>
    h1 {
        font-size: 40px;
    }

    .start {
        max-width: 800px;
        height: auto;
        margin-top: 100px;
        padding: 0 50px;
    }

    .start__text {
        font-size: 16px;
        color: #A2A2A2;
        line-height: 150%;
        padding-bottom: 20px;
    }
    
    .start__buttons {
        margin-top: 20px;
        display: flex;
        gap: 20px;
    }

    .button-create {
        width: 200px;
        height: 50px;
        border-radius: 10px;
        background-color: #80b7ff;
        color: #FFFFFF;
        font-size: 16px;
        font-weight: 500;
        transition: background-color .3s;
    }

    .button-about {
        border-radius: 10px;
        width: auto;
        height: 50px;
        padding: 0 20px;
        background-color: #FFF;
        border: 1px solid #E6E6E6;
        transition: border .3s, color .3s;
        font-size: 16px;
        font-weight: 500;
        color: #A2A2A2;
    }

    .button-about:hover {
        border: 0.5px solid #a2a2a2;
        color: #000;
    }

    .start__arrow {
        width: 20px;
        height: 20px;
        transition: transform .3s;
    }

    .button-create:hover .start__arrow {
        transform: translateX(5px);
    }

</style>