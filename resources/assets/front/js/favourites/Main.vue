<template>

   <span ref="favsDropdown">

      <a href="#" class="nav__cart icon-heart" @click="toggleFavs()"></a>

      <transition name="slide">
         <div class="slide" v-if="this.visible">
            <div class="slide__header clearfix">
               <div class="slide__header-left">
                  <h4 class="tiny-text tiny-text--bold"><i class="icon-heart"></i>Favoritos</h4>
               </div>
               <div class="slide__header-right">
                  <h4 class="tiny-text slide__counter">{{ totalProducts }} artigos</h4>
                  <button type="button"  @click="toggleFavs()" class="icon-close"></button>
               </div>
            </div>

            <div v-if="empty">
               <div class="slide__container">
                  <p class="small-text small-text--semibold">A sua lista de favoritos está vazia!</p>
                  <p class="smaller-text">Guarde os artigos que mais gosta para não os perder de vista.</p>
               </div>
               <div class="slide__footer">
                  <a href="#" class="btn btn--coral">Iniciar sessão</a>
                  <a href="#" class="btn btn--black">Não tem conta? Registe-se</a>
               </div>
            </div>

            <summaryfav v-else></summaryfav>

         </div>
      </transition>
      <transition name="fade">
         <span class="bg-white" v-if="this.visible"></span>
      </transition>

   </span>

</template>

<script>
import summaryfav from './partials/summaryfav';

export default {
   components: {
      summaryfav
   },
   data () {
       return {
          empty: false,
           visible: false,
           totalProducts: 0,
       };
  },
  methods: {

     toggleFavs(){
         this.visible = !this.visible;
     },

     documentClick(e) {
         let el = this.$refs.favsDropdown;
         let target = e.target;
         if ( el != null && el !== target && !el.contains(target)) {
             this.visible=false;
         }
     },

 }
}
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.slide-enter, .slide-leave-to {
   transform: translateX(100%);
}


.slide-enter-active {
   transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-leave-active {
   transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

</style>
