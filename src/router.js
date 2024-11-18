import { createRouter, createWebHistory } from 'vue-router';
import TheStartPage from '@/views/TheStartPage.vue';
import TheSystem from '@/views/TheSystem.vue';

const routes = [
  {
    path: '/',
    name: 'StartPage',
    component: TheStartPage,
  },
  {
    path: '/system',
    name: 'System',
    component: TheSystem,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
