@extends('front.layout.app')

@section('content')
<div class="container container--xxlscreens">

   <!-- start page header -->
   @include('front.components.product-page-header')
   <!-- start page header -->

   <product></product>

</div>

<div class="container container--xxlscreens">
   <hr class="divided">
</div>

<section class="section section--margin">
   <div class="container">

      <div class="section__header">
         <h4 class="subtitle subtitle--caps subtitle--bold">produtos semelhantes</h4>
         <p class="small-title">também lhe recomendamos...</p>
      </div>

   </div>
   <div class="section__container">

      <div class="slideshow-products">
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo10.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',
            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo9.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',
            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo9.png',
            'price'=>'33',
            'label'=>'new',
            'labeltype'=>'new',
            'link'=>'',
            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo9.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',
            ])
         </div>
      </div>

   </div>
</section>
@endsection

@push('scripts')
<script>

$('.slideshow-products').slick({
   arrows:false,
   autoplaySpeed: 1500,
   autoplay: true,
   infinite: true,
   slidesToShow: 3,
   slidesToScroll: 1,
   cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
   // centerMode:true,
   centerPadding: '60px 0 0',
   variableWidth: true,
  responsive: [
     {
     breakpoint:576,
        settings: {
           centerPadding: '30px 0 0',
           slidesToShow: 2,
        }
    },
     {
     breakpoint:768,
        settings: {
           centerPadding: '60px 0 0',
           slidesToShow: 4,
        }
    },
     {
     breakpoint:1110,
        settings: {
           slidesToShow: 5,
        }
    }
   ]
});
</script>

@endpush
