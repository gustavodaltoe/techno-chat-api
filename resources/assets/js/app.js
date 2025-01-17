
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));

const app = new Vue({
    el: '#app',

    data: {
        mensagens: []
    },

    created() {
        this.fetchMessages();
        window.Echo.private('chat').listen('App\\Events\\MessageSent', (e) => {
                console.log(e);
                this.mensagens.push({
                    mensagem: e.mensagem.conteudo,
                    user: e.user
                });
            });
    },

    methods: {
        fetchMessages() {
            axios.get('/chatApi/mensagens').then(response => {
                this.mensagens = response.data;
            });
        },

        addMessage(mensagem) {
            this.mensagens.push(mensagem);

            axios.post('/chatApi/mensagens', mensagem).then(response => {
              console.log(response.data);
            });
        }
    }
});