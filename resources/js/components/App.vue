<template>
    <nav>
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <router-link :to="{ name: 'main' }" class="nav-link" >Главная</router-link>
            </li>

            <li class="nav-item">
                <router-link :to="{ name: 'products' }" class="nav-link" >Товары</router-link>
            </li>

            <li class="nav-item">
                <router-link :to="{ name: 'cart' }" class="nav-link" >Корзина</router-link>
            </li>

        </ul>
    </nav>

    <router-view></router-view>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
