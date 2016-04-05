var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

import LandingPage from './components/Landing/Index.vue';
import Register from './components/auth/Register.vue';
import BooksShow from './components/Books/Show.vue';

new Vue({
	el: 'body',

	components: {
		LandingPage,
		Register,
		BooksShow
	}

});