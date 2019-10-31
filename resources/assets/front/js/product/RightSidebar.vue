<template>
   <div class="product-sidebar" v-sticky="{ zIndex: 2, stickyTop: 80}">

      <div class="product-sidebar__inner">
         <div class="product-details">

            <!-- select color -->
            <color></color>
            <!-- select color -->

            <!-- select size -->
            <div class="product-details__wrap row">
               <div class="col-sm-7">
                  <size></size>
               </div>
               <div class="col-sm-5">
                  <a href="#" class="product-details__size-guide tiny-text"><i class="icon icon--hanger"></i><span>Guia tamanhos</span></a>
               </div>
            </div>
            <!-- select size -->

            <!-- details info -->
            <div class="product-details__collapse">
               <div class="product-details__collapse-el" :class="{active : info.show}" v-for="info in infos">
                  <button @click="info.show = !info.show" class="tiny-text tiny-text--semibold">{{ info.title }}</button>

                  <transition name="slide-up">
                     <div class="smaller-text editable"  v-if="info.show"  :id="'collapse-' + info.id">
                           {{info.text}}
                     </div>
                  </transition>
               </div>
            </div>
            <!-- details info -->

            <div class="product-details__btns">

               <!-- add to favorites -->
               <fav></fav>
               <!-- add to favorites -->

               <!-- add to cart -->
               <add></add>
               <!-- add to cart -->

            </div>

         </div>
      </div>
   </div>

</template>

<script>

import VueSticky from 'vue-sticky'

export default {

   data(){
      return {

         infos: [
            {id: '1', show: false, title : 'descrição', text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea est laborum.'},
            {id: '2', show: false, title : 'composição', text: 'Exterior: 80% poliamida, 20% elastano Forro: 100% poliéster Interior: 100% poliuretano'},
            {id: '3', show: false, title : 'cuidados', text: 'lorem ipsum dolor sit amet'},
         ]
      };
   },

   directives: {
      'sticky': VueSticky,
   },
}
</script>


<style>

.slide-up-enter {
   height:0;
   transform-origin: top;
   opacity: 0;
}
.slide-up-enter-active {
   transition: all .6s ease-in;
}
.slide-up-leave-active {
   transition: all .6s ease-in;
}

</style>
