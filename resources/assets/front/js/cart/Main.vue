<template>

   <span ref="cartDropdown">

      <a href="#" class="nav__cart icon-bag" @click="toggleCart()"><span class="items" v-if="totalProducts > 0">{{ totalProducts }}</span></a>

      <transition name="slide">
         <div class="slide" v-if="this.visible">

            <div class="slide__header clearfix">
               <div class="slide__header-left">
                  <h4 class="tiny-text tiny-text--bold"><i class="icon-shopping-bag"></i>O teu cesto</h4>
               </div>
               <div class="slide__header-right">
                  <h4 class="tiny-text slide__counter">{{ totalProducts }} artigos</h4>
                  <button type="button"  @click="toggleCart()" class="icon-close"></button>
               </div>
            </div>

            <!-- logado -->
            <summarycart v-if="logged"></summarycart>
            <!-- end: logado -->

            <!-- não logado -->
            <div v-else>
               <div class="slide__container">
                  <p class="small-text small-text--semibold">O teu cesto está vazio!</p>
                  <p class="smaller-text">Adiciona um artigo para poder continuar com o processo.</p>
               </div>
               <div class="slide__footer">
                  <a href="#" class="btn btn--coral">Iniciar sessão</a>
                  <a href="#" class="btn btn--black">Não tem conta? Registe-se</a>
               </div>
            </div>
            <!-- end: não logado -->

         </div>
      </transition>
      <transition name="fade">
         <span class="bg-white" v-if="this.visible"></span>
      </transition>

   </span>

</template>

<script>
import summarycart from './partials/summarycart';

export default {
   components: {
      summarycart,
   },
   data () {
       return {
           visible: false,
           logged: true,
           totalProducts: 0,
       };
  },
  methods: {

     toggleCart(){
         this.visible = !this.visible;
     },

     documentClick(e) {
         let el = this.$refs.cartDropdown;
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
