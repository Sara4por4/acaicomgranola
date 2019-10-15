<div class="nav__collapse" id="menu">
   <div class="container">

      <div class="nav__middle row">

         <!-- search form: only mobile -->
         <div class="d-block d-sm-none col-12">
            @include('front.forms.search')
         </div>
         <!-- search form: only mobile -->

         <div class="col-lg-4">
            <a href="#" class="link link--coral"><i class="icon icon--star"></i>Novidades</a>
            <a href="#" class="link link--coral"><i class="icon icon--percentage"></i>Promoções</a>
         </div>

         <div class="col-lg-8">
            <div class="nav__middle-wrap row">
               <div class="col-lg-3">
                  <h4 class="nav__title smaller-text smaller-text--bold" data-toggle="collapse" data-target="#submenu1">Roupa</h4>

                  <div class="nav__menu-wrap collapse dont-collapse-lg"  id="submenu1">
                     <ul class="nav__menu">
                        <li>
                           <a href="#" class="text">Calças & Calções</a>
                        </li>
                        <li>
                           <a href="#" class="text">Saias & Vestidos</a>
                        </li>
                        <li>
                           <a href="#" class="text">Macacões</a>
                        </li>
                        <li>
                           <a href="#" class="text">Casacos</a>
                        </li>
                        <li>
                           <a href="#" class="text">Bodies</a>
                        </li>
                        <li>
                           <a href="#" class="text">Tops & Tshirts</a>
                        </li>
                     </ul>

                     <a href="#" class="nav__seeall link link--dark-coral link--small">ver todos</a>
                  </div>
               </div>

               <div class="col-lg-3">
                  <h4 class="nav__title smaller-text smaller-text--bold" data-toggle="collapse" data-target="#submenu2">Swimwear</h4>

                  <div class="nav__menu-wrap collapse dont-collapse-lg"  id="submenu2">
                     <ul class="nav__menu">
                        <li>
                           <a href="#" class="text">New Collection 2020</a>
                        </li>
                        <li>
                           <a href="#" class="text">Bikinis</a>
                        </li>
                        <li>
                           <a href="#" class="text">Fatos de Banho</a>
                        </li>
                        <li>
                           <a href="#" class="text">Acessórios</a>
                        </li>
                     </ul>

                     <a href="swimwear" class="nav__seeall link link--dark-coral link--small">ver todos</a>
                  </div>
               </div>

               <div class="col-lg-3">
                  <h4 class="nav__title smaller-text smaller-text--bold" data-toggle="collapse" data-target="#submenu3">Fitwear</h4>

                  <div class="nav__menu-wrap collapse dont-collapse-lg"  id="submenu3">
                     <ul class="nav__menu">
                        <li>
                           <a href="#" class="text">New Collection 2020</a>
                        </li>
                        <li>
                           <a href="#" class="text">Leggins</a>
                        </li>
                        <li>
                           <a href="#" class="text">Tops</a>
                        </li>
                        <li>
                           <a href="#" class="text">Bodies</a>
                        </li>
                        <li>
                           <a href="#" class="text">Macacões</a>
                        </li>
                     </ul>

                     <a href="fitwear" class="nav__seeall link link--dark-coral link--small">ver todos</a>
                  </div>
               </div>

               <div class="col-lg-3">
                  <h4 class="nav__title smaller-text smaller-text--bold" data-toggle="collapse" data-target="#submenu4">Ajuda?</h4>

                  <div class="nav__menu-wrap collapse dont-collapse-lg"  id="submenu4">
                     <ul class="nav__menu">
                        <li>
                           <a href="#" class="text">Condições de Compra</a>
                        </li>
                        <li>
                           <a href="#" class="text">Envio e Pagamento</a>
                        </li>
                        <li>
                           <a href="#" class="text">Troca e Devoluções</a>
                        </li>
                        <li>
                           <a href="#" class="text">Perguntas Frequentes</a>
                        </li>
                        <li>
                           <a href="#" class="text">Sustentabilidade</a>
                        </li>
                        <li>
                           <a href="#" class="text">Contactos</a>
                        </li>
                        <li>
                           <a href="#" class="text">Lojas</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

         </div>
      </div>

   </div>
</div>

@push('scripts')
<script>


       if( ($('body').width() > 576 ) && ($('body').width() < 769 ) ){

         $('.nav__title').click(function() {
            console.log('ola');
            $('.nav__menu-wrap').removeClass('show');
         });
      }



</script>
@endpush
