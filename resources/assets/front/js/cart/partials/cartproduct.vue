<template>
   <div class="cart-product clearfix">

      <div class="cart-product__image" :style="{ 'background-image': 'url(' + product.image + ')'}"></div>

      <div class="cart-product__info">
         <div class="cart-product__header">
            <p class="ref">Ref: <span>{{product.ref}}</span></p>
            <p class="name">{{product.title}}</p>
            <div class="cart-product__details">
               <p>Tamanho: <span>{{product.size}}</span></p>
               <p>Cor: <span>{{product.color}}</span></p>
            </div>
            <a href="#" class="icon-garbage"></a>
         </div>

         <div class="cart-product__footer">
            <!-- count -->
            <div class="cart-product__count">
               <counter></counter>
            </div>
            <!-- count -->

            <!-- price -->
            <div class="cart-product__total cart-product__promo" v-if="product.promo">
               <p class="old"><span>80.00</span> €</p>
               <h4 class="new"><span>{{  product.price }}</span> €</h4>
            </div>

            <h4 v-else class="cart-product__total cart-product__price"><span>{{  product.price }}</span>€</h4>

            <!-- price -->
         </div>
      </div>
   </div>

</template>

<script>
import counter from './counter';

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
