@extends('app')

@section('content')

<div class="col-sm-12">
    <a href="#" data-toggle="modal" data-target="#create" class="btn btn-primary pull-right">Nova Conta Corrente</a>          
	<table class="table table-houver  table-sprite">
	    <thead>
	      <tr>
	        <th>Agência</th>
	        <th>Conta</th>
	        <th>Dígito</th>
	        <th>Saldo</th>
	        <th>Titular</th>
	        <th>CPF</th>
	        <th></th>
	      </tr>
	    </thead>
	    <tbody>
		     <tr v-for="conta in contas">
				<td>@{{conta.agencia}}</td>
	            <td>@{{conta.conta}}</td>
	            <td>@{{conta.digito}}</td>
	            <td>@{{conta.saldo}}</td>
	            <td>@{{conta.titular}}</td>
	            <td>@{{conta.cpf}}</td>
	            <td>
		            <button type="button" class="btn btn-warning btn-sm" v-on:click="">Editar</button>
		            <button type="button" class="btn btn-success btn-sm" v-on:click.prevent="editSaldo(conta);">Depositar</button>
		            <button type="button" class="btn btn-success btn-sm" v-on:click="">Transferir</button>
		            <button type="button" class="btn btn-danger btn-sm" v-on:click.prevent="deleteConta(conta);">Deletar</button>
		        </td>
		      </tr>
	    </tbody>
	</table>
	@include('create')
	@include('editDeposito')

</div>
<div class="col-sm-5">
	<pre>
		@{{ $data }}
	</pre>
	
</div>
</div>
</div>



@endsection