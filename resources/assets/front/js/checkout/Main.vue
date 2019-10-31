<template>
   <div>
      <div class="section__header checkout__header">
         <h1 class="checkout__title section-title section-title--caps"><span>O teu cesto</span></h1>
         <h3 class="checkout__subtitle section-title"><span>2 artigos</span></h3>

         <div class="checkout-wizard">
            <div class="checkout-wizard__el active">
               <h3 class="text text--bold">1</h3>
            </div>
            <div class="checkout-wizard__el">
               <h3 class="text text--bold">2</h3>
            </div>
            <div class="checkout-wizard__el">
               <h3 class="text text--bold">3</h3>
            </div>
         </div>

      </div>

      <div class="section__container">

         <!-- empty -->
         <div class="checkout__empty" v-if="empty">
            <h3 class="subtitle subtitle--caps subtitle--bold">O seu Cesto está vazio</h3>
            <p class="section-title">Adicione um artigo para poder continuar com o processo</p>
         </div>
         <!-- empty -->

         <!-- 1 step -->
         <checkoutlist></checkoutlist>
         <!-- 1 step -->

         <!-- 2 step -->
         <div class="row">
            <div class="col-sm-6">
               <addresscard :address="address"></addresscard>
            </div>
            <div class="col-sm-6">
               <invoicecard :address="address"></invoicecard>
            </div>
         </div>
         <shipping></shipping>
         <payment></payment>
         <!-- 2 step -->

         <!-- summary -->
         <checkoutsummary></checkoutsummary>
         <!-- summary -->

         <!-- final -->
         <div class="checkout__final">
            <h3 class="subtitle subtitle--caps subtitle--bold">Obrigado!</h3>
            <p class="section-title">A tua compra foi concluída com sucesso! Conhece os nossos novos artigos, vais adorar!</p>
         </div>
         <!-- final -->

      </div>
   </div>

</template>

<script>
import checkoutlist from './partials/checkoutlist';
import checkoutsummary from './partials/checkoutsummary';
import addresscard from './partials/addresscard';
import invoicecard from './partials/invoicecard';
import shipping from './partials/shippingcard';
import payment from './partials/payment';

export default {
   empty: false,
   components: {
      checkoutlist,
      checkoutsummary,
      addresscard,
      shipping,
      payment,
      invoicecard
   },
   data() {
      return {
         address:
            { nif: '00000', address: 'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contact:'000 000 000', email:'info@net.pt' },

      }
   }
}
</script>

<style lang="css">
</style>
