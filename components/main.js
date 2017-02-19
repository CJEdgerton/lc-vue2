
Vue.component('task-list', {

	template: `
		<div>
			<task v-for="task in tasks">{{ task.description }}</task>
		</div>
	`,

	data() {
		return {

			tasks: [
				{ description: 'Go to store', completed: true }, 
				{ description: 'Eat', completed: true }, 
				{ description: 'Sleep', completed: false }, 
				{ description: 'Code', completed: false }, 
			]

		}
	}
	
});


// Showing how slots are used
Vue.component('task', {

	template: '<li><slot></slot</li>'
	
});

new Vue({
	
	el: '#root'	

});