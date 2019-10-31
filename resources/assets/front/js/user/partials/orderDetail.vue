<template>
   <div class="order">

      <div class="order__header">
         <h4 class="tiny-text tiny-text--bold">Produtos</h4>
         <hr class="divider">
      </div>

      <div class="order__list">
         <div class="order__list-el" v-for="product in products">
            <orderProduct :product="product" :key="product.id"></orderProduct>
         </div>
      </div>

      <div class="order__data row">
         <div class="col-6">
            <div class="order__info">
               <div class="order__header">
                  <h4 class="tiny-text tiny-text--bold">Dados de Envio</h4>
                  <hr class="divider">
               </div>
               <userData></userData>
            </div>
         </div>

         <div class="col-6">
            <div class="order__info">
               <div class="order__header">
                  <h4 class="tiny-text tiny-text--bold">Dados de Faturação</h4>
                  <hr class="divider">
               </div>
               <userData></userData>
            </div>
         </div>
      </div>

      <div class="order__footer">
         <orderSummary></orderSummary>
      </div>

   </div>

</template>

<script>
import userData from './userData';
import orderProduct from './orderProduct';
import orderSummary from './orderSummary';

export default {
   components: {
      userData,
      orderProduct,
      orderSummary
   },
   data() {
      return {
         products: [
            { id: 1, show: false, image: 'front/img/photos/photo5.jpg', ref: '00000', name: 'Swimsuit Backless Metallic Rose', color: 'rosa', size: 's', price: '20.00' },
            { id: 2, show: false, image: 'front/img/photos/photo5.jpg', ref: '00000', name: 'Swimsuit Backless Metallic Rose', color: 'rosa', size: 's', price: '20.00' },

         ]
      }
   }
}
</script>

<style lang="css">
</style>
