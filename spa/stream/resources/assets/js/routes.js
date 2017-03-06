import VueRouter from 'vue-router';

let routes = [
	{
		path: '/',
		component: require('./views/Home')
	},
	{
		path: '/about',
		component: require('./views/About')
	},
		{
			path: '/about/john',
			component: require('./views/profiles/John')		
		},
		{
			path: '/about/jane',
			component: require('./views/profiles/Jane')		
		},
	{
		path: '/contact',
		component: require('./views/Contact')		
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'is-active'
});