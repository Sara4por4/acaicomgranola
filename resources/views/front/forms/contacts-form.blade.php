<form class="form form--contacts" action="{{url('contacts')}}" method="post">
    <div class="row">

        <div class="form-group col-12 col-sm-6">
            <label for="name">Nome*</label>
            <input placeholder="Inserir nome" type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
        </div>
        <div class="form-group col-12 col-sm-6">
            <label for="email">Email*</label>
            <input placeholder="Inserir email" type="email" name="email" value="{{old('email')}}" class="form-control" id="email">
        </div>
        <div class="form-group col-12 col-sm-6">
            <label for="contact">Contacto*</label>
            <input placeholder="+351" type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact">
        </div>
        <div class="form-group col-12 col-sm-6">
            <label for="contact">Assunto*</label>
            <input placeholder="Indicar assunto" placeholder="Inserir nome" type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact">
        </div>
        <div class="form-group col-12">
            <label for="message">Mensagem*</label>
            <textarea placeholder="Exponha as suas dúvidas" name="message" rows="3" cols="80"></textarea>
        </div>

        <div class="form__footer col-12">
           <div class="row">
              <div class="col col-sm-8">
                @include('front.components.rgpd')
                  <span class="tip">Os campos marcados com * são obrigatórios. </span>
              </div>
              <div class="col-sm-4 col">
                  <button type="submit" name="button" class="round-btn round-btn--small"><span><i class="icon icon--send"></i></span>enviar</button>
              </div>
           </div>
        </div>

    </div>
</form>
