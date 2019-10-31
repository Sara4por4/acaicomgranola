<template>

   <div class="cart-list">
      <div class="cart-list__el" v-for="product in products">

         <favproduct :product="product"></favproduct>

      </div>
   </div>

</template>

<script>
import favproduct from './favproduct';

export default {
   components: {
      favproduct
   },
   data(){
      return{
         products: [
            { promo: true, ref: '000 000', title: 'swimsuit backless metallic rose', image: 'front/img/photos/photo2.jpg', size: 's', color: 'pink', price: '33.99',},
            { promo: false, ref: '000 000', title: 'Leggins Fit Flamingo Party', image: 'front/img/photos/photo1.jpg', size: 'm', color: 'black', price: '25.99',},
         ]
      }
   }
}
</script>

<style lang="css">
</style>
