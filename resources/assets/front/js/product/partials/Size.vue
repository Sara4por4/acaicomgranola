<template>
   <div class="product-details__wrap">
      <h4 class="smaller-text">Tamanho: {{ selected }}</h4>

      <ul class="product-details__sizes" v-model="selected">
         <li class="size-product" v-for="size in sizes">
            <input v-model="size.namesize" type="radio" v-bind:value="size.namesize" checked="checked" name="radio">
            <label class="small-text">{{ size.namesize }}</label>
         </li>
      </ul>

   </div>
</template>

<script>
export default {
   data () {
      return {
         selected:'',
         sizes: [
            { namesize: 'xs' },
            { namesize: 's' },
            { namesize: 'm' },
            { namesize: 'l' },
            { namesize: 'xl' },
         ]
      }
   }
}
</script>
