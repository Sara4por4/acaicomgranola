<template>


   <div class="summary">
      <div class="summary__content row">
         <div class="summary__voucher col-sm-6">
            <h4 class="text text--caps text--semibold">Tenho um código promocional</h4>
            <form class="form form--newsletter clearfix" action="index.html" method="post">
               <input type="text" name="" value="" placeholder="Inserir Código">
               <button type="button" name="button" class="btn btn--black">validar</button>
            </form>
         </div>
         <div class="col-sm-6">
            <div class="summary__total">

               <div class="summary__el">
                  <div class="summary__line">
                     <p class="tiny-text tiny-text--bold">Subtotal</p>
                     <p class="tiny-text tiny-text--bold value"><span>65.00</span> €</p>
                  </div>
                  <div class="summary__line">
                     <p class="tiny-text tiny-text--bold">Desconto</p>
                     <p class="tiny-text tiny-text--bold value"><span>5.00</span> €</p>
                  </div>
               </div>

               <div class="summary__el summary__values">
                  <div class="summary__line">
                     <p class="small-text small-text--bold">Total</p>
                     <p class="small-text small-text--bold value"><span>60.00</span> €</p>
                  </div>
                  <p class="tip">Imposto Incluído</p>
               </div>
            </div>
         </div>
      </div>

      <div class="summary__btns clearfix">
         <a href="checkout" class="btn btn--black">Voltar às suas compras</a>
         <a href="checkout" class="btn btn--coral">Processar pedido</a>
      </div>
   </div>


</template>
