<template>
   <div class="products-page__header page-header"  ref="grid">
      <div class="row">
         <div class="col-sm-6 d-none d-sm-block">
            <ul class="page-header__breadcrumbs breadcrumbs">
               <li>
                  <a class="tiny-text" href="#">Swimwear</a>
               </li>
               <li class="active">
                  <a class="tiny-text" href="#">New Collection</a>
               </li>
            </ul>
         </div>
         <div class="col-sm-6">
            <div class="page-header__el d-none d-sm-inline-block">
               <!-- grid buttons -->
               <ul class="page-header__grid">
                  <li>
                     <p class="tiny-text tiny-text--semibold">ver</p>
                  </li>
                  <li :class="{active : gridtwo}">
                     <a class="page-grid__el" @click="gridtwoActive" href="#"><span class="icon icon--grid-large"></span></a>
                  </li>
                  <li :class="{active : gridfour}">
                     <a class="page-grid__el" @click="gridfourActive" href="#"><span class="icon icon--grid"></span></a>
                  </li>
               </ul>
               <!-- grid buttons -->
            </div>

            <filters></filters>

         </div>
      </div>
   </div>

</template>

<script>
import filters from './filters';

export default {
   components: {
    filters
  },

  props: ['products'],

  data() {
     return{
        gridtwo: true,
        gridfour: false,
     }
 },
   methods: {
       gridtwoActive: function(){
           // console.log(this.tasks.description);
           this.gridtwo = true;
           this.gridfour = false;
           this.$emit('gridtwo');
       },
       gridfourActive: function(){
           // console.log(this.tasks.description);
            this.gridfour = true;
            this.gridtwo = false;
            this.$emit('gridfour');
       },

   }
}
</script>

<style lang="css">
</style>
