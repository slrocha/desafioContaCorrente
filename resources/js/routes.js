import ExampleComponent from './components/ExampleComponent'
import ContaCorrenteIndex from './components/contasCorrentes/index'
const routes = [
	{
		path:'/example-component',
		component:ExampleComponent
	},

	{
		path:'/contaCorrente',
		component:ContaCorrenteIndex
	}
];

export default routes