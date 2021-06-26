import Vue from 'vue';
import VueRouter from 'vue-router';

// import Index from '../views/index';
// import NotFound from '../views/notFound';
const index = () => import('./components/IndexComponent.vue')
const notFound = () => import('./components/NotFoundComponent.vue')
const example = () => import('./components/ExampleComponent.vue')

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/s',
            name: 'index',
            component: index
        },
        {
            path: '/example',
            name: 'example',
            component: example
        },
        {
            path: '*',
            name: '404',
            component: notFound
        }
    ]
});

export default router;