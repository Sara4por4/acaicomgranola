<template>

   <span  class="page-header__el" ref="filtersDropdown">


      <a href="#" @click="toggleFilters()" class="page-header__btn smaller-text smaller-text--semibold">Mostrar filtros</a>


      <transition name="slide">
         <div class="slide filters" v-if="this.visible">
            <a href="#" @click="toggleFilters()" class="page-header__btn open smaller-text smaller-text--semibold">Ocultar filtros</a>
            <hr>
            <p class="page-header__count smaller-text">0 artigos</p>

            <selectform></selectform>

         </div>
      </transition>

   </span>

</template>

<script>
import selectform from '../forms/selectForm';

export default {
   components: { selectform },
   data () {
       return {
           visible: false,
           totalProducts: 0,
       };
  },
  methods: {

     toggleFilters(){
         this.visible = !this.visible;
     },

     documentClick(e) {
         let el = this.$refs.filtersDropdown;
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
