<template>
   <div class="counter">

      <div class="counter__el">
         <button @click="decrementCounter">
            <i class="icon-less"></i>
         </button>
      </div>

      <div class="counter__el">
        <h2 class="counter__total">{{counter}}</h2>
      </div>

      <div class="counter__el">
         <button @click="incrementCounter">
            <i class="icon-plus"></i>
         </button>
      </div>

    </div>
</template>

<script>
export default {
  data() {
    return {
      counter: 0
    };
  },
  methods: {
    incrementCounter() {
      this.counter++;
    },
    decrementCounter() {
      this.counter--;
    }
  }
};
</script>

<style lang="css">
</style>
