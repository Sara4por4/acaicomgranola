<template>
   <div class="checkout__methods address-card">
      <div class="checkout__methods-header row">
         <div class="col-sm-10">
            <h4 class="tiny-text tiny-text--bold">Métodos de envio</h4>
         </div>
         <div class="col-sm-2">
            <h4 class="tiny-text tiny-text--bold">Preço</h4>
         </div>
         <hr class="divisor">
      </div>

      <div class="row">
         <div class="address-card__container col-sm-10">
            <p class="smaller-text smaller-text--semibold">CTT</p>
            <p class="smaller-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
         </div>
         <div class="col-sm-2">
            <label class="checkout__check small-text small-text--bold">
               <input type="radio" name="shipping" value="">
               <span>2.50</span> €
            </label>
         </div>
         <div class="address-card__container  col-sm-10">
            <p class="smaller-text smaller-text--semibold">Registado</p>
            <p class="smaller-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
         </div>
         <div class="col-sm-2">
            <label class="checkout__check small-text small-text--bold">
               <input type="radio" name="shipping" value="">
               <span>2.50</span> €
            </label>
         </div>
         <div class="address-card__container  col-sm-10">
            <p class="smaller-text smaller-text--semibold">Correio Azul</p>
            <p class="smaller-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
         </div>
         <div class="col-sm-2">
            <label class="checkout__check small-text small-text--bold">
               <input type="radio" name="shipping" value="">
               <span>2.50</span> €
            </label>
         </div>
      </div>

   </div>
</template>

<script>
export default {

}
</script>

<style lang="css">
</style>
