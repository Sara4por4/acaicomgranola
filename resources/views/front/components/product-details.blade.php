<div class="product-sidebar__inner">
   <div class="product-details">

      <color></color>

      <size></size>

      <div class="product-details__collapse">
         <div class="product-details__collapse-el">
            <a class="tiny-text tiny-text--semibold" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">Descrição</a>
            <div class="smaller-text collapse editable" id="collapse1">
               {!! $description !!}
            </div>
         </div>
         <div class="product-details__collapse-el">
            <a class="tiny-text tiny-text--semibold" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">Descrição</a>
            <div class="smaller-text collapse editable" id="collapse2">
               {!! $composition !!}
            </div>
         </div>
         <div class="product-details__collapse-el">
            <a class="tiny-text tiny-text--semibold" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">Descrição</a>
            <div class="smaller-text collapse editable" id="collapse3">
               {!! $care !!}
            </div>
         </div>
      </div>

      <div class="product-details__btns">

         <fav></fav>
         <add></add>

      </div>

   </div>
</div>
