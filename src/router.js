import { createRouter, createWebHistory } from 'vue-router';
import TheStartPage from '@/views/TheStartPage.vue';
import TheSystem from '@/views/TheSystem.vue';
import TheCathedra from './views/TheCathedra.vue';

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
  {
    path: '/cathedra',
    name: 'Cathedra',
    component: TheCathedra,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
