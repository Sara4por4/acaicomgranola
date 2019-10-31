<template>

   <div class="order-table">
      <!-- header -->
      <div class="order-table__header row">
         <div class="col-4">
            <h4 class="tiny-text tiny-text--bold">Produtos</h4>
         </div>
         <div class="col-3">
            <h4 class="tiny-text tiny-text--bold">Data</h4>
         </div>
         <div class="col-3">
            <h4 class="tiny-text tiny-text--bold">Estado</h4>
         </div>
         <div class="col-2">
         </div>
      </div>
      <!-- header -->

      <div class="order-table__container">
         <div class="order-table__line" v-for="order in orders" @click="order.show = !order.show" :class="{ active : order.show}">
            <div class="order-table__line-content row">
               <div class="col-4">
                  <h4 class="smaller-text smaller-text--semibold">Nº {{order.ref}}</h4>
               </div>
               <div class="col-3">
                  <h4 class="smaller-text">{{order.date}}</h4>
               </div>
               <div class="col-3">
                  <h4 class="smaller-text smaller-text--semibold" :class="order.statusclass">{{order.status}}</h4>
               </div>
               <div class="col-2">
                  <i class="icon icon--caret-down"></i>
               </div>
            </div>

            <!-- details -->
            <orderDetail v-show="order.show"></orderDetail>
            <!-- details -->

         </div>
      </div>
   </div>

</template>

<script>
import orderDetail from './orderDetail';

export default {
   components: {
      orderDetail
   },
   data() {
      return {
         orders: [
            { show: false, ref: '00000', date: '00/00/0000', status: 'a enviar...', statusclass:'processing', },
            { show: false, ref: '00000', date: '00/00/0000', status: 'entregue', statusclass:'delivered', },
            { show: false, ref: '00000', date: '00/00/0000', status: 'cancelado', statusclass:'canceled', },
         ]
      }
   }
}
</script>

<style lang="css">
</style>
