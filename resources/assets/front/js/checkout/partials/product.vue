<template>
   <div class="cart-product cart-product--checkout row">

      <!-- <div class="cart-product__info row"> -->
         <div class="cart-product__header col-sm-5">
            <a :href="product.link" class="cart-product__image" :style="{ 'background-image': 'url(' + product.image + ')'}"></a>

            <p class="ref">Ref: <span>{{product.ref}}</span></p>
            <a :href="product.link" class="name smaller-text smaller-text--bold">{{product.title}}</a>

            <a href="#" class="icon-garbage"></a>
         </div>

         <p class="cart-product__el smaller-text smaller-text--bold  col-sm-1">{{product.size}}</p>

         <p class="cart-product__el smaller-text smaller-text--bold  col-sm-2">{{product.color}}</p>

         <div class="cart-product__el cart-product__count col-sm-2">
            <counter></counter>
         </div>

         <div class="cart-product__el cart-product__footer col-sm-2">

            <!-- price -->
            <div class="cart-product__total cart-product__promo" v-if="product.promo">
               <h4 class="new"><span>{{  product.price }}</span> €</h4>
               <p class="old"><span>80.00</span> €</p>
            </div>

            <h4 v-else class="cart-product__total cart-product__price small-text"><span>{{  product.price }}</span>€</h4>

            <!-- price -->
         <!-- </div> -->
      </div>
   </div>

</template>

<script>
import counter from '../../cart/partials/counter';

export default {
   props: [
      'product',
   ],
   components: {
      counter
   },
   data(){
      return{


      }
   }
}
</script>

<style lang="css">
</style>
