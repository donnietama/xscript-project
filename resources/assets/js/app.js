
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Import jQuery secara global.
 * ----------------------------------
 * Package ini diperlukan untuk menangani semua efek
 * animasi baik di dalam dashboard admin maupun
 * user environtment.
 */

import $ from 'jquery';

window.$ = $;
window.jQuery = $;


/**
 * Import TinyMCE secara global.
 * ----------------------------------
 * Package ini dibutuhkan untuk keperluan pembuatan artikel
 * di admin dashboard.
 */

import tinymce from 'tinymce/tinymce'
import 'tinymce/themes/modern/theme'

// Plugin TinyMCE
import 'tinymce/plugins/paste/plugin'
import 'tinymce/plugins/link/plugin'
import 'tinymce/plugins/autoresize/plugin'

tinymce.init({
    selector: '#tinymce-editor',
    plugins: ['paste', 'link', 'autoresize'],
    branding: false,
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
