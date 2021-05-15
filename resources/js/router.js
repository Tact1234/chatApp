import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/content1",
        name: "Content1",
        component: () => import("./components/Content1.vue")
    },
    {
        path: "/content2",
        name: "Content2",
        component: () => import("./components/Content2.vue")
    },
    {
        path: "/content3",
        name: "Content3",
        component: () => import("./components/Content3.vue")
    },
    {
        path: "/content4",
        name: "Content4",
        component: () => import("./components/Content4.vue")
    },
    {
        path: "/content5",
        name: "Content5",
        component: () => import("./components/Content5.vue")
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
