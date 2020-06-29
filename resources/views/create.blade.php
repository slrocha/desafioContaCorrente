<form method="POST" v-on:submit.prevent="createConta" class="form-horizontal">
<div class="modal fade" id="create">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          	<span>&times;</span>
          </button>
          <h4>Nova Conta</h4>
        </div>
        <div class="modal-body">
          	<div class="form-group">
				<label class="control-label col-sm-2" for="agencia">Agência:</label>
			   	<div class="col-sm-10">
			      <input v-model="agencia" type="text" class="form-control" name="agencia" placeholder="Digite o número de sua agência">
			    </div>
			</div> 
			<div class="form-group">
				<label class="control-label col-sm-2" for="conta">Conta:</label>
				<div class="col-sm-10">
					<input v-model="conta" type="text" class="form-control" name="conta" placeholder="Digite o número de sua conta sem o dígito">
				</div>
			</div>  
			<div class = "form-group">
			    <label class="control-label  col-sm-2" for="digito">Digito:</label>
			    <div class="col-sm-10">
			   		<input v-model="digito" type="text" class="form-control" name="digito">
			    </div>
			</div>
			<div class = "form-group">
			    <label class="control-label  col-sm-2" for="saldo">Saldo:</label>
			    <div class="col-sm-10">
			   		<input v-model="saldo" type="text" class="form-control" name="saldo">
			    </div>
			</div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="titular">Titular:</label>
		    <div class="col-sm-10">
		      <input v-model="titular" type="text" class="form-control" name="titular" placeholder="Nome completo">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="cpf">CPF:</label>
		    <div class="col-sm-10">
		      <input v-model="cpf" type="text" class="form-control" name="cpf" placeholder="Digite seu CPF">
		    </div>
		  </div>
		  <span v-for="error in errors" class="text-danger">@{{ error }}</span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
      
    </div>
  </div>
</form>

</div>
</div>

