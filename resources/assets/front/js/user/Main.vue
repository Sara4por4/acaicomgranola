<template>
   <div class="stores-area">
      <div class="row">
         <div class="col-sm-4">

            <div class="stores-area__info">
               <div class="section__header left-align">
                 <h3 class="text text--caps">Olá! <span>Catarina</span></h3>
                 <hr class="divisor">
               </div>
               <div class="section__container">
                 <ul class="info-menu">
                     <li :class="{active : menu.id == active_menu}" :key="menu.id" v-for="menu in menus">
                        <button @click="menuClick(menu)" class="smaller-text smaller-text--semibold">{{menu.title}}</button>
                     </li>
                 </ul>
                 <a href="#" class="link-underline"><i class="icon-close"></i><span>Logout</span></a>
               </div>
            </div>

         </div>
         <div class="col-sm-8">

               <div class="section__header left-align">
                  <h3 class="text text--caps">{{ title }}</h3>
                  <hr class="divisor">
               </div>
               <div class="section__container">

                     <orders v-if="this.active_menu == 1"></orders>
                     <favs v-if="this.active_menu == 2"></favs>
                     <addressList v-if="this.active_menu == 3"></addressList>
                     <userInfo v-if="this.active_menu == 4"></userInfo>
                     <userPass v-if="this.active_menu == 5"></userPass>

               </div>

        </div>
     </div>
  </div>
</template>

<script>
import orders from './partials/orders';
import favs from './partials/favs';
import addressList from './partials/address';
import userInfo from './partials/userInfo';
import userPass from './partials/userPass';

export default {
   components:{
      orders,
      favs,
      addressList,
      userInfo,
      userPass,
    },
   data(){
      return{
         title: 'Minhas compras',
         active_menu: 1,
         menus: [
           { id : 1, title: 'Minhas compras'},
           { id : 2, title: 'Meus favoritos'},
           { id : 3, title: 'Moradas de envio'},
           { id : 4, title: 'Dados pessoais'},
           { id : 5, title: 'Alterar password'},
        ]
      }
   },
   methods: {
      menuClick(item){
         this.active_menu = item.id;
         this.title = item.title;
      }
   }
}
</script>

<style lang="css">
</style>
