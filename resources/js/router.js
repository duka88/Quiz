import Vue from 'vue';
import VueRouter from 'vue-router';
import store from './store/index';



Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [ ]
});

/*
router.beforeEach(async (to, from, next) => {
    const requiresAuth = to.matched.some(record => record.meta.requiresAuth)

    if (requiresAuth && user === 0) {
        next('login')
    }

    if ((to.name === 'login' || to.name === 'register') && user === 1) {
        next('/')
    }

    if(user) {
        await store.dispatch('user/fetchUser')
    }

    next()
})*/

export default router;