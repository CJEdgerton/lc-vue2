<template>
	<div>
		<h2>The count is {{ count }}</h2>
		<p>
			<button @click="count++">Increment Count</button>
		</p>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				count: 0
			};
		}
	}
</script>