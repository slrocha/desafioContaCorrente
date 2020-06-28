import ExampleComponent from './components/ExampleComponent'
import ContaCorrenteIndex from './components/contasCorrentes/index'
import ContaCorrenteCreate from './components/contasCorrentes/create'

const routes = [
	{
		path:'/example-component',
		component:ExampleComponent
	},

	{
		path:'/contaCorrente',
		component:ContaCorrenteIndex
	},

	{
		path:'/contaCorrente/create',
		component:ContaCorrenteCreate
	}
];

export default routes