<template>
   <div class="address-card">
      <div class="address-card__header">
         <h4 class="address-card__title tiny-text tiny-text--bold">{{address.title}}</h4>
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
               Aplicar esta morada
            </label>
         </div>
         <div class="col-6">
            <button type="button" name="button" class="address-card__btn icon-garbage"></button>
            <button type="button" name="button" class="address-card__btn icon icon--pencil"></button>
         </div>
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
