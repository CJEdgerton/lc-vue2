let store = {
	user: {
		name: 'John Doe'
	}
};

new Vue({
	
	el: '#one',	

	data: {
		shared: store,
		foo: 'bar'
	}

});

new Vue({
	
	el: '#two',	

	data: {
		shared: store,
		foo: 'baz'
	}

});