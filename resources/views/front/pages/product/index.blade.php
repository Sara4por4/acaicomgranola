@extends('front.layout.app')

@section('content')

<!-- products-list -->
<products></products>
<!-- products-list -->

<div class="container container--xxlscreens">

   <!-- footer page -->
   <div class="products-page__footer">
      <h4 class="text text--caps text--bold">Swimwear</h4>
      <ul class="products-menu">
         <li>
            <a class="text" href="#">Bikinis</a>
         </li>
         <li>
            <a class="text" href="#">Fatos de Banho</a>
         </li>
         <li>
            <a class="text" href="#">Vestidos</a>
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
