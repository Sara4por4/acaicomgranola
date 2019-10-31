<template>
   <div class="stores-area">
      <div class="row">
         <div class="col-sm-4">
            <div class="stores-area__info" v-sticky="{ zIndex: 2, stickyTop: 90}">
               <div class="section__header left-align">
                 <h3 class="text text--bold text--caps">Guia de Compra</h3>
                 <hr class="divisor">
               </div>
               <div class="section__container">
                 <ul class="info-menu">
                     <li :class="{active : menu.show}"  v-for="menu in menus">
                        <a :href="'#' + menu.id" v-smooth-scroll @click="menuClick(menu.id)" class="smaller-text smaller-text--semibold">{{menu.title}}</a>
                     </li>
                     <li>
                        <a href="#7" v-smooth-scroll @click="menuClick(7)" class="smaller-text smaller-text--semibold">Perguntas frequentes</a>
                     </li>
                 </ul>
               </div>
            </div>
         </div>
         <div class="col-sm-8">

            <div class="section__header left-align">
               <a href="contacts" class="round-btn round-btn--small"><span><i class="icon-chat"></i></span></a>
            </div>

            <div class="guide">
               <div class="guide__el" :id="menu.id" v-for="menu in menus">

                  <h3 class="guide__title smaller-text smaller-text--bold smaller-text--caps" >{{ menu.title }}</h3>
                  <div class="section__container">
                     <div class="text editable">
                        {{ menu.text }}
                     </div>
                  </div>
               </div>
               <div class="guide__el" id="7">

                  <h3 class="guide__title smaller-text smaller-text--bold smaller-text--caps" >Perguntas Frequentes</h3>
                  <div class="section__container">
                     <div class="text editable">


                        <div class="product-details__collapse-el" :class="{active : info.show}" v-for="info in infos">
                           <button @click="info.show = !info.show" class="small-text small-text--caps small-text--semibold">{{ info.title }}</button>

                           <transition name="slide-up">
                              <div class="text editable"  v-if="info.show"  :id="'collapse-' + info.id">
                                 {{info.text}}
                              </div>
                           </transition>
                        </div>


                     </div>
                  </div>
               </div>
            </div>
         </div>
     </div>
  </div>
</template>

<script>
import VueSticky from 'vue-sticky'
import vueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(vueSmoothScroll)

export default {

   data(){
      return{
         infos: [
            {id: '1', show: false, title : '1. Pode haver atrasos na entrega da minha encomenda?', text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea est laborum.'},
            {id: '2', show: false, title : '2. Onde é que posso receber o meu pedido?', text: 'A equipa da Açaí com Granola, tal como a transportadora, trabalham diariamente para cumprir os prazos de entrega, contudo em alturas de elevado volume de encomendas poderá haver alguns atrasos. Agradecemos a sua compreensão.'},
            {id: '3', show: false, title : '3. Posso seguir o estado do meu pedido?', text: 'A equipa da Açaí com Granola, tal como a transportadora, trabalham diariamente para cumprir os prazos de entrega, contudo em alturas de elevado volume de encomendas poderá haver alguns atrasos. Agradecemos a sua compreensão.'},
         ],
         menus: [
           { id : 1, title: 'guia de tamanhos',  show: true, text:'Para lhe dar orientação na escolha do seu tamanho, pomos à sua disposição a opção “Qual é o meu tamanho?”, um recomendador que irá sugerir o tamanho mais adequado em função dos dados indicados por si. Se esta opção não estiver disponível para o artigo em que está interessado, pode sempre consultar o nosso guia de tamanhos.'},
           { id : 2, title: 'condições de compra',  show: false, text:'Alguns dos nossos artigos, pelas suas características especiais, deverão cumprir as seguintes condições para poder ser devolvidos'},
           { id : 3, title: 'envio',  show: false, text:'As opções de envio podem variar em função da morada de entrega, da hora da sua compra e da disponibilidade dos artigos. No momento de processar a sua compra, mostrar-lhe-emos os métodos de envio disponíveis, o custo e a data de entrega da sua encomenda.'},
           { id : 4, title: 'pagamento',  show: false, text:'Lorem ipsum dolor sit amet.'},
           { id : 5, title: 'trocas',  show: false, text:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},
           { id : 6, title: 'devoluções',  show: false, text:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'},

        ]
      }
   },
   directives: {
      'sticky': VueSticky,
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


<style>

.slide-up-enter {
   height:0;
   transform-origin: top;
   opacity: 0;
}
.slide-up-enter-active {
   transition: all .6s ease-in;
}
.slide-up-leave-active {
   transition: all .6s ease-in;
}

</style>
