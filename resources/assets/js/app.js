import Vue from 'vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
Vue.use(VueResource)
Vue.use(VueRouter)

var vm = new Vue({
	el: '#budapp',
	data: {
		words: {},
		select: {},
		search_word: '',
		mean: ''
	},
	methods: {
		fetchWord: function () {
			this.$http.get('/api/words').then((data) => {
				this.$set('words', data.json())
      		});
		},
		fillmean: function (word){
			this.$set('mean', word.desc);
		}
	},
	ready: function () {
		this.fetchWord()
	}
});


