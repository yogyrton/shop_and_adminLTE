<template>

    <div class="container">
        <h1>PRODUCTS LIST</h1>

        <div
            v-for="product in products" :key="product"
            class="row align-items-start">

            <ProductList
                :product="product"
            ></ProductList>

        </div>
    </div>


</template>

<script>
import ProductList from "./ProductList.vue";

export default {
    name: "ProductsList",
    components: {ProductList},
    mounted() {
        this.getAllProducts()
    },
    data() {
        return {
            products: null
        }
    },
    methods: {
        getAllProducts() {
            axios.get('/api/products')
                .then(res => {
                    this.products = res.data
                })

        }
    }
}
</script>

<style scoped>

</style>
