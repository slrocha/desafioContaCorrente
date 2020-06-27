<template>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Agência</th>
            <th>Conta</th>
            <th>Dígito</th>
            <th>Titular</th>
            <th>CPF</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8585</td>
            <td>457896</td>
            <td>3</td>
            <td>Maria de Lourdes da Cruz</td>
            <td>047.474.784-45</td>
            <td>
                <button type="button" class="btn btn-primary">Ver</button>
                <button type="button" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-success">Depositar</button>
                <button type="button" class="btn btn-success">Transferir</button>
                <button type="button" class="btn btn-danger">Deletar</button>
            </td>
          </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        name: 'contasCorrentes-index',
        data(){
            return{

            };
        }
    };
</script>

<style lang="css" scoped>
</style>
