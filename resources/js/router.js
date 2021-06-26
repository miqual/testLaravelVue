import Vue from 'vue';
import VueRouter from 'vue-router';

// import Index from '../views/index';
// import NotFound from '../views/notFound';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/s',
            name: 'index',
            //component: Index
        },
        {
            path: '*',
            name: '404',
            //component: NotFound
        }
    ]
});

export default router;