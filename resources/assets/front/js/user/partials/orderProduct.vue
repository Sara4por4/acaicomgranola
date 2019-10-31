<template>
   <div class="product-order row">

      <div class="col-6">
         <div class="product-order__img" :style="{ 'background-image': 'url(' + product.image + ')'}"></div>
         <div class="product-order__title">
            <h4 class="ref tiny-text">Ref: {{ product.ref }}</h4>
            <h4 class="tiny-text tiny-text--bold">{{  product.name }}</h4>
         </div>
      </div>
      <div class="product-order__details col-3">
         <p class="tiny-text">Cor: <span>{{ product.color }}</span></p>
         <p class="tiny-text">Size: <span>{{ product.size }}</span></p>
      </div>
      <div class="product-order__price col-3">
         <p class="tiny-text"><span>{{ product.price }}</span> €</p>
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
