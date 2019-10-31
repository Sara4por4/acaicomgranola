<template>
   <div class="address-card checkout__address">
      <div class="address-card__header row">
         <div class="col-6">
            <h4 class="address-card__title tiny-text tiny-text--bold">Dados de faturação</h4>
         </div>
         <div class="col-6">
            <button type="button" name="button" class="address-card__btn icon icon--pencil"></button>
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
         <p class="smaller-text smaller-text--semibold">Nif</p>
         <p class="smaller-text">{{address.nif}}</p>
      </div>
   </div>
</template>

<script>
export default {
   props: {
      address: {
         type: Object,
         required: true,
      }
   },
}
</script>

<style lang="css">
</style>
