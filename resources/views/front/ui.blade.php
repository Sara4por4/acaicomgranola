@extends('front.layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">

             <div class="panel-body">
                 <h1 class="big-title">Big-title</h1>
                 <h1 class="title">title</h1>
                 <h1 class="section-title">section-title</h1>
                 <h1 class="small-title">small-title</h1>
                 <h1 class="subtitle">subtitle</h1>
                 <h1 class="text">text</h1>
                 <h1 class="small-text">small-text</h1>
                 <h1 class="smaller-text">smaller-text</h1>
                 <h1 class="tiny-text">tiny-text</h1>
            </div>

         </div>
         <div class="col-sm-4">

           <a class="round-btn" href="#"><span><i class="icon-heart"></i></span>ver coleção</a>
           <a class="round-btn" href="#"><span><i class="icon-instagram"></i></span>ver coleção</a>
           <a class="round-btn round-btn--small" href="#"><span><i class="icon-instagram"></i></span>ver coleção</a>

           <br>
           <br>

          <span class="label label--promo">30%</span>
          <span class="label label--new">new</span>

          
       </div>
   </div>
</div>

@endsection
