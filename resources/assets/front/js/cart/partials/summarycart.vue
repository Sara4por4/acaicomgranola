<template>

   <div>
      <div class="slide__container">
         <cartlist></cartlist>
      </div>
      <div class="slide__footer">
         <div class="slide__prices subtotal-price">
            <p class="tiny-text tiny-text--bold">Subtotal</p>
            <p class="tiny-text tiny-text--bold value"><span>65.00</span> €</p>
         </div>
         <div class="slide__prices subtotal-price">
            <p class="small-text small-text--bold">Total</p>
            <p class="tiny-text tiny-text--semibold">Imposto Incluído</p>
            <p class="small-text small-text--bold value"><span>65.00</span> €</p>
         </div>
         <a href="checkout" class="btn btn--black">Processar pedido</a>
      </div>
   </div>

</template>

<script>
import cartlist from './cartlist';

export default {
   components: {
      cartlist
   },
}
</script>

<style lang="css">
</style>
