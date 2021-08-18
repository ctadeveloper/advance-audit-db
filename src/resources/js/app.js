/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
// window.Vue = require('vue');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue loading
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
Vue.component('file-component', require('./components/Files/index.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted(){
        // if(!localStorage.getItem('accesstoken')){
        // CREATE TOKEN
        const data = {
            name: 'Rinzin',
            redirect: 'http://google.com/callback'
        };
        axios.post('/oauth/clients', data)
            .then(response => {
                console.log(response.data);
            })
            .catch (response => {
                // List errors on response...
            });

        // CREATE PERSONAL TOKEN
        const token = {
            name: 'Token Name',
            scopes: []
        };
        axios.post('/oauth/personal-access-tokens', token)
            .then(response => {
                // console.log(response.data.accessToken);
                localStorage.setItem('accessToken',"Bear "+response.data.accessToken)
            })
            .catch (response => {
                // List errors on response...
            });
        }
        // UPDATE TOKEN
        // const data = {
        //     name: 'HELLOW',
        //     redirect: 'http://example.com/CALLMEALLTHTIME'
        // };
        
        // axios.put('/oauth/clients/942e4c86-a977-4325-b923-acadf161e7f5', data)
        //     .then(response => {
        //         console.log(response.data);
        //     })
        //     .catch (response => {
        //         // List errors on response...
        //     });
        // DELETE TOKEN
        // const clientId = '12';
        // axios.delete('/oauth/clients/' + clientId)
        // .then(response => {
        //     //
        // });
    // }
});
