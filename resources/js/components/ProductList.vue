<template>
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Название: {{ product.title}}</h5>
            <p class="card-title">Категория: {{ product.category.title}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li v-for="color in product.colors" class="list-group-item">Цвет: {{ color.title }}</li>
            <li class="list-group-item">Цена: {{ product.price}} $</li>
            <li class="list-group-item">Количество: {{ product.quantity}}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Ссылка карточки</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductList",
    props: [
        'product'
    ]
}
</script>

<style scoped>

</style>
