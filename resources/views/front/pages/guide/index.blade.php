@extends('front.layout.app')

@section('content')
<section class="section section--margin">
   <div class="container container--xxlscreens">

      <guide></guide>

   </div>
</section>

<div class="container container--xxlscreens">
   <hr class="divider">
</div>

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
