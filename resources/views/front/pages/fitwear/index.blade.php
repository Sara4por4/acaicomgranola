@extends('front.layout.app')

@section('content')

<!-- top banner -->
<div class="wrapper-full-banner">
@include('front.components.banner', [
'subtitle'=>'Inspire-se com as novidades',
'title'=> 'fitwear',
'image'=>'front/img/photos/photo1.jpg',
'linklabel'=>'ver nova coleção',
'link'=>'products-list',
])
</div>
<!-- top banner -->

<section class="section">

   <div class="container">
      @include('front.components.banner', [
      'subtitle'=>'leggins modeladoras',
      'title'=> 'mais conforto',
      'image'=>'front/img/photos/photo2.jpg',
      'linklabel'=>'ver coleção',
      'link'=>'products-list',
      ])
   </div>

</section>


<section class="section">

   <div class="row row-cheated">
      <div class="col">
         @include('front.components.small-banner', [
         'subtitle'=>'para todos os desportos',
         'title'=> 'mais power',
         'image'=>'front/img/photos/photo13.png',
         'linklabel'=>'ver coleção',
         'link'=>'products-list',
         ])
      </div>
      <div class="col">
         @include('front.components.small-banner', [
         'subtitle'=>'para todos os desportos',
         'title'=> 'novo look',
         'image'=>'front/img/photos/photo14.png',
         'linklabel'=>'ver coleção',
         'link'=>'products-list',
         ])
      </div>
   </div>

</section>


<section class="section section--margin">
   <div class="container">

      <div class="section__header">
         <h4 class="title title--bold">new collection</h4>
         <p class="section-title">para exercícios mais confiantes</p>
      </div>

   </div>
   <div class="section__container">

      <div class="slideshow-products">
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo1.jpg',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',

            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo2.jpg',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',

            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo13.png',
            'price'=>'33',
            'label'=>'new',
            'labeltype'=>'new',
            'link'=>'',

            ])
         </div>
         <div class="slideshow-products__slider">
            @include('front.components.product-card', [
            'title'=> 'Título do produto',
            'image'=>'front/img/photos/photo14.png',
            'price'=>'33',
            'label'=>'10%',
            'labeltype'=>'promo',
            'link'=>'',

            ])
         </div>
      </div>

   </div>
</section>

<div class="container">
   <hr class="divisor">
</div>

<section class="section section--margin">
   <div class="container">
      <div class="section__header instagram">
         <h4 class="section-title  section-title--caps">Partilha as tuas fotos com <span>#acaicomgranola</span></h4>
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
<script src="{{url('/')}}/front/plugins/slick/slick.min.js"></script>
<script>

elementAnimation('.top-banner .top-banner__header', 'show');

// instagram slideshow
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
           slidesToShow: 2,
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
