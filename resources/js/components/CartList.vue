<template>
    <h1>Корзина</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="product in products">
            <th>{{ product.id }}</th>
            <td>{{ getTitle(product.id)}}</td>
            <td>{{ getPrice(product.id)}}</td>
            <td>{{ product.quantity }}</td>
        </tr>

        </tbody>
    </table>

        <h3>ТОТАЛ: 1234</h3>

</template>

<script>
export default {
    name: "CartList",
    data() {
        return {
            products: null,
            carts: []
        }
    },
    mounted() {
        this.getCarts()

        console.log(this.products)
        console.log(this.carts)
    },
    methods: {
        getCarts() {
            this.products = JSON.parse(localStorage.getItem('cart'))
            this.products.forEach(prod => {
                axios.get('http://shop-and-adminlte/api/products/' + prod.id)
                    .then(res => {
                        this.carts.push(res.data)
                    })
            })
        },
        getTitle(id) {
            let title = this.carts.filter(c => {
                if (c.id === id) {
                    return c.title
                }
            })
            console.log(title)
        },
        getPrice(id) {
            return id
        }
    }
}
</script>

<style scoped>

</style>
