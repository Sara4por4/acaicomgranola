<template>
   <div class="address-card checkout__address">
      <div class="address-card__header row">
         <div class="col-6">
            <h4 class="address-card__title tiny-text tiny-text--bold">Dados de envio</h4>
         </div>
         <div class="col-6">
            <button @click="modal = true" type="button" name="button" class="address-card__btn icon icon--pencil"></button>
         </div>
         <hr class="divisor">
      </div>
      <div class="address-card__container">
         <p class="smaller-text">{{address.address}}</p>
      </div>
      <div class="address-card__container">
         <p class="smaller-text smaller-text--semibold">Contacto</p>
         <p class="smaller-text">{{address.contact}}</p>
      </div>
      <div class="address-card__container">
         <p class="smaller-text smaller-text--semibold">Email</p>
         <p class="smaller-text">{{address.email}}</p>
      </div>
      <div class="address-card__footer row">
         <div class="col-6">
            <label class="tiny-text">
               <input type="checkbox" name="" value="">
               Aplicar morada na faturação
            </label>
         </div>
      </div>

      <div class="checkout__modal modal" v-show="modal">
         <div class="modal-dialog">
            <div class="modal-content">
               <button class="icon-cancel" type="button" name="button" @click="modal = false"></button>

               <div class="row">
                  <div class="col-sm-6 col-8">
                     <select name="">
                        <option value="">Selecionar outra</option>
                        <option value="1">Morada Casa</option>
                        <option value="2">Morada Escritório</option>
                     </select>
                  </div>
               </div>

               <addressForm></addressForm>

            </div>
         </div>
      </div>

   </div>
</template>

<script>
import addressForm from '../../user/forms/addressForm';

export default {
   props: {
      address: {
         type: Object,
         required: true,
      }
   },
   components: {
      addressForm
   },
   data () {

      return{
         modal:false
      }
   }
}
</script>

<style lang="css">
</style>
