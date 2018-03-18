
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import BooksIndex from './components/books/BooksIndex.vue';
import BookCreate from './components/books/BookCreate.vue';
import BookEdit from './components/books/BookEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            booksIndex: BooksIndex
        }
    },
    {path: '/admin/books/create', component: BookCreate, name: 'createBook'},
    {path: '/admin/books/edit/:id', component: BookEdit, name: 'editBook'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
