<template>
   <div class="product-order product-order--fav row">

      <div class="col-6">
         <div class="product-order__img" :style="{ 'background-image': 'url(' + product.image + ')'}"></div>
         <div class="product-order__title">
            <h4 class="ref tiny-text">Ref: {{ product.ref }}</h4>
            <h4 class="name tiny-text tiny-text--bold">{{  product.name }}</h4>
            <p class="value tiny-text"><span>{{ product.price }}</span> €</p>
         </div>
      </div>

      <div class="product-order__actions col-6">
         <button type="button" name="button" class="icon-garbage"></button>
         <a class="link-underline" :href="product.link"><i class="icon icon--eye"></i><span>Ver produto</span></a>
      </div>

   </div>
</template>

<script>
export default {

   props: {
      product: {
         type: Object,
         required: true,
      }
   },
}
</script>

<style lang="css">
</style>
