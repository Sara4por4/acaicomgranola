<template>
   <div class="product-card">
      <span class="product-card__label label" :class="'label--' + product.labeltype">{{  product.label }}</span>

      <!-- se for apenas 1 foto -->
      <div v-if="one" class="product-card__img" :style="{ 'background-image': 'url(' + product.image + ')'}"></div>
      <!-- se for apenas 1 foto -->

      <!-- se forem mais fotos -->
      <div v-else class="product-card__slideshow-wrapper">
         <slick ref="slick" :options="slickOptions" class="product-card__slideshow">
            <a class="product-card__slideshow-slider" :href="product.link">
               <div class="product-card__img" :style="{ 'background-image': 'url(' + product.image1 + ')'}"></div>
            </a>
            <a class="product-card__slideshow-slider" :href="product.link">
               <div class="product-card__img" :style="{ 'background-image': 'url(' + product.image2 + ')'}"></div>
            </a>
         </slick>
         <div class="product-card__slideshow-arrows"></div>
      </div>
      <!-- end: se forem mais fotos -->

      <a class="product-card__caption" :href="product.link">
         <p  class="prod-title name">{{  product.title }}</p>

         <div class="product-card__promo" v-if="promo">
            <p class="product-card__value old prod-title"><span>80.00</span> €</p>
            <h4 class="product-card__value new prod-title"><span>{{  product.price }}</span> €</h4>
         </div>
         <div v-else>
            <h4 class="product-card__value prod-title"><span>{{  product.price }}</span> €</h4>
         </div>

      </a>
   </div>
</template>

<script>
import Slick from 'vue-slick';

export default {
   components: {
     Slick
   },
   props: {
      product: {
         type: Object,
         required: true,
      }
   },
   data(){
      return{
         promo: true,
         one: false,
         slickOptions: {
           arrows:true,
           autoplay: false,
           infinite: true,
           slidesToShow: 1,
           slidesToScroll: 1,
           fade:false,
           cssEase: 'ease-in',
           // appendArrows: '.product-card__slideshow-arrows',
           prevArrow: '<button class="slick-arrow slick-prev icon-previous-4"></button>',
           nextArrow: '<button class="slick-arrow slick-next icon-next-3"></button>',
         }
      }
   }

}
</script>

<style lang="css">
</style>
