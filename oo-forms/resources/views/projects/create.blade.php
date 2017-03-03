<!DOCTYPE html>
<html>
<head>
	<title>
		Create a Project
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
	<style>
		body {padding-top: 40px;}
	</style>
</head>
<body>

	<div id="app" class="container">

		<strong>Project List</strong>
		<ul style="margin-top:20px;">
			@foreach( $projects as $project )
			<li>{{ $project->name }}</li>
			@endforeach
		</ul>

		<hr>

		<strong>Create Project</strong>

		<form 
			method="POST" 
			action="/projects" 
			style="margin-top:20px;"
			@keydown="form.errors.clear($event.target.name)"
			@submit.prevent="onSubmit">

			{{ csrf_field() }}		

			<div class="control">
				<label for="name" class="label">Project Name:</label>
				<input type="text" name="name" id="name" class="input" v-model="form.name">
				<span 
					class="help is-danger" 
					v-text="form.errors.get('name')"
					v-if="form.errors.has('name')"
					></span>
			</div>

			<div class="control">
				<label for="description" class="label">Project Description:</label>
				<input type="text" name="description" id="description" class="input" v-model="form.description" >
				<span 
					class="help is-danger" 
					v-text="form.errors.get('description')"
					v-if="form.errors.has('description')"
					></span>
			</div>

			<div class="control">
				<button 
					class="button is-primary"
					:disabled="form.errors.any()">
					Create
				</button>
			</div>

		</form>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/vue"></script>
	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>