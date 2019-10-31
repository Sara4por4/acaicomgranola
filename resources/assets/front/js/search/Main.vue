<template>
   <div class="nav__search container">

      <searchform></searchform>


      <!-- start page header -->
      <!-- start page header -->

      <div class="section__container">

         <div class="search-empty">
            <div class="search-empty__container">
               <h2 class="section-title section-title--caps text-center">Tenta outra vez!</h2>
               <p class="small-text">Não foram encontrados produtos para a sua pesquisa.</p>
               <br>
               <p class="smaller-text">Tente pesquisar outra vez usando estas dicas:</p>
               <p class="smaller-text">Verifica a ortografia</p>
               <p class="smaller-text">Às vezes um termo mais geral é mais fácil de encontrar.</p>
            </div>
         </div>

         <!-- products -list -->

         <!-- products -list -->
      </div>

   </div>

</template>

<script>
import pageheader from '../products-list/partials/header';
import searchform from './partials/searchForm';
import productlist from '../products-list/partials/list';

export default {
   components: {
    searchform,
    pageheader,
    productlist
   },
   data () {
     return {
       gridtwo: true,
       gridfour: false,
       products: [
           { id: '1', image: 'front/img/photos/photo1.jpg', labeltype: 'promo', label: '10%', title: 'Nome do Produto', link: 'product-detail', price: '50' },
           { id: '2', image: 'front/img/photos/photo2.jpg', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
           { id: '3', image: 'front/img/photos/photo9.png', labeltype: '', label: '', title: 'Nome do Produto', link: 'product-detail', price: '50' },
           { id: '4', image: 'front/img/photos/photo4.jpg', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
           { id: '5', image: 'front/img/photos/photo1.jpg', labeltype: 'new', label: 'new', title: 'Nome do Produto', link: 'product-detail', price: '50' },
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
