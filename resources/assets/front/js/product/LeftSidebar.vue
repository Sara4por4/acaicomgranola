<template>
   <div class="product-sidebar" v-sticky="{ zIndex: 2, stickyTop: 80}">
      <div class="product-sidebar__inner">

         <div class="product-info">

            <h4 class="product-info__ref smaller-text smaller-text--semibold">Ref.: SS1 METALLIC ROSE</h4>
            <h3 class="product-info__title text text--caps text--bold">Swimsuit backless metallic rose</h3>
            <div class="editable small-text">
               <p>Fato-de-banho sem costas com nó à frente.</p>
            </div>

            <div class="product-info__price" v-if="promo">
               <p class="old small-text small-text--bold">80.00 €</p>
               <h4 class="new small-title small-title--bold">32.50<span> €</span></h4>
            </div>
            <div class="product-info__price" v-else>
               <h4 class="small-title small-title--bold">32.50<span> €</span></h4>
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
         promo: true,
      };
   },

   directives: {
      'sticky': VueSticky,
   },
}
</script>
