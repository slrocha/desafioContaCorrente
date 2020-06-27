<template>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
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
