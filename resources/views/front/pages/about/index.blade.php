@extends('front.layout.app')

@section('content')
<section class="section section--margin">
   <div class="container container--xxlscreens">

      <div class="section__header">
         <h1 class="title title--bold">Açaí com granola</h1>
         <h3 class="section-title">uma marca 100% portuguesa</h3>
      </div>

      <div class="section__container">
         <div class="about-list">
            <div class="about-list__el">
               @include('front.components.about', [
               'year'=>'2013',
               'image'=>'front/img/photos/photo2.jpg',
               'text'=>'<p><span>Lançada em 2013, a marca dedicou-se à venda online de biquínis brasileiros</span> mas rapidamente alargou a sua presença a vários mercados e concept stores.</p>',
               ])
            </div>
            <div class="about-list__el">
               @include('front.components.about', [
               'year'=>'2016',
               'image'=>'front/img/photos/photo2.jpg',
               'text'=>'<p>Em 2016, abriu uma loja no Porto, em Leça da Palmeira, onde disponibiliza também roupa e acessórios.</p>',
               ])
            </div>
            <div class="about-list__el">
               @include('front.components.about', [
               'year'=>'2017',
               'image'=>'front/img/photos/photo4.jpg',
               'text'=>'<p><span>Em 2017, a Açaí com Granola lança a sua primeira coleção de swimwear — Açaí com Granola Swimwear.</span> <br> A marca apresenta uma coleção de biquínis e fatos de
                banho pensada para mulheres exigentes  que procuram peças confortáveis com um “fitting” perfeito. <br> <span>A coleção surge da fusão entre o estilo europeu e os padrões e cortes cavados brasileiros.</span></p>',
               ])
            </div>
            <div class="about-list__el">
               @include('front.components.about', [
               'year'=>'2020',
               'image'=>'front/img/photos/photo4.jpg',
               'text'=>'<p>Durante o processo de produção da marca são
valorizados factores como a simplicidade, a qualidade
e a intemporalidade. <span>Irreverentes, mas fáceis de usar,
todas as peças contam com materiais escolhidos a
dedo provenientes de Itália e Espanha.</span></p>',
               ])
            </div>
         </div>
      </div>

   </div>
</section>
@endsection


@push('scripts')
<script>

elementAnimation('.about-area', 'show');

</script>
@endpush
