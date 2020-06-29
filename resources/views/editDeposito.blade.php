

<form method="PUT" v-on:submit.prevent="updateConta(fillConta.id)" class="form-horizontal">
<div class="modal fade" id="deposito" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          	<span>&times;</span>
          </button>
          <h4 class="modal-title">Depositar</h4>
        </div>
        <div class="modal-body">
          	<div class="form-group">
				<label class="control-label" for="conta">Valor:</label>
				<input v-model="Addsaldo" type="text" class="form-control" name="conta">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div> 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Depositar</button>
        </div>
      </div>
      
    </div>
  </div>
</form>
