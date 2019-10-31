<template>
  <form class="filters-form" action="index.html" method="post">

     <div class="filters-form__el">
        <label class="filters-form__title" :class="{ opened : show.color }" @click="show.color = !show.color">Cor</label>
        <div class="filters-form__collapse" v-show="show.color">
           <label class="color-select" v-for="colorOption in colorOptions">
              <input v-model="colorOption.color" type="radio" v-bind:value="colorOption.color" checked="checked" name="radio">
              <span class="checkmark" :class="colorOption.color"></span>
           </label>
        </div>
     </div>

     <div class="filters-form__el">
        <label class="filters-form__title" :class="{ opened : show.size }" @click="show.size = !show.size">Tamanho</label>

        <div class="filters-form__collapse" v-show="show.size">
           <label class="size-select" v-for="sizeOption in sizeOptions">
              <input type="checkbox" value="sizeOption.size">
              <span class="checkmark"></span>
              <label>{{ sizeOption.size }}</label>
           </label>
        </div>
     </div>

     <div class="filters-form__el">
        <label class="filters-form__title" :class="{ opened : show.price }" @click="show.price = !show.price">Preço</label>

        <div class="filters-form__collapse" v-show="show.price">
           <slidebar></slidebar>
        </div>
      </div>

  </form>
</template>

<script>
import slidebar from './partials/Slidebar';

export default {
   components: {
    slidebar
  },
    data () {
      return {

         show:{
            color: true,
            size: true,
            price: true
         },

        colorOptions: [
            { color: 'pink' },
            { color: 'blue' },
            { color: 'green' },
        ],
        sizeOptions: [
            { size: 'xs' },
            { size: 's' },
            { size: 'm' },
            { size: 'l' },
            { size: 'xl' },
            { size: '34' },
            { size: '36' },
        ],
      }
   },
}
</script>
