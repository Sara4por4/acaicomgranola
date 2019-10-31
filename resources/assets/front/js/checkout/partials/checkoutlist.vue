<template>

   <div class="checkout-list">

      <div class="checkout-list__header">
         <div class="row">
            <div class="col-sm-5">
               <h4 class="tiny-text tiny-text--bold">Produtos</h4>
            </div>
            <div class="col-sm-1">
               <h4 class="tiny-text tiny-text--bold">Tamanho</h4>
            </div>
            <div class="col-sm-2">
               <h4 class="tiny-text tiny-text--bold">Cor</h4>
            </div>
            <div class="col-sm-2">
               <h4 class="tiny-text tiny-text--bold">QTD</h4>
            </div>
            <div class="col-sm-2">
               <h4 class="tiny-text tiny-text--bold">Total</h4>
            </div>
         </div>
      </div>

      <div class="checkout-list__el" v-for="product in products">
         <product :product="product"></product>
      </div>

   </div>

</template>

<script>
import product from './product';

export default {
   components: {
      product
   },
   data(){
      return{
         products: [
            { link: 'product-detail', promo: true, ref: '000 000', title: 'swimsuit backless metallic rose', image: 'front/img/photos/photo2.jpg', size: 's', color: 'pink', price: '33.99',},
            { link: 'product-detail', promo: false, ref: '000 000', title: 'Leggins Fit Flamingo Party', image: 'front/img/photos/photo1.jpg', size: 'm', color: 'black', price: '25.99',},
         ]
      }
   }
}
</script>

<style lang="css">
</style>
