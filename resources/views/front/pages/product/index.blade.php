@extends('front.layout.app')

@section('content')
<div class="container container--xxlscreens">

   <!-- start page header -->
   @include('front.components.page-header')
   <!-- start page header -->

   <div class="section__container">
      <div class="products-list products-list--2 row">

         <!-- begin prod card -->
         <div class="products-list__el">
            @include('front.components.product-card-slideshow', [
            'title'=> 'Título do produto',
            'image1'=>'front/img/photos/photo4.jpg',
            'image2'=>'front/img/photos/photo6.jpg',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',

            ])
         </div>
         <!-- end prod card -->
         <!-- begin prod card -->
         <div class="products-list__el">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo9.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',
            ])
         </div>
         <!-- end prod card -->
         <!-- begin prod card -->
         <div class="products-list__el">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo8.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',
            
            ])
         </div>
         <!-- end prod card -->

      </div>
   </div>

   <!-- footer page -->
   <div class="products-page__footer">
      <h4 class="prod-title">Swimwear</h4>
      <ul class="products-menu">
         <li>
            <a class="prod-title" href="#">Bikinis</a>
         </li>
         <li>
            <a class="prod-title" href="#">Fatos de Banho</a>
         </li>
         <li>
            <a class="prod-title" href="#">Vestidos</a>
         </li>
      </ul>
   </div>
   <!-- footer page -->

   <hr class="divisor">

</div>

<section class="section section--margin">
   <div class="container">
      <div class="section__header instagram">
         <h4 class="section-title section-title--caps">Partilha as tuas fotos com <span>#acaicomgranola</span></h4>
         <p class="small-title"><i class="icon-instagram"></i>Segue <span>@acaicomgranola</span> para te inspirares</p>
      </div>
   </div>

   <div class="section__container">
      <!-- instagram -->
      @include('front.components.instagram')
      <!-- instagram -->
   </div>

</section>
@endsection

@push('scripts')

<script>
$('.product-card__slideshow').slick({
   arrows:true,
   autoplay: false,
   infinite: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
   // appendArrows: '.product-card__slideshow-arrows',
   prevArrow: '<button class="slick-arrow slick-prev icon-previous-4"></button>',
   nextArrow: '<button class="slick-arrow slick-next icon-next-3"></button>',
})

// instagram slideshow
$('.slideshow-instagram').slick({
   arrows:false,
   autoplaySpeed: 2000,
   autoplay: true,
  infinite: true,
  slidesToShow: 6,
 slidesToScroll: 1,
  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
  centerMode:true,
  centerPadding: '40px 0 0',
  responsive: [
     {
     breakpoint:576,
        settings: {
           slidesToShow: 3,
           centerPadding: '20px 0 0',
        }
    },

     {
     breakpoint:350,
        settings: {
           slidesToShow: 2,
           centerPadding: '40px 0 0',
        }
    },
     {
     breakpoint:768,
        settings: {
           slidesToShow: 4,
        }
    },
     {
     breakpoint:1110,
        settings: {
           slidesToShow: 5,
        }
    },
     {
     breakpoint:1500,
        settings: {
           centerPadding: '80px 0 0',
        }
    }
   ]
});
</script>
@endpush
