<template>
   <div class="product-details__wrap">
      <h4 class="smaller-text" for="">Cor: <span>{{color}}</span></h4>

      <label class="product-details__inputs color-select">
         <input type="radio" v-model="color" v-bind:value="a" checked="" name="radio">
         <span class="checkmark pink"></span>
      </label>

      <label class="product-details__inputs color-select">
         <input type="radio" v-model="color" v-bind:value="b" checked="" name="radio">
         <span class="checkmark blue"></span>
      </label>

      <label class="product-details__inputs color-select">
         <input type="radio" v-model="color" v-bind:value="c" checked="" name="radio">
         <span class="checkmark green"></span>
      </label>
   </div>


</template>

<script>
export default {
   data () {
      return {
         color: 'pink',
         a: 'pink',
         b: 'blue',
         c: 'green',
      }
   }
}
</script>
