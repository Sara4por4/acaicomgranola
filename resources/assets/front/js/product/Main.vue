<template>

   <div class="product row">

      <div class="col-sm-3">
         <leftsidebar></leftsidebar>
      </div>

      <div class="col-sm-6">
         <slick ref="slick" :options="slickOptions" class="product-images" @click="open" >
            <img v-for="photo in photos" :src="photo.image" alt="">
         </slick>
      </div>

      <div class="col-sm-3">
         <rightsidebar></rightsidebar>
      </div>

      <div class="product-image-modal" v-if="modal"  tabindex="-1" role="dialog" ref="dropdownMenu">
         <div class="product-images">
            <img v-for="photo in photos" :src="photo.image" alt="">
         </div>
      </div>

   </div>

</template>

<script>
import Slick from 'vue-slick';

export default {
   components: {
     Slick
  },
   data(){
      return {
         modal: false,
         photos: [
            { image: 'front/img/photos/photo1.jpg' },
            { image: 'front/img/photos/photo2.jpg' },
            { image: 'front/img/photos/photo6.jpg' },
         ],
         slickOptions: {
            arrows:false,
            autoplay: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade:false,
            cssEase: 'ease-in',
            responsive:[
               {
                  breakpoint: 4000,
                  settings: "unslick",
               },
               {
                  breakpoint: 576,
                  settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                  }
               }
            ]
         }
      }
   },
   methods:{

     open: function(){

        this.modal= !this.modal;

        $('body').css('overflow', 'hidden');
     },

      documentClick(e){
        let el = this.$refs.dropdownMenu
        let target = e.target

         if (( el == target) || el.contains(target)) {
          this.modal=false;
          $('body').css('overflow', 'auto');
        }
      }
    },
    created () {
      document.addEventListener('click', this.documentClick)
    },
    destroyed () {
    // important to clean up!!
    document.removeEventListener('click', this.documentClick)
  }

}
</script>

<style lang="css">
</style>
