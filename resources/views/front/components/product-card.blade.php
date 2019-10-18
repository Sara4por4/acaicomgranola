<div class="product-card">
   <span class="product-card__label label label--{{$labeltype}}">{{ $label }}</span>
   <div class="product-card__img" style="background-image:url({{ $image }})"></div>
   <div class="product-card__caption">
      <a href="{{$link}}" class="prod-title">{{ $title }}</a>
      <h4 class="prod-title"><span>{{ $price }}€</span></h4>
   </div>
</div>
