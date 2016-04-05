<style lang="stylus" scoped>	
.hero-banner
	background #2797B1 !important
	color #fff

.bold-text
	font-weight 600
</style>

<template>
  <div class="section no-pad-bot hero-banner" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center">Venda ou doe livros mais rápido do que nunca</h1>
      <div class="row center">
        <h5 class="header col s12 light">Usando o Livro Fácil, você se desfaz de seus livros em questão de minutos. :)</h5>
      </div>
      <div class="row center">
        <a href="" id="download-button" class="btn-large waves-effect waves-light pink">Comece a anunciar</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
  	<div class="row">
  		<div class="col s12 m12 center"><h1 class="bold-text">Livros anunciados recentemente</h1></div>
  	</div>
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
	        <div class="col s12 m3" v-for="ad in ads">
	          <div class="card">
	            <div class="card-image">
	              <img src="images/placeholder.jpg">
	              <span class="card-title">{{ ad.title }} — <strong>R$ {{ ad.price }},00</strong></span>
	            </div>
	            <div class="card-content">
	              <p>{{ ad.content }}</p>
	            </div>
	            <div class="card-action">
	              <a href="/books/{{ ad.slug }}">Ver mais</a>
	              <span class="right">{{ ad.state.name }}</span>
	            </div>
	          </div>
	        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
            <button data-target="modal1" class="btn modal-trigger">Modal</button>

          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

   <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  </template>

  <script>

export default {

	data() {
		return {
			ads: [],
		}
	},

	created() {
		if (!localStorage.state_id) {
			localStorage.setItem('state_id', 14);
		}
		this.getLatestAds();

	},

	methods: {
		getLatestAds() {
			this.$http.get('/api/ads', {state: localStorage.state_id }).then((response) => {
				this.$set('ads', response.data);
			}, (response) => {
				console.log(response.data);
			});
		},
	}
}

  </script>