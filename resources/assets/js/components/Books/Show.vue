<template>
	<div class="container">
		<div class="row">
			<div class="card col s12 m8">
				<h1>{{ ad.title }}</h1>
				<hr>
				<p class="flow-text">{{ ad.content }}</p>
			</div>
		          <div class="card blue-grey darken-1 col s12 m4">
		            <div class="card-content white-text">
		              <span class="card-title">Contato:</span>
		              <p class="flow-text">
		              	{{ ad.user.name }} <br>
		              	{{ ad.user.info.phone_number }} <br>
		              	<strong v-if="!is_donation">R$ {{ ad.price }},00</strong>
		              	<strong v-if="is_donation">Grátis</strong> <br>
		              	<strong>{{ ad.city }} - {{ ad.state.name }}</strong>
		              </p>
		            </div>
		            <div class="card-action">
		              <a href="#">This is a link</a>
		              <a href="#">This is a link</a>
		            </div>
		          </div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				ad: [],
				errors: [],
			}
		},

		props: ['id'],

		created() {
			this.getAd();
		},

		methods: {
			getAd() {
				var resource = this.$resource('/api/books{/id}');

				resource.get({id: this.id}).then((response) => {
					this.$set('ad', response.data);
				}, (response) => {
					this.$set('errors', response.data);
				});
			}
		}
	}
</script>