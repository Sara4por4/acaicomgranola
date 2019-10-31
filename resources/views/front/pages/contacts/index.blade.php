@extends('front.layout.app')

@section('content')
<section class="section section--margin">
   <div class="container container--xxlscreens">

      <div class="row stores-area">
         <div class="col-sm-4">
            <div class="stores-area__info">
               <div class="section__header left-align">
                  <h3 class="text text--bold text--caps">Contactos</h3>
                  <hr class="divisor">
               </div>
               <div class="section__container">
                  @include('front.components.contact-info', [
                  'contact'=>'000 000 000',
                  'email'=>'info@mail.com',
                  'emailrh'=>'info@mail.com',
                  'emailcomplaint'=>'info@mail.com',
                  ])
               </div>
            </div>
         </div>
         <div class="col-sm-8">
            <div class="section__header left-align">
               <h3 class="text text--bold text--caps">Formulário de Contacto</h3>
               <hr class="divisor">
            </div>
            <div class="section__container">
               <p class="smaller-text">Preencha o seguinte formulário para que a sua mensagem seja recebia de forma imediata:</p>
               <!-- form -->
               @include('front.forms.contacts-form')
               <!-- form -->
            </div>
         </div>
      </div>

   </div>
</section>
@endsection
