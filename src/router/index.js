import { createRouter, createWebHistory } from "vue-router";
import register from "../views/register.vue";
import login from "../views/login.vue";
import forget from "../views/forget.vue";
import dashbord from "../views/dashbord.vue";

const routes = [
  {
    path: "/",
    name: "register",
    component: register,
  },
  {
    path: "/login",
    name: "login",
    component: login,
  },
  {
    path: "/forget",
    name: "forget",
    component: forget,
  },
  {
    path: "/dashbord",
    name: "dashbord",
    component: dashbord,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
