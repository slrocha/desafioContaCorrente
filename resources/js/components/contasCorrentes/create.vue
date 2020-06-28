<template>
<form class="form-horizontal" action="#">
	<div class="form-group">
	   <label class="control-label col-sm-2" for="agencia">Agência:</label>
	   <div class="col-sm-10">
	      <input type="text" class="form-control" id="agencia" placeholder="Digite o número de sua agência">
	    </div>
	</div>
	<div class = "form-group">
		<label class="control-label col-sm-2" for="conta">Conta:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="conta" placeholder="Digite o número de sua conta sem o dígito">
		</div>
	</div>  
	<div class = "form-group">
	    <label class="control-label  col-sm-2" for="digito">Digito:</label>
	    <div class="col-sm-10">
	   		<input type="text" class="form-control" id="digito">
	    </div>
	</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="titular">Titular:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titular" placeholder="Nome completo">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cpf">CPF:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  </div>
</form>
</template>

<script>
    export default {
        name: 'contasCorrentes-create',
        data(){
            return{

            };
        }
    };
</script>

<style lang="css" scoped>
</style>