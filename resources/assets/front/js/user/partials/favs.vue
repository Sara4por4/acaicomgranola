<template>
   <div class="order order--favs">

      <p class="order__intro text">Consulte a informação e o estado das suas encomendas online. Também pode cancelar a encomenda ou solicitar uma devolução.</p>

      <div class="order__header">
         <h4 class="tiny-text tiny-text--bold">Produtos</h4>
         <hr class="divider">
      </div>

      <div class="order__list">
         <div class="order__list-el" v-for="product in products">
            <favProduct :product="product" :key="product.id"></favProduct>
         </div>
      </div>


   </div>

</template>

<script>
import favProduct from './favProduct';


export default {
   components: {
      favProduct,
   },
   data() {
      return {
         products: [
            { id: 1, show: false, link: 'product-detail', image: 'front/img/photos/photo5.jpg', ref: '00000', name: 'Swimsuit Backless Metallic Rose', price: '20.00' },
            { id: 2, show: false, link: 'product-detail', image: 'front/img/photos/photo5.jpg', ref: '00000', name: 'Swimsuit Backless Metallic Rose', price: '20.00' },

         ]
      }
   }
}
</script>

<style lang="css">
</style>
