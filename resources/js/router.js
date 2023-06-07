import {createRouter, createWebHistory} from "vue-router";
import MainPage from "./components/MainPage.vue";
import ProductsList from "./components/ProductsList.vue";
import CartList from "./components/CartList.vue";

const routes = [
    {
        path: '/',
        name: 'main',
        component: MainPage
    },
    {
        path: '/products',
        name: 'products',
        component: ProductsList
    },
    {
        path: '/cart',
        name: 'cart',
        component: CartList
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
