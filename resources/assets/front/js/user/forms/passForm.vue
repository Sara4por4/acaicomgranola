<template>

   <form class="form form--authentication form--user row" id="app" @submit="checkForm" action="" method="post">

     <div class="form-group col-sm-6">
        <label for="">Password Atual</label>
        <input id="" type="password" name="" value="" placeholder="Inserir Password ativa">
     </div>

     <div class="form-group col-sm-6">
        <label for="">Nova Password</label>
        <input id="" type="password" name="" value="" placeholder="Inserir nova password">
     </div>

     <div class="form-group col-sm-6">
        <label for="">Confirmar Password</label>
        <input id="" type="password" name="" value="" placeholder="Confirmar nova password">
     </div>

     <div class="form-group form__footer col-12">
        <button type="button" name="button" class="round-btn text-small"><span><i class="icon-checked-1"></i></span>Guardar</button>
     </div>


   </form>

</template>

<script>
export default {
   data: {
      errors: [],
      email: null,
      password: null,
    },
    methods:{
     checkForm: function (e) {
        if (this.email && this.password) {
         return true;
        }

        this.errors = [];

        if (!this.password) {
           this.errors.push('Password required.');
        }

        if (!this.email) {
           this.errors.push('Email required.');
         } else if (!this.validEmail(this.email)) {
           this.errors.push('Valid email required.');
        }
        if (!this.errors.length) {
         return true;
        }

        e.preventDefault();
     },
     validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
   }
}
</script>

<style lang="css">
</style>
