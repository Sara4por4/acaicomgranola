<template>

   <span ref="slide">

       <a href="#" class="icon-padlock" @click="toggleSlide()"></a>

      <transition name="slide">
         <div class="slide" v-if="this.visible">
            <div class="slide__header clearfix">
               <div class="slide__header-left">
                  <h4 class="tiny-text tiny-text--bold"><i class="icon-padlock"></i>Iniciar sessão</h4>
               </div>
               <div class="slide__header-right">
                  <button type="button"  @click="toggleSlide()" class="icon-close"></button>
               </div>
            </div>
            <div class="slide__container">
               <p class="small-text small-text--semibold">Já sou utilizador</p>
               <p class="smaller-text">Introduza o seu e-mail e a sua palavra-passe para se identificar.</p>
               <loginForm></loginForm>
            </div>
            <div class="slide__footer">
               <a href="#" class="btn btn--coral" type="submit" value="submit">Iniciar sessão</a>
               <a href="#" class="btn btn--black">Não tem conta? Registe-se</a>
            </div>
         </div>
      </transition>
      <transition name="fade">
         <span class="bg-white" v-if="this.visible"></span>
      </transition>

   </span>

</template>

<script>
import loginForm from './partials/loginForm';

export default {
   data () {
       return {
           visible: false,
       };
  },
  components: {
   loginForm
 },
  methods: {

     toggleSlide(){
         this.visible = !this.visible;
     },

     documentClick(e) {
         let el = this.$refs.slide;
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
