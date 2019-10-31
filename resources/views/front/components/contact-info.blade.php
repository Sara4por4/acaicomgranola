<div class="contact-info">
   <p class="small-text">Pode entrar em contacto connosco através do telefone de Atendimento ao Cliente.</p>
   <p class="small-text contact-info__phone">{{$contact}}</p>
   <div class="contact-info__emails">
      <p class="small-text">Colocámos à sua disposição vários endereços de email segundo a questão a esclarecer.</p>
      <div class="contact-info__email">
         <h4 class="small-text smaller-text--semibold contact-info__title">Geral</h4>
         <p class="small-text">{{ $email }}</p>
      </div>
      <div class="contact-info__email">
         <h4 class="small-text smaller-text--semibold contact-info__title">RH</h4>
         <p class="small-text">{{ $emailrh }}</p>
      </div>
      <div class="contact-info__email">
         <h4 class="small-text smaller-text--semibold contact-info__title">Reclamações</h4>
         <p class="small-text">{{ $emailcomplaint }}</p>
      </div>
   </div>
</div>
