import {createRouter, createWebHistory} from "vue-router";
import MainPage from "./components/MainPage.vue";
import ProductsList from "./components/ProductsList.vue";

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
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
