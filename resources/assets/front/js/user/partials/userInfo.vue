<template>

<div class="">

   <p class="text">Poderá aceder e modificar os seus dados pessoais (nome, endereço de facturação, nº de telefone,
   para facilitar as suas futuras compras e para nos notificar de qualquer alteração nos seus dados
   de contacto.</p>

   <userform></userform>

   <div class="section__header left-align">
      <h3 class="text text--caps">Morada de faturação</h3>
      <hr class="divisor">
   </div>

   <p class="text">Poderá aceder e modificar os seus dados pessoais (nome, endereço de facturação, nº de telefone, para facilitar as suas futuras compras e para nos notificar de qualquer alteração nos seus dados  de contacto.</p>

   <addressform></addressform>

</div>

</template>

<script>
import userform from '../forms/userForm';
import addressform from '../forms/addressForm';

export default {
   components:{
      userform,
      addressform
   }
}
</script>

<style lang="css">
</style>
