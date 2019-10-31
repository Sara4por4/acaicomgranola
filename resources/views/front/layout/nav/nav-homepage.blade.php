<nav class="nav nav--absolute nav--homepage headroom">
   <div class="container clearfix">

      <div class="nav__left">
         <button type="button" name="button" class="nav__toggler icon-menu-1"></button>
         <ul class="nav__top-menu">
            <li data-index="0">
               <a href="swimwear">swimwear</a>
            </li>
            <li data-index="1">
               <a href="fitwear">fitwear</a>
            </li>
         </ul>
      </div>

      <div class="app-logo nav__logo">
         <a href="#">Açaí e Granola</a>
      </div>

      <div class="nav__right">
         <ul class="nav__icons-menu">
            <li class="d-none d-sm-inline-block">
               <button type="button" name="button"  class="icon-search nav__toggler-search"></buton>
            </li>
            <li>
               <favs></favs>
               <!-- <a href="#" class="icon-heart"></a> -->
            </li>
            <li>
               <login></login>
               <!-- <a href="#" class="icon-padlock"></a> -->
            </li>
            <li>
               <cart></cart>
            </li>
         </ul>
      </div>

   </div>
</nav>

@include('front.layout.nav.collapse')
@include('front.layout.nav.search')


@push('scripts')
<script>

   $(".nav").headroom();

   $('.nav__toggler-search').click(function() {
      $(this).toggleClass('active');
      $('.nav__search').toggleClass('show');
      $('.nav').toggleClass('opened');
   });

   $('.nav__toggler').click(function() {
      $(this).toggleClass('active');
      $('.nav__collapse').toggleClass('show');
      $('.nav').toggleClass('opened');
   });

   $('.nav__top-menu li').hover(function() {
      // $(this).toggleClass('active');
      $('.nav__top-menu').toggleClass('hovered');
   });


</script>
@endpush
