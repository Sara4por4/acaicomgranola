<template>
   <div class="stores-area">
      <div class="row">
         <div class="col-sm-4">
            <div class="stores-area__info">
               <div class="section__header left-align">
                 <h3 class="text text--bold text--caps">Informações</h3>
                 <hr class="divisor">
               </div>
               <div class="section__container">
                 <ul class="info-menu">
                     <li :class="{active : menu.show}"  v-for="menu in menus">
                        <button @click="menuClick(menu.id)" class="smaller-text smaller-text--semibold">{{menu.title}}</button>
                     </li>
                 </ul>
               </div>
            </div>
         </div>
         <div class="col-sm-8" :key="menu.id" v-for="menu in menus" v-show="menu.show">
            <div class="section__header left-align">
               <h3 class="text text--caps" >{{ menu.title }}</h3>
               <hr class="divisor">
               <a href="#" class="round-btn round-btn--small"><span><i class="icon-chat"></i></span></a>
            </div>
            <div class="section__container">
               <div class="text editable">
                  {{ menu.text }}
               </div>
            </div>
         </div>
     </div>
  </div>
</template>

<script>
export default {

   data(){
      return{
         menus: [
           { id : 1, title: 'política de privacidade',  show: true, text:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli anim id est laborum.'},
           { id : 2, title: 'política de cookies',  show: false, text:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},
           { id : 3, title: 'termos e condições',  show: false, text:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},
        ]
      }
   },
   methods: {
      menuClick(id){

         _.map(this.menus, function(menu, show){
            menu.show = false;

            if (menu.id == id) {
               menu.show = true;

               console.log(id);
            }
         });
      }
   }
}
</script>

<style lang="css">
</style>
