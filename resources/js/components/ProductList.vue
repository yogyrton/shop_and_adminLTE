<template>
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Название: {{ product.title }}</h5>
            <p class="card-title">Категория: {{ product.category }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li v-for="color in product.colors" class="list-group-item">Цвет: {{ color.title }}</li>
            <li class="list-group-item">Цена: {{ product.price }} $</li>
            <li class="list-group-item">Количество: {{ product.quantity }}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Подробнее</a>
            <hr>

            <input type="number" v-model="count" @input="addCount">

            <a href="#" class="card-link" @click.prevent="addToCart(product.id, count)">Добавить в корзину</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductList",
    props: [
        'product'
    ],
    data() {
        return {
            count: 1,
            cart: 0
        }
    },
    methods: {
        addToCart(id, count) {
            let cart = localStorage.getItem('cart')
            let newProduct = [
                {
                    id: id,
                    quantity: count
                }
            ]

            if (!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct))
            } else {
                cart = JSON.parse(cart)

                cart.forEach(p => {
                    if (p.id === id) {
                        p.quantity += count
                        newProduct = null
                    }
                })

                Array.prototype.push.apply(cart, newProduct)
                localStorage.setItem('cart', JSON.stringify(cart))
            }

        },
        addCount() {
            if (this.product.quantity < this.count) {
                this.count = this.product.quantity
            }

            if (this.count <= 1) {
                this.count = 1
            }
        }
    }
}
</script>

<style scoped>

</style>
