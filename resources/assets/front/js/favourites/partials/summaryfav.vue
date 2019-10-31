<template>

   <div>
      <div class="slide__container">
         <favslist></favslist>
      </div>
      <div class="slide__footer">
         <a href="#" class="btn btn--coral">Guardar Favoritos</a>
      </div>
   </div>

</template>

<script>
import favslist from './favslist';

export default {
   components: {
      favslist
   },
}
</script>

<style lang="css">
</style>
