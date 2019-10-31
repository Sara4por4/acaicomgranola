<template>
   <div class="container container--xxlscreens">

      <!-- start page header -->
      <pageheader @gridtwo = 'gridtwoActive' @gridfour = 'gridfourActive' ></pageheader>
      <!-- start page header -->

      <div class="section__container">

         <productlist :products="products" :gridtwo="gridtwo" :gridfour="gridfour"></productlist>

      </div>

   </div>
</template>

<script>
import pageheader from './partials/header';
import productcard from './partials/product';
import productlist from './partials/list';

export default {
   components: {
    pageheader,
    productcard,
    productlist,
  },
  data () {
    return {
      gridtwo: true,
      gridfour: false,
      products: [
          { id: '1', image1: 'front/img/photos/photo1.jpg', image2: 'front/img/photos/photo2.jpg', labeltype: 'promo', label: '10%', title: 'Nome do Produto', link: 'product-detail', price: '50' },
          { id: '2', image1: 'front/img/photos/photo2.jpg', image2: 'front/img/photos/photo4.jpg', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
          { id: '3', image1: 'front/img/photos/photo9.png', image2: 'front/img/photos/photo1.jpg', labeltype: '', label: '', title: 'Nome do Produto', link: 'product-detail', price: '50' },
          { id: '4', image1: 'front/img/photos/photo4.jpg', image2: 'front/img/photos/photo9.png', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
          { id: '5', image1: 'front/img/photos/photo1.jpg', image2: 'front/img/photos/photo2.jpg', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
      ]
   }

 },

 methods: {
     gridtwoActive: function(){
         // console.log(this.tasks.description);
         this.gridtwo = true;
         this.gridfour = false;
     },
     gridfourActive: function(){
         // console.log(this.tasks.description);
          this.gridfour = true;
          this.gridtwo = false;
     },
  }

}
</script>

<style lang="css">
</style>
