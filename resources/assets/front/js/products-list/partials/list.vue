<template>
   <div class="products-list row" :class="{ 'products-list--2' : gridtwo, 'products-list--4' : gridfour}">

      <!-- begin prod card -->
      <div class="products-list__el" v-for="product in products">

         <productcard :product="product" :key="product.id"></productcard>

      </div>
      <!-- end prod card -->

   </div>
</template>

<script>
import productcard from './product';

export default {
   components: {
    productcard,
   },
   props: [
      'products',
      'gridtwo',
      'gridfour',
   ],

}
</script>

<style lang="css">
</style>
