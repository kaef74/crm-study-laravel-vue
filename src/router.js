import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import Login from './views/Login.vue';
import TheDashboard from './components/TheDashboard.vue';
import TheSchedule from './components/TheSchedule.vue';
import ThePerformance from './components/ThePerformance.vue';

Vue.use(VueRouter);

const routes = [
  { path: '/', component: Home },
  { path: '/login', component: Login },
  { path: '/dashboard', component: TheDashboard },
  { path: '/schedule', component: TheSchedule },
  { path: '/performance', component: ThePerformance }
];

const router = new VueRouter({
  mode: 'history',
  routes
});

export default router;
