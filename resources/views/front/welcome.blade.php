@extends('front.layout.app')

@section('content')
<!-- top slideshow -->
<div class="slideshow-wrapper">
   <div class="slideshow">
      <div class="slideshow__slider">
         @include('front.components.banner-divided', [
         'subtitle'=>'Inspire-se com as novidades',
         'title'=> 'New collection',
         'image1'=>'front/img/photos/photo7.png',
         'image2'=>'front/img/photos/photo6.jpg',
         'linklabel1'=>'nova coleção swimwear',
         'linklabel2'=>'nova coleção fitwear',
         'link1'=>'',
         'link2'=>'',
         ])
      </div>
      <div class="slideshow__slider">
         @include('front.components.banner', [
         'subtitle'=>'Inspire-se com as novidades',
         'title'=> 'swimwear',
         'image'=>'front/img/photos/photo1.jpg',
         'linklabel'=>'nova coleção swimwear',
         'link'=>'',
         ])
      </div>
      <div class="slideshow__slider">
         @include('front.components.banner-divided', [
         'subtitle'=>'Inspire-se com as novidades',
         'title'=> 'New collection',
         'image1'=>'front/img/photos/photo14.png',
         'image2'=>'front/img/photos/photo4.jpg',
         'linklabel1'=>'nova coleção swimwear',
         'linklabel2'=>'nova coleção fitwear',
         'link1'=>'',
         'link2'=>'',
         ])
      </div>
      <div class="slideshow__slider">
         @include('front.components.banner', [
         'subtitle'=>'Inspire-se com as novidades',
         'title'=> 'New collection',
         'image'=>'front/img/photos/photo2.jpg',
         'linklabel'=>'ver nova coleção',
         'link'=>'',
         ])
      </div>
   </div>
   <div class="slideshow__lines"></div>
</div>
<!-- top slideshow -->

<section class="section">

   <div class="container">
      @include('front.components.banner', [
      'subtitle'=>'Inspire-se com as novidades',
      'title'=> 'New collection',
      'image'=>'front/img/photos/photo9.png',
      'linklabel'=>'ver nova coleção',
      'link'=>'',
      ])
   </div>

</section>


<section class="section">

   <div class="row row-cheated">
      <div class="col">
         @include('front.components.small-banner', [
         'subtitle'=>'práticos e cheios de estilo',
         'title'=> 'acessórios',
         'image'=>'front/img/photos/photo8.png',
         'linklabel'=>'ver coleção',
         'link'=>'',
         ])
      </div>
      <div class="col">
         @include('front.components.small-banner', [
         'subtitle'=>'para todos os momentos',
         'title'=> 'vestidos',
         'image'=>'front/img/photos/photo4.jpg',
         'linklabel'=>'ver coleção',
         'link'=>'',
         ])
      </div>
   </div>

</section>


<section class="section">

   <div class="container">
      @include('front.components.banner', [
      'subtitle'=>'em peças selecionadas',
      'title'=> 'promoções',
      'image'=>'front/img/photos/photo10.png',
      'linklabel'=>'ver promoções',
      'link'=>'',
      ])
   </div>

</section>


<section class="section section--margin">
   <div class="container">
      <div class="section__header instagram">
         <h4 class="section-title section-title--caps">Partilha as tuas fotos com <span>#acaicomgranola</span></h4>
         <p class="small-title">Segue <span>@acaicomgranola</span> para te inspirares</p>
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

$('.slideshow').on(
    'init',
    function (event, slick) {
        $(slick.$slides[slick.currentSlide]).addClass('active');
        $(slick.$slides[slick.currentSlide]).addClass('effect');
    }
).on(
    'afterChange',
    function (event, slick, currentSlide, nextSlide) {
        $(slick.$slides[currentSlide]).addClass('active');
        $(slick.$slides[currentSlide]).addClass('effect');
    }
).on(
    'beforeChange',
    function (event, slick, currentSlide, nextSlide) {
        $(slick.$slides[currentSlide]).removeClass('active');
        $(slick.$slides[currentSlide]).removeClass('effect');
    }
).slick({
   dots: true,
   arrows: false,
   autoplay: true,
   autoplaySpeed: 3000,
   infinite:true,
   slidesToShow: 1,
   slidesToScroll: 1,
   fade: true,
   cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
   appendDots: '.slideshow__lines'
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
