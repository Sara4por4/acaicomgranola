<template>
   <div>

      <ejs-slider id='type' :tooltip="tooltip"  :value='value' :type="type"></ejs-slider>

   </div>
</template>

<script>
import { SliderPlugin } from "@syncfusion/ej2-vue-inputs";
Vue.use(SliderPlugin);

export default {
  data() {
    return {
      // Enable the button option in Slider
      showButtons: true,
      value: [0, 100],
      type: 'Range',
      mintype: 'MinRange',
      minvalue: 0,
      tooltip: { placement: 'After', isVisible: true, showOn: 'Always' },
    };
  }
}
</script>
