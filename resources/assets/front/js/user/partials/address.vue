<template>
   <div class="address-list">

      <p class="address-list__intro text">Utilize o livro de endereços para armazenar todos os endereços de envio que deseje (a sua casa, o
      trabalho, o domicílio familiar,…). Assim evitará ter de preencher o endereço de envio cada vez que
      fizer um pedido.</p>

      <div class="row">
         <div class="address-list__el col-sm-6" v-for="address in addresses">
            <addresscard :address="address"></addresscard>
         </div>
      </div>
      
      <a href="#" class="round-btn round-btn--small"><span><i class="icon icon--plus"></i></span>Nova Morada</a>
   </div>

</template>

<script>
import addresscard from './addressCard';

export default {
   components: {
      addresscard
   },
   data() {
      return {
         addresses: [
            { title: 'Nome da Morada', address: 'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contact:'000 000 000', email:'info@net.pt' },
            { title: 'Nome da Morada', address: 'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contact:'000 000 000', email:'info@net.pt' },
            { title: 'Nome da Morada', address: 'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contact:'000 000 000', email:'info@net.pt' },
         ]
      }
   }
}
</script>
<style lang="css">
</style>
