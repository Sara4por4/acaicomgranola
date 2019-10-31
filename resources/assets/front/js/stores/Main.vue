<template>
   <div class="row stores-area">
      <div class="col-sm-4">
         <div class="stores-area__info">
            <div class="section__header left-align">
               <h3 class="text text--bold text--caps">Lojas</h3>
               <hr class="divisor">
            </div>
            <div class="section__container">

               <div class="store" v-for="store in stores">
                  <a href="#" @click="toggle(this)" :class="{active : store.visible}" class="store__title tiny-text tiny-text--bold">{{store.city}}</a>

                  <div class="store__info" v-if="store.visible">
                     <div class="store__header">
                        <p class="small-text">{{store.address}}</p>
                        <a href="#" target="_blank" class="store__link small-text small-text--semibold"><i class="icon icon--map"></i><span>Indicações</span></a>
                     </div>
                     <div class="store__contact">
                        <h4 class="small-text small-text--semibold contact-info__title">Contacto</h4>
                        <p class="small-text">{{store.contacts}}</p>
                     </div>
                     <div class="store__contact">
                        <h4 class="small-text small-text--semibold contact-info__title">Email</h4>
                        <p class="small-text">{{store.email}}</p>
                     </div>
                     <div class="store__contact">
                        <h4 class="small-text small-text--semibold contact-info__title">Horário</h4>
                        <p class="small-text">{{store.schedule}}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-8">

         <a href="contacts" class="stores-area__btn round-btn round-btn--small"><span><i class="icon-chat"></i></span></a>

         <div class="section__container">
            <!-- map -->
            <iframe v-for="store in stores" v-if="store.visible" :src="store.map" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <!-- map -->
         </div>
      </div>
  </div>
</template>

<script>
export default {

   data () {
       return {
           stores:[
             {city:'porto', visible: true, map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.5855653618187!2d-8.689518684333466!3d41.20900811499678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2468c40ef91547%3A0x821342a3ccfd6e48!2sMar%20Shopping!5e0!3m2!1spt-PT!2spt!4v1571917987369!5m2!1spt-PT!2spt',
              address:'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contacts: '000 000 000', email: 'info@net.com', schedule: 'Todos os dias das 10h às 23h'},
             {city:'comporta', visible: false, map: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200189.4826611329!2d-8.877449751129731!3d38.37303135645816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1961194248ce65%3A0xd2b865d77c8ca91!2sComporta!5e0!3m2!1spt-PT!2spt!4v1572257805462!5m2!1spt-PT!2spt',
              address:'Mar Shopping, Av. Dr. Óscar Lopes, 4450-337 Leça da Palmeira', contacts: '000 000 000', email: 'info@net.com', schedule: 'Todos os dias das 10h às 23h'},
          ]
       };
  },

  methods:{
     toggle: function(){
        _.map(this.stores, function(store, visible){

          store.visible = !store.visible;

       })
     },

 }

}
</script>

<style lang="css">
</style>
