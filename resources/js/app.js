require('./bootstrap');

window.Vue = require('vue');


new Vue({
    el: '#crud',
    created:function(){
    	this.getContas();
    },

    data:{
    	contas:[], 
    	errors:[],
    	agencia: '',
        conta: '',
        digito: '',
        saldo: '',
        titular: '',
        cpf: '',
        Addsaldo:'',
        fillConta:{'id':'', 'saldo': ''}

    },
    methods:{
    	getContas(){
        	axios.get('contaCorrente').then(response=>{
            	this.contas =  response.data
            	},
	        		error => {
	        		console.error(error)
            	}
        	)
        },
        editSaldo(conta){
        	this.fillConta.id = conta.id;
        	this.fillConta.saldo = conta.saldo;
        	$('#deposito').modal('show');
        	console.log(Addsaldo);
        	console.log(conta);

        }, 

        updateConta(id){
        	axios.put('contaCorrente/' + id, this.fillConta).then(response=>{
               this.getContas();
               this.fillConta = {'id':'', 'saldo': ''};
               this.errors = [];
               $('#deposito').modal('show');
            }).catch(error => {
                console.log(error)
            });
        },

        deleteConta(conta){
            axios.delete('contaCorrente/' + conta.id).then(response=>{
               this.getContas();
            });
        },
        createConta:function(){
        	var url = 'http://localhost:8080/contaCorrente';
        	axios.post(url,{
                agencia:this.agencia,
                conta:this.conta,
                digito:this.digito,
                saldo:this.saldo,
                titular:this.titular,
                cpf:this.cpf
            }).then(response=>{
            	this.getContas();
                this.agencia = '';
                this.conta = '';
                this.digito = '';
                this.saldo = '';
                this.titular = '';
                this.cpf = '';
                this.errors = [];
                $('#create').modal('hide');
                console.log(response)
            }).catch(error => {
                console.log(error)
            });
    	}	
    }   
});
